<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use DateTimeImmutable;
use App\Entity\ResetPassword;
use App\Form\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

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


                $content = "Bonjour ".$user->getFirstName()."<br/> Vous avez demandé à reinitialiser votre mot de passe. <br/><br/>";
                $content .= "Veuillez cliquer sur le <a href='".$url."'>lien suivant</a> pour modifier votre mot de passe.";

                $mail = new Mail();
                $mail->send($user->getEmail(), $user->getFirstname(), 'Réinitialisation de votre mot de passe', $content);
            
                $this->addFlash('notice', 'Votre demande a été prise en compte, vous allez recevoir un mail dans quelques instants.');


            } else {

            $this->addFlash('notice', "Aucun compte n'existe avec cette adresse email.");

            }
        }

        return $this->render('reset_password/index.html.twig');
    }


    #[Route('/modifier-mon-mot-de-passe/{token}', name: 'update_password')]

    public function update(Request $request, $token, UserPasswordHasherInterface $passwordHasher): Response
    {
        $reset_password = $this->entityManager->getRepository(ResetPassword::class)->findOneByToken($token);
        
        if(!$reset_password){
            return $this->redirectToRoute('reset_password');
        }

         // Vérifier si le createdAt = now - 3h
         $now = new \DateTime();
         if ($now > $reset_password->getCreatedAt()->modify('+ 3 hour')) {
             $this->addFlash('notice', 'Votre demande de mot de passe a expiré. Merci de la renouveller.');
             return $this->redirectToRoute('reset_password');
         }
 
         // Rendre une vue avec mot de passe et confirmez votre mot de passe.
         $form = $this->createForm(ResetPasswordType::class);
         $form->handleRequest($request);
 
         if ($form->isSubmitted() && $form->isValid()) {
             
 
            $new_pwd = $form->get('new_password')->getData();

            // Encodage des mots de passe
            $password = $passwordHasher->hashPassword($reset_password->getUser(), $new_pwd);
            $reset_password->getUser()->setPassword($password);

            // Flush en base de donnée.
            $this->entityManager->flush();

 
             // Redirection de l'utilisateur vers la page de connexion.
             $this->addFlash('notice', 'Votre mot de passe a bien été mis à jour.');
             return $this->redirectToRoute('app_login');
         }
 
         return $this->render('reset_password/update.html.twig', [
             'form' => $form->createView()
         ]);
    }
}
