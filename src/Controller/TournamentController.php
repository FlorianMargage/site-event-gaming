<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;

class TournamentController extends AbstractController
{

    /**
     * @Route("/tournoi", name="home")
     */

    public function home()
    {
        return $this->render('home.html.twig', []);
    }

    public function account(Request $request): Response
    {
        $pseudo = $request->request->get('pseudo');
        $motDePasse = $request->request->get('mot_de_passe');
        $user = $this->getDoctrine()->getRepository(Utilisateur::class)->findOneBy(['Pseudo' => $pseudo, 'Mdp' => $motDePasse]);

        return $this->render('account.html.twig', [
            'user' => $user,
        ]);
    }

}

