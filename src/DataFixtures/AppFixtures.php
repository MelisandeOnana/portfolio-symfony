<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\Technologie;
use App\Entity\ProjetImage;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Créer les technologies - mes vraies compétences
        $technologies = [
            1 => [
                'nom' => 'Symfony',
                'description' => 'Framework PHP robuste pour le développement d\'applications web complexes. Maîtrise de l\'architecture MVC, de Doctrine ORM, du système de routing, des formulaires, de la sécurité et des bundles.',
                'dateDebut' => '2024-01-01',
                'statut' => 'termine'
            ],
            2 => [
                'nom' => 'React',
                'description' => 'Bibliothèque JavaScript pour la création d\'interfaces utilisateur dynamiques et interactives. Compétence en composants, hooks, gestion d\'état et intégration avec des APIs.',
                'dateDebut' => '2024-06-01',
                'statut' => 'en_cours'
            ],
            3 => [
                'nom' => 'Laravel',
                'description' => 'Framework PHP élégant avec une syntaxe expressive. Maîtrise d\'Eloquent ORM, du système de routing, des migrations, de l\'authentification et de l\'architecture MVC.',
                'dateDebut' => '2023-09-01',
                'statut' => 'termine'
            ],
            4 => [
                'nom' => 'PHP',
                'description' => 'Langage de programmation côté serveur. Maîtrise du PHP orienté objet (classes, héritage, interfaces, traits) et du PHP procédural pour le développement web.',
                'dateDebut' => '2023-01-01',
                'statut' => 'termine'
            ],
            5 => [
                'nom' => 'PIX',
                'description' => 'Plateforme de développement et de certification des compétences numériques. Certification officielle des compétences digitales et informatiques.',
                'dateDebut' => '2023-01-01',
                'statut' => 'termine',
                'certification' => 'certifications/pix-certification.pdf'
            ],
            6 => [
                'nom' => 'HTML',
                'description' => 'Langage de balisage pour la structure des pages web. Maîtrise des balises sémantiques, de l\'accessibilité, des formulaires et des standards HTML5.',
                'dateDebut' => '2022-09-01',
                'statut' => 'termine'
            ],
            7 => [
                'nom' => 'CSS',
                'description' => 'Langage de feuilles de style pour la présentation des pages web. Compétence en responsive design, flexbox, grid, animations et préprocesseurs.',
                'dateDebut' => '2022-09-01',
                'statut' => 'termine'
            ],
            8 => [
                'nom' => 'Twig',
                'description' => 'Moteur de templates moderne et sécurisé pour PHP. Maîtrise de la syntaxe, des filtres, des fonctions et de l\'héritage de templates dans Symfony.',
                'dateDebut' => '2024-01-01',
                'statut' => 'termine'
            ],
            9 => [
                'nom' => 'Blade',
                'description' => 'Moteur de templates simple et puissant de Laravel. Compétence en directives, héritage de vues, composants et intégration avec l\'écosystème Laravel.',
                'dateDebut' => '2023-09-01',
                'statut' => 'termine'
            ],
            10 => [
                'nom' => 'SQL',
                'description' => 'Langage de requête pour bases de données relationnelles. Maîtrise des requêtes complexes, jointures, sous-requêtes, optimisation et conception de bases de données.',
                'dateDebut' => '2023-01-01',
                'statut' => 'termine'
            ],
            11 => [
                'nom' => 'MySQL',
                'description' => 'Système de gestion de base de données relationnelle. Compétence en administration, optimisation des performances, sécurité et intégration avec PHP.',
                'dateDebut' => '2023-01-01',
                'statut' => 'termine'
            ],
            12 => [
                'nom' => 'Git',
                'description' => 'Système de contrôle de version distribué. Maîtrise des branches, merges, rebases, résolution de conflits et workflows collaboratifs sur GitHub.',
                'dateDebut' => '2023-01-01',
                'statut' => 'termine'
            ]
        ];

        $technologieEntities = [];
        foreach ($technologies as $id => $data) {
            $tech = new Technologie();
            $tech->setNom($data['nom']);
            $tech->setDescription($data['description']);
            $tech->setDateDebut(new \DateTime($data['dateDebut']));
            $tech->setStatut($data['statut']);
            
            if (isset($data['certification'])) {
                $tech->setCertificationPdf($data['certification']);
            }
            
            $manager->persist($tech);
            $technologieEntities[$id] = $tech;
        }

        // Tous vos projets de la base de données
        $projetsData = [
            [
                'id' => 12,
                'titre' => 'Ecosystème',
                'description' => 'Développement d\'un site présentant un écosystème virtuel. Ce projet a été réalisé dans le cadre de la première année de formation et visait à comprendre les bases du développement web et de la gestion de contenu en ligne. Projet scolaire supervisé par M. Espargelière.',
                'dateDebut' => '2023-09-14',
                'dateFin' => '2023-10-19',
                'duree' => 1,
                'visible' => true,
                'lien' => 'projects/Ecosysteme/index.html',
                'image' => 'images/projet1.png',
                'githubLinks' => 'https://github.com/MelisandeOnana/Ecosyst.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [6, 7] // HTML, CSS
            ],
            [
                'id' => 13,
                'titre' => 'Animalerie',
                'description' => 'Conception d\'un site web adaptatif pour une animalerie, présentant ses produits et services. Ce projet visait à développer un site responsive pour des clients divers, en tenant compte des besoins spécifiques de ce type de commerce. Projet scolaire supervisé par M. Espargelière.',
                'dateDebut' => '2023-11-01',
                'dateFin' => '2024-01-01',
                'duree' => 2,
                'visible' => true,
                'lien' => 'projects/Animalerie/index.html',
                'image' => 'images/projet2.png',
                'githubLinks' => 'https://github.com/MelisandeOnana/Animalerie.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [6, 7] // HTML, CSS
            ],
            [
                'id' => 14,
                'titre' => 'Preuve de concept',
                'description' => 'Création d\'un prototype fonctionnel pour prouver la faisabilité d\'une idée en développement web. Ce projet avait pour but de tester un concept simple tout en développant des compétences en conception rapide et réactivité. Réalisé seul supervisé par M. Espargelière.',
                'dateDebut' => '2023-12-01',
                'dateFin' => null,
                'duree' => 0, // 1 semaine
                'visible' => true,
                'lien' => 'projects/Unity/index.html',
                'image' => 'images/projet3.png',
                'githubLinks' => 'https://github.com/MelisandeOnana/Preuve-de-concept-Unity.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [6, 7] // HTML, CSS
            ],
            [
                'id' => 15,
                'titre' => 'MathIndex',
                'description' => 'MathIndex est un projet de fin de première année, réalisé en équipe de 4 étudiants. Il s\'agit d\'une plateforme web proposant des ressources mathématiques interactives pour les élèves et les professeurs. Développé en PHP, HTML, CSS et MySQL, il inclut un système d\'authentification et de gestion des ressources pédagogiques. Ce projet nous a permis d\'approfondir GitHub pour le travail collaboratif, ainsi que la gestion de projet Agile avec des sprints et des réunions hebdomadaires via Discord. Supervision : M. Idasiak et M. Martins Jacquelot.',
                'dateDebut' => '2024-01-01',
                'dateFin' => '2024-04-01',
                'duree' => 3,
                'visible' => true,
                'lien' => 'projects/MathIndex/Accueil.php',
                'image' => 'images/projet4.png',
                'documents' => 'pdf/documentation_mathindex.pdf',
                'githubLinks' => 'https://github.com/LeMathoux/MathIndex.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [4, 6, 7, 11] // PHP, HTML, CSS, MySQL
            ],
            [
                'id' => 16,
                'titre' => 'Menuiserie',
                'description' => 'Développement d\'un site statique comme projet de preuve de concept pour évaluer mon niveau de compétence en développement web. Ce projet était une expérience en autonomie complète, où j\'ai pris en charge tout le processus, de la création à la mise en ligne.',
                'dateDebut' => '2024-09-01',
                'dateFin' => null,
                'duree' => 0, // 1 semaine
                'visible' => true,
                'lien' => 'projects/Menuiserie/index.html',
                'image' => 'images/menuiserie.png',
                'githubLinks' => 'https://github.com/MelisandeOnana/Menuiserie.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [6, 7] // HTML, CSS
            ],
            [
                'id' => 17,
                'titre' => 'MySeriesCompanion',
                'description' => 'Développement d\'une application web pour suivre ses séries TV, permettant de gérer les épisodes déjà vus et à venir. Ce projet était réalisé en autonomie, mais avec des retours réguliers de mon enseignant M. Martins.',
                'dateDebut' => '2024-09-01',
                'dateFin' => null,
                'duree' => 2,
                'visible' => true,
                'lien' => 'projects/MySeriesCompanion/index.php',
                'image' => 'images/myseries.png',
                'githubLinks' => 'https://github.com/MelisandeOnana/MySeriesCompanion.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [4, 7, 11] // PHP, CSS, MySQL
            ],
            [
                'id' => 18,
                'titre' => 'MyCoffeeShop',
                'description' => 'Développement d\'un site e-commerce pour une boutique de café, avec gestion des produits et des commandes. Exercice en cours réalisé seul sous la supervision de M. Martins.',
                'dateDebut' => '2024-09-01',
                'dateFin' => null,
                'duree' => 1,
                'visible' => true,
                'lien' => 'projects/MyCoffeshop/index.php',
                'image' => 'images/mycoffee.png',
                'githubLinks' => 'https://github.com/MelisandeOnana/MyCoffeeShop.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [4, 7, 11] // PHP, CSS, MySQL
            ],
            [
                'id' => 19,
                'titre' => 'Interlude',
                'description' => 'Interlude est un logiciel développé en entreprise, permettant la gestion des congés pour les salariés. Contrairement à CongéFacile, ce projet était développé dans un cadre professionnel sous la supervision de mon tuteur de stage Mr Espargelière.',
                'dateDebut' => '2025-01-13',
                'dateFin' => '2025-03-07',
                'duree' => 2,
                'visible' => true,
                'lien' => '',
                'image' => 'images/interlude.png',
                'typeProjet' => 'Pro',
                'etat' => 'Terminé',
                'technologies' => [3, 11] // Laravel, MySQL
            ],
            [
                'id' => 20,
                'titre' => 'Soluspots',
                'description' => 'Soluspots est une plateforme en ligne facilitant la mise en relation entre fournisseurs de béton et entreprises du bâtiment. Ce projet a été réalisé durant mon stage de deuxième année sous la supersion de mon tuteur de stage Mr Espargelière.',
                'dateDebut' => '2025-01-13',
                'dateFin' => '2025-03-07',
                'duree' => 2,
                'visible' => true,
                'lien' => 'https://soluspots.mdw.ovh/',
                'image' => 'images/soluspots.png',
                'typeProjet' => 'Pro',
                'etat' => 'Terminé',
                'technologies' => [3, 2, 11] // Laravel, React, MySQL
            ],
            [
                'id' => 21,
                'titre' => 'Les Écuries du Val d\'Arré',
                'description' => 'Site vitrine pour un centre équestre. Réalisé seul avec l\'aide de M. Idasiak',
                'dateDebut' => '2024-06-03',
                'dateFin' => null,
                'duree' => 2,
                'visible' => true,
                'lien' => 'https://ecuriesduvaldarre.alwaysdata.net/',
                'image' => 'images/projet5.JPG',
                'documents' => 'pdf/Documentation_Ecurie_du_val_darre.pdf',
                'githubLinks' => 'https://github.com/MelisandeOnana/centre_equestre_val_darre.git',
                'typeProjet' => 'Perso',
                'etat' => 'Terminé',
                'technologies' => [4, 6, 7, 11] // PHP, HTML, CSS, MySQL
            ],
            [
                'id' => 22,
                'titre' => 'CongéFacile',
                'description' => 'Application de gestion de congés pour les entreprises',
                'dateDebut' => '2025-01-06',
                'dateFin' => '2025-05-16',
                'duree' => 4,
                'visible' => true,
                'lien' => 'https://www.figma.com/design/asceKpDZb7Y8zscQkZRgLT/Cong%C3%A9Facile?node-id=1-13928&t=9eYBy8yPMnKZdSsm-0',
                'image' => 'images/symfony_1.png',
                'documents' => 'pdf/GUIDE UTILISATEUR - CongeFacile.pdf',
                'githubLinks' => 'https://github.com/MelisandeOnana/CongeFacile.git',
                'typeProjet' => 'Scolaire',
                'etat' => 'Terminé',
                'technologies' => [1, 11] // Symfony, MySQL
            ]
        ];

        $projetEntities = [];
        foreach ($projetsData as $data) {
            $projet = new Projet();
            $projet->setTitre($data['titre']);
            $projet->setDescription($data['description']);
            $projet->setDateDebut(new \DateTime($data['dateDebut']));
            $projet->setDuree($data['duree']);
            if ($data['dateFin']) {
                $projet->setDateFin(new \DateTime($data['dateFin']));
            }
            $projet->setVisible($data['visible']);
            $projet->setLien($data['lien']);
            $projet->setImage($data['image']);
            if (isset($data['documents'])) {
                $projet->setDocuments($data['documents']);
            }
            if (isset($data['githubLinks'])) {
                $projet->setGithubLinks($data['githubLinks']);
            }
            $projet->setTypeProjet($data['typeProjet']);
            $projet->setEtat($data['etat']);

            // Associer les technologies
            foreach ($data['technologies'] as $techId) {
                if (isset($technologieEntities[$techId])) {
                    $projet->addTechnology($technologieEntities[$techId]);
                }
            }

            $manager->persist($projet);
            $projetEntities[$data['id']] = $projet;
        }

        // Créer un utilisateur admin
        $admin = new Utilisateur();
        $admin->setEmail('admin@example.com');
        $admin->setNom('Onana');
        $admin->setPrenom('Mélisande');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setMotDePasse($this->passwordHasher->hashPassword($admin, 'admin123'));

        $manager->persist($admin);

        $manager->flush();
    }
}
