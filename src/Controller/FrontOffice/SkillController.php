<?php

namespace App\Controller\FrontOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillController extends AbstractController
{
    /**
     * @Route("/skill", name="frontoffice_skill_index")
     */
    public function index(): Response
    {
        return $this->render('frontoffice/skill/index.html.twig', [
            'controller_name' => 'SkillController',
        ]);
    }

    /**
     * @Route("/skill/{id}", name="frontoffice_skill_show")
     */
    public function show(int $id): Response
    {
        // You can retrieve the skill entity here and pass it to the template
        // $skill = $this->getDoctrine()->getRepository(Skill::class)->find($id);

        return $this->render('frontoffice/skill/show.html.twig', [
            'id' => $id,
            // 'skill' => $skill,
        ]);
    }
}