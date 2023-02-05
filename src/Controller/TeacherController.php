<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TeacherController extends AbstractController
{
    #[Route('/Teacher/{name}')]
    public function showTeacher($name)
    {
        return new Response("Bonjour $name");
    }
    #[Route('/Teacher2/{name}')]
    public function show2($name): Response
    {
        return $this->render('/teacher/showTeacher.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/index')]
    public function index()
    {
        return $this->forward('App\Controller\StudentController::index');
    }
}
