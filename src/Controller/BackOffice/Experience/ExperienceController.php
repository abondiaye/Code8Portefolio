<?php

// src/Controller/BackOffice/ExperienceController.php
namespace App\Controller\BackOffice\Experience;

use App\Entity\Experience;
use App\Form\ExperienceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/experience')]
class ExperienceController extends AbstractController
{
    #[Route('/new', name: 'backoffice_experience_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($experience);
            $entityManager->flush();

            return $this->redirectToRoute('backoffice_experience_list');
        }

        return $this->render('backoffice/experience/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/list', name: 'backoffice_experience_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $experiences = $entityManager->getRepository(Experience::class)->findAll();

        return $this->render('backoffice/experience/list.html.twig', [
            'experiences' => $experiences,
        ]);
    }
}
