<?php

namespace App\Controller\Admin;

use App\Repository\DemandeContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/contacts')]
#[IsGranted('ROLE_ADMIN')]
class ContactController extends AbstractController
{
    #[Route('/', name: 'admin_contact_list')]
    public function listContactRequests(DemandeContactRepository $demandeContactRepository, \Knp\Component\Pager\PaginatorInterface $paginator, Request $request): Response
    {
        $query = $demandeContactRepository->createQueryBuilder('c')
            ->orderBy('c.dateEnvoi', 'DESC')
            ->getQuery();
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );
        return $this->render('admin/contacts/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_contact_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(int $id, DemandeContactRepository $demandeContactRepository, EntityManagerInterface $em, Request $request): Response
    {
        $contact = $demandeContactRepository->find($id);
        if (!$contact) {
            throw $this->createNotFoundException('Demande de contact non trouvée.');
        }
        // Protection CSRF
        if ($this->isCsrfTokenValid('delete_contact_' . $contact->getId(), $request->request->get('_token'))) {
            $em->remove($contact);
            $em->flush();
            $this->addFlash('success', 'Le contact a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }
        return $this->redirectToRoute('admin_contact_list');
    }
    #[Route('/{id}', name: 'admin_contact_show', requirements: ['id' => '\d+'])]
    public function show(int $id, DemandeContactRepository $demandeContactRepository): Response
    {
        $contact = $demandeContactRepository->find($id);
        if (!$contact) {
            throw $this->createNotFoundException('Demande de contact non trouvée.');
        }
        return $this->render('admin/contacts/show.html.twig', [
            'contact' => $contact,
        ]);
    }
}
