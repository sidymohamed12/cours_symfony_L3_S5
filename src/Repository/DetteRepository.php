<?php

namespace App\Repository;

use App\Entity\Dette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dette>
 */
class DetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dette::class);
    }

    //    /**
    //     * @return Dette[] Returns an array of Dette objects
    //     */
    public function findByCientId(int $id): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.client = :val')
            ->setParameter('val', $id)
            ->orderBy('d.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findDetteClientEtat(int $id, int $etat = 3): array
    {
        $qb = $this->createQueryBuilder('d')
            ->andWhere('d.client = :val')
            ->setParameter('val', $id)
            ->orderBy('d.id', 'ASC');

        if ($etat == 1) {
            return $qb->andWhere('d.montant = d.montantVerser')->getQuery()->getResult();
        } elseif ($etat == 2) {
            return $qb->andWhere('d.montant != d.montantVerser')->getQuery()->getResult();
        } else {
            return $qb->getQuery()->getResult();
        }
    }

    //    public function findOneBySomeField($value): ?Dette
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
