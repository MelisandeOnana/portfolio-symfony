<?php

namespace App\Controller;

use App\Entity\DemandeContact;
use App\Repository\ProjetRepository;
use App\Repository\TechnologieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ProjectTypeFilterType;
use App\Form\TechnologyFilterType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\ContactType;



class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(ProjetRepository $projetRepository, TechnologieRepository $technologieRepository): Response
    {
        // Récupérer les 2 derniers projets basés sur la date de début
        $projets = $projetRepository->findLatestProjects(2);
        $technologies = $technologieRepository->findAllOrdered();
        
        // Compter le nombre total de projets visibles
        $totalProjets = $projetRepository->countVisibleProjects();
        
        // Compter le nombre total de technologies
        $totalTechnologies = $technologieRepository->countAllTechnologies();

        return $this->render('pages/home.html.twig', [
            'projets' => $projets,
            'technologies' => $technologies,
            'totalProjets' => $totalProjets,
            'totalTechnologies' => $totalTechnologies,
        ]);
    }

    #[Route('/projects', name: 'project_list')]
    public function projectsx(Request $request, ProjetRepository $projetRepository, TechnologieRepository $technologieRepository): Response
    {
        $currentType = $request->query->get('type');
        $currentTechnology = $request->query->get('technology');
        
        // Filtrage optimisé via le repository
        if ($currentType && $currentTechnology) {
            $projets = $projetRepository->findByTypeAndTechnology($currentType, $currentTechnology);
        } elseif ($currentType) {
            $projets = $projetRepository->findByType($currentType);
        } elseif ($currentTechnology) {
            $projets = $projetRepository->findByTechnology($currentTechnology);
        } else {
            $projets = $projetRepository->findBy([], ['dateDebut' => 'DESC']);
        }
        
        // Récupérer les types de projets avec gestion d'erreur
        try {
            $projectTypes = $projetRepository->getDistinctTypes();
        } catch (\Exception $e) {
            $projectTypes = [];
        }
        
        // Récupérer les technologies avec compteur avec gestion d'erreur
        try {
            $technologiesWithCount = $technologieRepository->getTechnologiesWithProjectCount();
        } catch (\Exception $e) {
            $technologiesWithCount = [];
        }
        
        // Création des formulaires
        $formType = $this->createForm(ProjectTypeFilterType::class, null, [
            'types' => array_combine($projectTypes, $projectTypes), // clé = valeur
        ]);
        $formTech = $this->createForm(TechnologyFilterType::class, null, [
            'technologies' => array_combine(
                array_map(fn($t) => $t['technologie']->getNom(), $technologiesWithCount),
                array_map(fn($t) => $t['technologie']->getId(), $technologiesWithCount)
            ),
        ]);

        return $this->render('projects/index.html.twig', [
            'projets' => $projets,
            'projectTypes' => $projectTypes,
            'technologiesWithCount' => $technologiesWithCount,
            'currentType' => $currentType,
            'currentTechnology' => $currentTechnology ? (int)$currentTechnology : null,
            'formType' => $formType->createView(),
            'formTech' => $formTech->createView(),
        ]);
    }

    #[Route('/{id}', name: 'project_show', requirements: ['id' => '\d+'])]
    public function show(int $id, ProjetRepository $projetRepository): Response
    {
        $projet = $projetRepository->find($id);

        if (!$projet || !$projet->isVisible()) {
            throw $this->createNotFoundException('Le projet demandé n\'existe pas.');
        }

        return $this->render('projects/show.html.twig', [
            'projet' => $projet,
        ]);
    }

    #[Route('/{id}/galerie', name: 'project_gallery', requirements: ['id' => '\d+'])]
    public function galerie(int $id, ProjetRepository $projetRepository): Response
    {
        $projet = $projetRepository->find($id);

        if (!$projet || !$projet->isVisible()) {
            throw $this->createNotFoundException('Le projet demandé n\'existe pas.');
        }

        return $this->render('projects/gallery.html.twig', [
            'projet' => $projet,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nom = $form->get('nom')->getData();
            $email = $form->get('email')->getData();
            $message = $form->get('message')->getData();

            $demandeContact = new DemandeContact();
            $demandeContact->setNom($nom);
            $demandeContact->setEmail($email);
            $demandeContact->setMessage($message);

            $entityManager->persist($demandeContact);
            $entityManager->flush();

            $this->addFlash('success', 'Votre message a bien été envoyé ! Je vous répondrai dans les plus brefs délais.');

            return $this->redirectToRoute('contact');
        }

        return $this->render('pages/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/skills', name: 'skills_list')]
    public function skills(TechnologieRepository $technologieRepository, Request $request): Response
    {
        $page = max(1, (int)$request->query->get('page', 1));
        $limit = 3;
        $technologies = $technologieRepository->findPaginated($page, $limit);
        $total = $technologieRepository->countAllTechnologies();

        $completed = $technologieRepository->countByStatut('termine');
        $inProgress = $technologieRepository->countByStatut('en_cours');
        $certified = $technologieRepository->countCertified();
        $certificationsPdf = $technologieRepository->countAllCertificationsPdf();

        return $this->render('pages/skills.html.twig', [
            'technologies' => $technologies,
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'completed' => $completed,
            'inProgress' => $inProgress,
            'certified' => $certified,
            'certificationsPdf' => $certificationsPdf,
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }
}
