<?php
namespace App\Controller\Admin;

use App\Entity\Projet;
use App\Entity\ProjetImage;
use App\Repository\ProjetImageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ImageProjetType;

class GalerieController extends AbstractController
{
    #[Route('/admin/images/ajouter', name: 'admin_image_create')]
    public function addImage(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ImageProjetType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $imageFile = $form->get('image')->getData();
            $projet = $form->get('projet')->getData();
            if ($imageFile && $projet) {
                $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/assets/images/';
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = preg_replace('/[^A-Za-z0-9_]/', '', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move($uploadsDir, $newFilename);
                    $projetImage = new ProjetImage();
                    $projetImage->setImagePath('images/' . $newFilename);
                    $projetImage->setProjet($projet);
                    $em->persist($projetImage);
                    $em->flush();
                    $this->addFlash('success', 'Image ajoutée au projet !');
                    return $this->redirectToRoute('admin_images');
                } catch (\Exception $e) {
                    $this->addFlash('error', "Erreur lors de l'upload de l'image : " . $e->getMessage());
                }
            }
        }

        return $this->render('admin/images/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/images/{id}/delete', name: 'admin_image_delete', methods: ['POST'])]
    public function deleteImage(int $id, EntityManagerInterface $em): Response
    {
        $image = $em->getRepository(ProjetImage::class)->find($id);
        if (!$image) {
            throw $this->createNotFoundException('Image non trouvée');
        }
        // Supprimer le fichier physique
    $filePath = $this->getParameter('kernel.project_dir') . '/public/assets/' . $image->getImagePath();
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $em->remove($image);
        $em->flush();
        $this->addFlash('success', 'Image supprimée avec succès !');
        return $this->redirectToRoute('admin_image_list');
    }

    #[Route('/admin/images', name: 'admin_image_list')]
    public function index(ProjetImageRepository $projetImageRepository): Response
    {
        $images = $projetImageRepository->findAll();
        return $this->render('admin/images/index.html.twig', [
            'images' => $images,
        ]);
    }

    #[Route('/admin/projets/{projetId}/galerie', name: 'admin_project_gallery')]
    public function galerie(int $projetId, ProjetImageRepository $projetImageRepository, EntityManagerInterface $em, Request $request): Response
    {
        $projet = $em->getRepository(Projet::class)->find($projetId);
        if (!$projet) {
            throw $this->createNotFoundException('Projet non trouvé');
        }

        // Gestion de l’upload d’image
        if ($request->isMethod('POST') && $request->files->get('image')) {
            $imageFile = $request->files->get('image');
            if ($imageFile && $imageFile->isValid()) {
                $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/assets/images/';
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = preg_replace('/[^A-Za-z0-9_]/', '', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move($uploadsDir, $newFilename);
                    $projetImage = new ProjetImage();
                    $projetImage->setImagePath('images/' . $newFilename);
                    $projetImage->setProjet($projet);
                    $em->persist($projetImage);
                    $em->flush();
                    $this->addFlash('success', 'Image ajoutée au projet !');
                    return $this->redirectToRoute('admin_project_gallery', ['projetId' => $projetId]);
                } catch (\Exception $e) {
                    $this->addFlash('error', "Erreur lors de l'upload de l'image : " . $e->getMessage());
                }
            }
        }

        // Images non associées à un projet OU associées à ce projet
        $images = $projetImageRepository->findBy(['projet' => [null, $projet]]);
        return $this->render('admin/images/gallery.html.twig', [
            'projet' => $projet,
            'images' => $images,
        ]);
    }
}
