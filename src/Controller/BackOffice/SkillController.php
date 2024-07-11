<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Skill; // Assurez-vous d'inclure votre entité Skill
use Doctrine\ORM\EntityManagerInterface;

/**
 * @Route("/admin/skill")
 */
class SkillController extends AbstractController
{
    /**
     * @Route("/", name="backoffice_skill_index")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $skills = $em->getRepository(Skill::class)->findAll();

        return $this->render('backoffice/skill/index.html.twig', [
            'controller_name' => 'SkillController',
            'skills' => $skills,
        ]);
    }

    /**
     * @Route("/{id}", name="backoffice_skill_show")
     */
    public function show(Skill $skill): Response
    {
        return $this->render('backoffice/skill/show.html.twig', [
            'skill' => $skill,
        ]);
    }
}
