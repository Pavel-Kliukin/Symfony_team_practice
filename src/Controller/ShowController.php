<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    #[Route('/question/{some_question}', name: 'app_show')]
    public function index($some_question): Response 
    {
        return $this->render('show/index.html.twig', [
            'question_text' => $some_question
        ]);
    }
}
