<?php
// src/Controller/PortefolioController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortefolioController extends AbstractController
{
    /**
     * @Route("/portefolio", name="portefolio")
     */
    public function index(): Response
    {
        // Exemple de données de projets
        $projects = [
            [
                'title' => 'Project 1',
                'github_link' => 'https://github.com/user/project1',
                'demo_link' => 'https://project1.demo.com',
                'code_link' => 'https://project1.demo.com/code',
            ],
            [
                'title' => 'Project 2',
                'github_link' => 'https://github.com/user/project2',
                'demo_link' => 'https://project2.demo.com',
                'code_link' => 'https://project2.demo.com/code',
            ],
            // Ajoute d'autres projets ici...
        ];

        // Passe la variable 'projects' au template 'index.html.twig'
        return $this->render('portefolio/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    /**
     * @Route("/resume", name="resume")
     */
    public function resume(): Response
    {
        return $this->render('portefolio/resume.html.twig');
    }
}
