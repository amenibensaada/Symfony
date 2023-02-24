<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ClassroomController extends AbstractController
{
    #[Route('/classroom', name: 'app_classroom')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Classroom::Class);
        $classroom = $repo->findAll();
        var_dump($classroom);
        die();
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'classroomController',
        ]);
    }
}
