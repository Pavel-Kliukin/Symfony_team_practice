<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    #[Route('/question/{slug}', name: 'app_show')]
    public function index(Request $question) 
    {
        return new Response ($this->render('show/index.html.twig', [
            'controller_name' => '$question',
        ]))
    };
}
