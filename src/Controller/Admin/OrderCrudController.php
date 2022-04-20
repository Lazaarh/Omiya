<?php

namespace App\Controller\Admin;

use App\Classe\Mail;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OrderCrudController extends AbstractCrudController
{
    private $entityManager;
    private $adminUrlGenerator;

    public function __construct(EntityManagerInterface $entityManager, AdminUrlGenerator $adminUrlGenerator)
    {
        $this->entityManager = $entityManager;
        $this->adminUrlGenerator = $adminUrlGenerator;
        
    }

    public static function getEntityFqcn(): string
    {
        return Order::class;
    }


    public function configureActions(Actions $actions): Actions
    {

        $updatePrepation = Action::new('updatePreparation', 'Preparation en cours')->linkToCrudAction('updatePrepation');
        $updateDelivery = Action::new('updateDelivery', 'Livraison en cours')->linkToCrudAction('updateDelivery');

        return $actions
            ->add('detail', $updatePrepation)
            ->add('detail', $updateDelivery)
            ->add('index', 'detail');
    }
    

    public function updatePrepation(AdminContext $context)
    {
        $order = $context->getEntity()->getInstance();
        $order->setState(2);
        $this->entityManager->flush();

        $this->addFlash('notice', '<span style="color:green;"><strong>La commande' . $order->getReference() . ' est bien en cours de préparation</strong></span>');
        $url = $this->adminUrlGenerator
            ->setController(OrderCrudController::class)
            ->setAction('index')
            ->generateUrl();


        $mail = new Mail();
        $content = "Bonjour". ' '.$order->getUser()->getFirstName(). "<br/> Votre commande" . ' '.$order->getReference(). ' ' ."est en cours de preparation. <br/>Vous pourrez retrouver les details de votre commande dans votre espace personnel. ";
        $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Preparation de votre commande Omiya', $content);

        return $this->redirect($url);

        
        }


    public function updateDelivery(AdminContext $context)
    {
        $order = $context->getEntity()->getInstance();
        $order->setState(3);
        $this->entityManager->flush();
    
        $this->addFlash('notice', '<span style="color:green;"><strong>La commande' . $order->getReference() . ' est en cours de livraison</strong></span>');
        $url = $this->adminUrlGenerator
            ->setController(OrderCrudController::class)
            ->setAction('index')
            ->generateUrl();

        $mail = new Mail();
        $content = "Bonjour". ' '.$order->getUser()->getFirstName(). "<br/> Votre commande" . ' '.$order->getReference(). ' ' ."est en cours de livraison. <br/>Vous pourrez la suivre sur via ce lien. ";
        $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Livraison de votre commande Omiya', $content);
        
        return $this->redirect($url);

        
    }    


    public function configureCrud(Crud $crud): Crud 
    {
        return $crud->setDefaultSort(['id'=>'DESC']);
    }
 

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            DateField::new('createdAt', "Passée le"),
            TextField::new('user.getFullName', "Utilisateur"),
            TextEditorField::new('delivery', 'Adresse de livraison')->formatValue(function ($value) { return $value; })->onlyOnDetail(),
            MoneyField::new('total')->setCurrency('EUR'),
            TextField::new('carrierName', "Transporteur"),
            MoneyField::new('carrierPrice', "Frais de port")->setCurrency('EUR'),
            ChoiceField::new('state')->setChoices([
                'Non payee' => 0,
                'Payee' => 1,
                'Preparation en cours' => 2,
                'Livraison en cours' => 3,
            ]),
            ArrayField::new('orderDetails', "Produits achetes")->hideOnIndex(),
        ];
    }
    
}
