<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('default/home.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/patisserie', name: 'app_patisserie')]
    public function patisserie(): Response
    {
        return $this->render('default/patisserie.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/boulangerie', name: 'app_boulangerie')]
    public function boulangerie(): Response
    {
        return $this->render('default/boulangerie.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
