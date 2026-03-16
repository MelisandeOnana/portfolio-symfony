<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\UtilisateurRepository;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils, TranslatorInterface $translator, UtilisateurRepository $utilisateurRepository): Response
    {
        // Rediriger si l'utilisateur est déjà connecté
        if ($this->getUser()) {
            return $this->redirectToRoute('admin_dashboard');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $customError = null;
        if ($error) {
            // Vérifie si l'email existe
            $user = $utilisateurRepository->findOneBy(['email' => $lastUsername]);
            if (!$user) {
                $customError = "L'adresse e-mail n'existe pas.";
            } else {
                // Personnalisation du message pour mot de passe incorrect
                if (method_exists($error, 'getMessageKey')) {
                    $messageKey = $error->getMessageKey();
                    if ($messageKey === 'Invalid credentials.') {
                        $customError = 'Le mot de passe saisi est incorrect.';
                    } else {
                        $customError = $translator->trans($messageKey, $error->getMessageData(), 'security');
                    }
                } else {
                    $customError = $error->getMessage();
                }
            }
        }

        return $this->render('security/login.html.twig', [
            'error' => $customError,
            'last_username' => $lastUsername
        ]);
    }
    #[Route(path: '/register', name: 'user_register')]
    public function register(\Symfony\Component\HttpFoundation\Request $request, \Doctrine\ORM\EntityManagerInterface $em): Response
    {
        $form = $this->createForm(\App\Form\UserCreateType::class);
        $form->handleRequest($request);
        $success = false;
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $user = new \App\Entity\Utilisateur();
            $user->setNom($data['nom']);
            $user->setPrenom($data['prenom']);
            $user->setEmail($data['email']);
            $user->setRoles($data['roles']);
            $user->setDateCreation(new \DateTime());
            // Hash du mot de passe
            $hashed = password_hash($data['motDePasse'], PASSWORD_BCRYPT);
            $user->setMotDePasse($hashed);
            $em->persist($user);
            $em->flush();
            $success = true;
        }
        return $this->render('security/register.html.twig', [
            'form' => $form->createView(),
            'success' => $success
        ]);
    }

    #[Route(path: '/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
