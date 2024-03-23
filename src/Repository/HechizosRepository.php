<?php

namespace App\Repository;

use App\Entity\Hechizos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hechizos>
 *
 * @method Hechizos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hechizos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hechizos[]    findAll()
 * @method Hechizos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HechizosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hechizos::class);
    }

    //    /**
    //     * @return Hechizos[] Returns an array of Hechizos objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('h.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Hechizos
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
