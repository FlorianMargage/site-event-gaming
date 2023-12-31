<?php
// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('index.html.twig', []);
    }

    public function inscription(): Response
    {
        return $this->render('inscription.html.twig', []);
    }
}


