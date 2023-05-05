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
        $answers = ['answer1', 'answer2', 'answer3'];

        $formattedquestion = ucwords(str_replace('_', ' ', $some_question));
        $message = sprintf("The question is: %s?", $formattedquestion);

        return $this->render('question/show.html.twig', [
            'question' => $message,
            'answers' => $answers
        ]);
    }
}
