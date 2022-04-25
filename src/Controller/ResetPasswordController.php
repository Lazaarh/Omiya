<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use DateTimeImmutable;
use App\Entity\ResetPassword;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ResetPasswordController extends AbstractController

{
    private $entityManager;

        public function __construct(EntityManagerInterface $entityManager)
        {
            $this->entityManager = $entityManager;
        }
    

    #[Route('/mot-de-passe-oublie', name: 'reset_password')]

    public function index(Request $request): Response
    {

        if($this->getUser()){
            return $this->redirectToRoute('home');
        }

        if($request->get('email')){
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->get('email'));
    
            if($user){
                // enregistrement dans la base la demande de reset password avec user, token et createdAt
                $reset_password = new ResetPassword();
                $reset_password->setUser($user);
                $reset_password->setToken(uniqid());
                $reset_password->setCreatedAt(new \DateTimeImmutable());
                
                $this->entityManager->persist($reset_password);
                $this->entityManager->flush();


                // Envoie email au user avec un lien pour reset le password
            
                $url = $this->generateUrl('update_password', [
                    'token' => $reset_password->getToken()
                    ],
                    UrlGeneratorInterface::ABSOLUTE_URL
                );


                $content = "Bonjour ".$user->getFirstName()."<br/> Vous avez demande a reinitialiser votre mot de passe. <br/><br/>";
                $content .= "Veuillez cliquer sur le <a href='".$url."'>lien suivant</a> pour modifier votre mot de passe.";

                $mail = new Mail();
                $mail->send($user->getEmail(), $user->getFirstname(), 'Reinitialisation de votre mot de passe', $content);
            }
        }

        return $this->render('reset_password/index.html.twig');
    }


    #[Route('/modifier-mon-mot-de-passe/{token}', name: 'update_password')]

    public function update($token): Response
    {
        dd($token);
    }
}