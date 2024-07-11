<?php

// tests/Service/MonServiceTest.php
namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use App\Service\MonService;

class MonServiceTest extends TestCase
{
    public function testAfficherParametre()
    {
        $params = $this->createMock(ParameterBagInterface::class);
        $params->method('get')
            ->with('nom_du_parametre')
            ->willReturn('valeur_du_parametre');

        $monService = new MonService($params);
        $this->assertEquals('valeur_du_parametre', $monService->afficherParametre());
    }
}
