<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CGUController extends AbstractController
{
    #[Route('/nos-cgu', name: 'cgu')]
    public function index(): Response
    {
        return $this->render('cgu.html.twig');
    }
}
