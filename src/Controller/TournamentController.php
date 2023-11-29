<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TournamentController extends AbstractController
{

    /**
     * @Route("/tournoi", name="home")
     */

    public function home()
    {
        return $this->render('home.html.twig', []);
    }

}

