<?php

// src/Controller/ProjetController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    /**
     * @Route("/projet", name="projet_index")
     */
    public function index(): Response
    {
        return $this->render('projet/index.html.twig');
    }

    /**
     * @Route("/projet/apimages", name="projet_apimages")
     */
    public function apimages(): Response
    {
        return $this->render('projet/apimages.html.twig');
    }

    /**
     * @Route("/projet/portfolio", name="projet_portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('projet/portfolio.html.twig');
    }

    /**
     * @Route("/projet/fedhubs", name="projet_fedhubs")
     */
    public function fedhubs(): Response
    {
        return $this->render('projet/fedhubs.html.twig');
    }

    // Ajoutez d'autres méthodes et routes pour vos projets ici
}
