<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;

class AccountController extends AbstractController
{
    public function account(): Response
    {
        $user = $this->getDoctrine()->getRepository(Utilisateur::class)->findOneBy(['Pseudo' => 'Devorift']);

        return $this->render('account.html.twig', [
            'user' => $user,
        ]);
    }
}
