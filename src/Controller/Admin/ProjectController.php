<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/projects')]
#[IsGranted('ROLE_ADMIN')]
class ProjectController extends AbstractController
{

    #[Route('/', name: 'admin_project_list')]
    public function list(ProjetRepository $projetRepository, \Knp\Component\Pager\PaginatorInterface $paginator, Request $request): Response
    {
        // Récupérer toutes les années de début des projets (requête SQL native)
        $conn = $projetRepository->getEntityManager()->getConnection();
        $sql = 'SELECT DISTINCT YEAR(date_debut) AS annee FROM projet ORDER BY annee DESC';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $annees = $resultSet->fetchAllAssociative();

        $anneesList = [];
        foreach ($annees as $row) {
            if ($row['annee']) {
                $anneesList[$row['annee']] = $row['annee'];
            }
        }

        // Types de projet (adapte si besoin)
        $types = ['Scolaire' => 'Scolaire', 'Pro' => 'Pro', 'Perso' => 'Perso'];

        // Création du formulaire de filtre
        $form = $this->createForm(\App\Form\ProjectTypeFilterType::class, null, [
            'types' => $types,
            'annees' => $anneesList,
        ]);
        $form->handleRequest($request);

        $qb = $projetRepository->createQueryBuilder('p');

        // Filtre recherche par titre ou description
        $search = $request->query->get('search');
        if ($search) {
            $qb->andWhere('p.titre LIKE :search OR p.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if (!empty($data['annee'])) {
                // Utilisation de SUBSTRING pour extraire l'année (compatible DQL)
                $qb->andWhere('SUBSTRING(p.dateDebut, 1, 4) = :annee')
                   ->setParameter('annee', $data['annee']);
            }
            if (!empty($data['typeProjet'])) {
                $qb->andWhere('p.typeProjet = :typeProjet')
                   ->setParameter('typeProjet', $data['typeProjet']);
            }
        }

        $query = $qb->orderBy('p.dateDebut', 'DESC')
                 ->addOrderBy('p.id', 'ASC')
                 ->getQuery();
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // page courante
            3 // éléments par page
        );

        return $this->render('admin/projects/index.html.twig', [
            'pagination' => $pagination,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'admin_project_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $projet = new \App\Entity\Projet();
        $form = $this->createForm(\App\Form\ProjectType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Calcul automatique de la durée
            $dateDebut = $projet->getDateDebut();
            $dateFin = $projet->getDateFin();
            $entityManager->persist($projet);
            $entityManager->flush();
            $this->addFlash('success', 'Projet créé avec succès.');
            return $this->redirectToRoute('admin_project_list');
        }

        return $this->render('admin/projects/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_project_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Projet $projet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(\App\Form\ProjectType::class, $projet);
        $form->handleRequest($request);

        // Sauvegarder l'image actuelle avant traitement
        $oldImage = $projet->getImage();

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            $deleteImage = $request->request->get('delete_image');
            $page = $request->request->get('page', 1);

            if ($deleteImage) {
                // Supprimer l'image du projet
                if ($oldImage) {
                    $imagePath = $this->getParameter('images_directory') . '/' . basename($oldImage);
                    if (file_exists($imagePath)) {
                        @unlink($imagePath);
                    }
                }
                $projet->setImage(null);
            } elseif ($imageFile) {
                // Générer un nom de fichier unique
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                // Déplacer le fichier dans le dossier public/assets/images
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
                // Enregistrer le nom du fichier dans l'entité
                $projet->setImage('images/' . $newFilename);
            } else {
                // Si aucune nouvelle image n'est uploadée et la case supprimer n'est pas cochée, on conserve l'ancienne
                $projet->setImage($oldImage);
            }
            // Calcul automatique de la durée
            $dateDebut = $projet->getDateDebut();
            $dateFin = $projet->getDateFin();
            $entityManager->flush();
            $this->addFlash('success', 'Projet modifié avec succès.');
            return $this->redirectToRoute('admin_project_list', ['page' => $page]);
        }

        return $this->render('admin/projects/edit.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_project_delete', methods: ['POST'])]
    public function delete(Projet $projet, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($projet);
        $entityManager->flush();
        $this->addFlash('success', 'Projet supprimé avec succès.');
        return $this->redirectToRoute('admin_project_list');
    }
}

