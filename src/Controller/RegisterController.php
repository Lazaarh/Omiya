<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{

    public function __construct(private ManagerRegistry $doctrine){}

    #[Route('/inscription', name: 'register')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {

        $notification = null;
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request); //formulaire capable d ecouter la requete

        if ($form->isSubmitted() && $form->isValid()){

            $user = $form->getData();

            $search_email = $this->doctrine->getRepository(User::class)->findOneByEmail($user->getEmail());

            if (!$search_email) {

                $password = $passwordHasher->hashPassword($user, $user->getPassword());
            
                $user->setPassword($password);
    
                $em = $this->doctrine->getManager();
                $em->persist($user);
                $em->flush();

                $mail = new Mail();
                $content = "Bonjour ".$user->getFirstName()."<br/> Merci pour votre inscription sur notre site Omiya. <br/>N'hésitez pas à faire un tour dans notre boutique pour trouver les produits que vous aimez ! ";
                $mail->send($user->getEmail(), $user->getFirstname(), 'Bienvenue sur Omiya', $content);

                $notification = "Inscription terminée";

            } else {

                $notification = 'Un compte existe déjà pour cette adresse email';
            }


           

            
        }




        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
            'notification' => $notification
        ]);
    }
}
