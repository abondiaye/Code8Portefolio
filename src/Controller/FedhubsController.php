<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FedhubsController extends AbstractController
{
    /**
     * @Route("/projet/fedhubs", name="projet_fedhubs")
     */
    public function fedhubs(): Response
    {
        return $this->render('projet/fedhubs.html.twig');
    }
}
