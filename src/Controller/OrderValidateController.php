<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\Mail;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderValidateController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route ("/commande/merci/{stripeSessionId}", name="order_validate")
     */
    public function index($stripeSessionId, Cart $cart)
    {

        $order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);

        if(!$order || $order->getUser() != $this->getUser()){
            return $this->redirectToRoute('home');
        }

        if($order->getState() == 0){

            $cart->remove();

            $order->setState(1);
            $this->entityManager->flush();

            $mail = new Mail();
            $content = "Bonjour". ' '.$order->getUser()->getFirstName()."<br/> Merci pour votre commande sur notre site Omiya. <br/>Vous pourrez retrouver les détails de votre commande dans votre espace personnel. ";
            $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Votre commande Omiya', $content);
        }
        
        return $this->render('order_validate/index.html.twig',[
            'order' => $order
        ]);
    }
}
