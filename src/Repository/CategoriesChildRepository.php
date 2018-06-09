<?php

namespace App\Repository;

use App\Entity\CategoriesChild;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CategoriesChild|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesChild|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesChild[]    findAll()
 * @method CategoriesChild[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesChildRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategoriesChild::class);
    }

//    /**
//     * @return CategoriesChild[] Returns an array of CategoriesChild objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoriesChild
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
