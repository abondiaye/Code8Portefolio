<?php

// src/Controller/BackOffice/ProjectController.php
namespace App\Controller\BackOffice;

use App\Entity\Project;
use App\Form\ProjectType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/backoffice/project')]
class ProjectController extends AbstractController
{
    #[Route('/new', name: 'backoffice_project_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($project);
            $entityManager->flush();

            return $this->redirectToRoute('backoffice_project_list');
        }

        return $this->render('backoffice/project/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/list', name: 'backoffice_project_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $projects = $entityManager->getRepository(Project::class)->findAll();

        return $this->render('backoffice/project/list.html.twig', [
            'projects' => $projects,
        ]);
    }

    // Ajoutez d'autres méthodes pour l'édition, la suppression, etc.
}
