<?php

// src/Controller/MonController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MonService;

class MonController extends AbstractController
{
    private $monService;

    public function __construct(MonService $monService)
    {
        $this->monService = $monService;
    }

    /**
     * @Route("/afficher-parametre", name="afficher_parametre")
     */
    public function afficherParametre(): Response
    {
        $parametre = $this->monService->afficherParametre();
        return new Response("Le paramètre est : " . $parametre);
    }
}
