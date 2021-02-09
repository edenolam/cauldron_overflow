<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return new Response('What a bewitching controller we have conjured');
    }
    /**
     * @Route("/questions/{slug}", name="show")
     */
    public function show($slug)
    {
        return new  Response(sprintf(
            'future page to show the question "%s"!',
            str_replace('-', '', $slug)
        ));
    }
}
