<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('main/homepage.html.twig');
    }
}