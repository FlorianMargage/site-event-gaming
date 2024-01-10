<?php
// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;

class IndexController extends AbstractController
{
    public function home(): Response
    {
        return $this->render('home.html.twig', []);
    }

    public function connection(): Response
    {
        return $this->render('connection.html.twig', []);
    }

    public function inscription(): Response
    {
        return $this->render('inscription.html.twig', []);
    }
    public function index(Request $request)
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();
            return $this->redirectToRoute('connection');
            // Redirection ou autre traitement après enregistrement réussi
        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}


