<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur; // Assurez-vous d'importer votre entité

class TestController extends AbstractController
{
    public function test(): Response
    {
        $utilisateurs = $this->getDoctrine()->getRepository(Utilisateur::class)->findAll();

        return $this->render('account.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }
}
