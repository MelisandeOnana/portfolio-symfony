<?php

namespace App\Controller\Admin;

use App\Entity\Technologie;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Repository\TechnologieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/technologies')]
#[IsGranted('ROLE_ADMIN')]
class TechnologyController extends AbstractController
{
    #[Route('/', name: 'admin_technology_list')]
    public function listTechnologies(TechnologieRepository $technologieRepository, \Knp\Component\Pager\PaginatorInterface $paginator, Request $request): Response
    {
        $query = $technologieRepository->createQueryBuilder('t')
            ->orderBy('t.dateDebut', 'DESC')
            ->getQuery();
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 3);
        return $this->render('admin/technologies/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/new', name: 'admin_technology_new', methods: ['GET', 'POST'])]
    public function createTechnology(Request $request, EntityManagerInterface $entityManager, \Symfony\Component\String\Slugger\SluggerInterface $slugger): Response
    {
        if ($request->isMethod('POST')) {
            $technologie = new Technologie();
            $technologie->setNom($request->request->get('nom'));
            $technologie->setDescription($request->request->get('description'));
            $technologie->setDateDebut(new \DateTime($request->request->get('dateDebut')));
            $statut = $request->request->get('statut');
            $technologie->setStatut($statut === '' ? null : $statut);
            $this->handleMultipleCertifications($request, $technologie, $slugger);
            $entityManager->persist($technologie);
            $entityManager->flush();
            $this->addFlash('success', 'Technologie créée avec succès !');
            return $this->redirectToRoute('admin_technology_list');
        }
        return $this->render('admin/technologies/create.html.twig');
    }

    #[Route('/{id}/edit', name: 'admin_technology_edit', methods: ['GET', 'POST'])]
    public function editTechnology(Request $request, Technologie $technologie, EntityManagerInterface $entityManager, \Symfony\Component\String\Slugger\SluggerInterface $slugger): Response
    {
        $form = $this->createForm(\App\Form\TechnologyType::class, $technologie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Forcer null si le niveau sélectionné est vide
            $statut = $request->request->get('statut');
            $technologie->setStatut($statut === '' ? null : $statut);
            $this->handleMultipleCertifications($request, $technologie, $slugger);
            $entityManager->flush();
            $this->addFlash('success', 'Technologie modifiée avec succès !');
            return $this->redirectToRoute('admin_technology_list');
        }
        return $this->render('admin/technologies/edit.html.twig', [
            'form' => $form->createView(),
            'technologie' => $technologie,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_technology_delete', methods: ['POST'])]
    public function deleteTechnology(Technologie $technologie, EntityManagerInterface $entityManager): Response
    {
        $certifications = $technologie->getCertificationsPdf() ?? [];
        foreach ($certifications as $certification) {
            if (isset($certification['filename'])) {
                $filePath = $this->getParameter('kernel.project_dir').'/public/assets/'.$certification['filename'];
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }
        $entityManager->remove($technologie);
        $entityManager->flush();
        $this->addFlash('success', 'Technologie supprimée avec succès !');
        return $this->redirectToRoute('admin_technology_list');
    }

    private function handleMultipleCertifications(Request $request, Technologie $technologie, \Symfony\Component\String\Slugger\SluggerInterface $slugger): void
    {
        $files = $request->files->all('certification_files');
        $titles = $request->request->all('certification_titles');
        if (!empty($files)) {
            foreach ($files as $index => $file) {
                if ($file && $file->isValid()) {
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $originalExtension = $file->guessExtension();
                    $existingCertifications = $technologie->getCertificationsPdf() ?? [];
                    $filenameAlreadyExists = false;
                    foreach ($existingCertifications as $existingCert) {
                        $existingBasename = pathinfo($existingCert['filename'], PATHINFO_FILENAME);
                        if (strpos($existingBasename, $slugger->slug($originalFilename)) === 0) {
                            $filenameAlreadyExists = true;
                            $this->addFlash('info', "Un fichier similaire à '{$originalFilename}' est déjà associé à cette technologie.");
                            break;
                        }
                    }
                    if (!$filenameAlreadyExists) {
                        $uploadsDirectory = $this->getParameter('kernel.project_dir').'/public/assets/certifications';
                        if (!is_dir($uploadsDirectory)) {
                            mkdir($uploadsDirectory, 0755, true);
                        }
                        $safeFilename = $slugger->slug($originalFilename);
                        $finalFilename = $safeFilename . '.' . $originalExtension;
                        $targetPath = $uploadsDirectory . '/' . $finalFilename;
                        $counter = 1;
                        while (file_exists($targetPath)) {
                            $finalFilename = $safeFilename . '-' . $counter . '.' . $originalExtension;
                            $targetPath = $uploadsDirectory . '/' . $finalFilename;
                            $counter++;
                        }
                        try {
                            $file->move($uploadsDirectory, $finalFilename);
                            if ($counter > 1) {
                                $this->addFlash('info', "Fichier renommé pour éviter les conflits: '{$finalFilename}'");
                            }
                        } catch (FileException $e) {
                            $this->addFlash('error', 'Erreur lors de l\'upload d\'un fichier PDF: ' . $e->getMessage());
                            continue;
                        }
                        $title = !empty($titles[$index]) ? $titles[$index] : $originalFilename;
                        $technologie->addCertificationPdf('certifications/' . $finalFilename, $title);
                    }
                }
            }
        }
    }
}
