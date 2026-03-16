<?php

namespace App\Repository;

use App\Entity\DemandeContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandeContact>
 */
class DemandeContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeContact::class);
    }

    /**
     * @return DemandeContact[] Returns recent contact requests
     */
    public function findRecentRequests(int $limit = 10): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.dateEnvoi', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
    }
}
