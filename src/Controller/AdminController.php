<?php

namespace App\Controller;

use App\Entity\Projet;
use App\Entity\Technologie;
use App\Repository\ProjetRepository;
use App\Repository\TechnologieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    // Route et sécurité déjà gérées par les attributs PHP 8 ci-dessous
    // Dashboard
    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(ProjetRepository $projetRepository, TechnologieRepository $technologieRepository, \App\Repository\DemandeContactRepository $demandeContactRepository, \App\Repository\ProjetImageRepository $projetImageRepository): Response
    {
        // Récupérer tous les projets, technologies, demandes de contact et images de projet pour les statistiques
        $projets = $projetRepository->findAll();
        $technologies = $technologieRepository->findAll();
        $demandesContact = $demandeContactRepository->findAll();
        $images = $projetImageRepository->findAll();

        return $this->render('admin/dashboard.html.twig', [
            'projets' => $projets,
            'technologies' => $technologies,
            'demandesContact' => $demandesContact,
            'images' => $images,
        ]);
    }
    #[Route('/profile/edit', name: 'admin_profile_edit')]
    public function editProfile(Request $request, EntityManagerInterface $em, \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('admin_dashboard');
        }

        $form = $this->createForm(\App\Form\UserProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encoder le nouveau mot de passe s'il a été fourni
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $encodedPassword = $passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($encodedPassword);
            }
            
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->render('admin/profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}