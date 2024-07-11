<?php

// src/Service/MonService.php
namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class MonService
{
    private $parametre;

    public function __construct(ParameterBagInterface $params)
    {
        $this->parametre = $params->get('nom_du_parametre');
    }

    public function afficherParametre()
    {
        return $this->parametre;
    }
}
