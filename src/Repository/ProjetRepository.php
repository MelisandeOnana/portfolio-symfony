<?php

namespace App\Repository;

use App\Entity\Projet;
use App\Entity\Technologie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projet>
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    /**
     * @return Projet[] Returns an array of visible Projet objects
     */
    public function findVisibleProjects(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.visible = :visible')
            ->setParameter('visible', true)
            ->orderBy('p.dateDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Projet[] Returns the latest 2 visible projects
     */
    public function findLatestProjects($limit = 2): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.visible = :visible')
            ->setParameter('visible', true)
            ->orderBy('p.dateDebut', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return int Returns the count of visible projects
     */
    public function countVisibleProjects(): int
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.visible = :visible')
            ->setParameter('visible', true)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @return Projet[] Returns projects filtered by type
     */
    public function findByType($type): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.typeProjet = :type')
            ->andWhere('p.visible = :visible')
            ->setParameter('type', $type)
            ->setParameter('visible', true)
            ->orderBy('p.dateDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Projet[] Returns projects filtered by technology
     */
    public function findByTechnology($technologyId): array
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.technologies', 't')
            ->where('t.id = :technologyId')
            ->andWhere('p.visible = :visible')
            ->setParameter('technologyId', $technologyId)
            ->setParameter('visible', true)
            ->orderBy('p.dateDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array Returns distinct project types
     */
    public function getProjectTypes(): array
    {
        return $this->createQueryBuilder('p')
            ->select('DISTINCT p.typeProjet')
            ->where('p.visible = :visible')
            ->andWhere('p.typeProjet IS NOT NULL')
            ->setParameter('visible', true)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les types de projets distincts
     */
    public function getDistinctTypes(): array
    {
        $result = $this->createQueryBuilder('p')
            ->select('DISTINCT p.typeProjet')
            ->where('p.typeProjet IS NOT NULL')
            ->andWhere('p.typeProjet != :empty')
            ->setParameter('empty', '')
            ->orderBy('p.typeProjet', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();

        return array_filter($result); // Supprimer les valeurs null/vides
    }

    /**
     * Trouve les projets par technologie
     */
    public function findByTechnologie(Technologie $technologie): array
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.technologies', 't')
            ->where('t.id = :technologie')
            ->setParameter('technologie', $technologie->getId())
            ->orderBy('p.dateDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les projets par type
     */
    public function countByType(string $type): int
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.typeProjet = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @return Projet[] Returns an array of Projet objects
     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Projet
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    /**
     * @return array Returns all distinct project types
     */
    public function findAllTypes()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('DISTINCT p.typeProjet')
            ->where('p.typeProjet IS NOT NULL');
        $results = $qb->getQuery()->getResult();
        return array_column($results, 'typeProjet');
    }
}
