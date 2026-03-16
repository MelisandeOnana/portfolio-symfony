<?php

namespace App\Repository;

use App\Entity\Technologie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Technologie>
 */
class TechnologieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Technologie::class);
    }

    /**
     * Compte toutes les technologies
     */
    public function countAllTechnologies(): int
    {
        return $this->createQueryBuilder('t')
            ->select('COUNT(t.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère toutes les technologies ordonnées par nom
     */
    public function findAllOrdered(): array
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les technologies par statut
     */
    public function countByStatut(string $statut): int
    {
        return $this->createQueryBuilder('t')
            ->select('COUNT(t.id)')
            ->where('t.statut = :statut')
            ->setParameter('statut', $statut)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Compte les technologies certifiées
     */
    public function countCertified(): int
    {
        return $this->createQueryBuilder('t')
            ->select('COUNT(t.id)')
            ->where('t.certified = true')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère les technologies avec le nombre de projets associés
     */
    public function getTechnologiesWithProjectCount(): array
    {
        return $this->createQueryBuilder('t')
            ->select('t as technologie', 'COUNT(p.id) as projectCount')
            ->leftJoin('t.projets', 'p')
            ->groupBy('t.id')
            ->having('COUNT(p.id) > 0')
            ->orderBy('t.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère une page de technologies, ordonnées par date de début
     */
    public function findPaginated(int $page, int $limit)
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.dateDebut', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total de certifications PDF
     */
    public function countAllCertificationsPdf(): int
    {
        $qb = $this->createQueryBuilder('t')
            ->select('t.certificationsPdf');
        $results = $qb->getQuery()->getResult();

        $count = 0;
        foreach ($results as $row) {
            if (is_array($row['certificationsPdf'])) {
                $count += count($row['certificationsPdf']);
            }
        }
        return $count;
    }

    //    /**
    //     * @return Technologie[] Returns an array of Technologie objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Technologie
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
