<?php

namespace App\Repository;

use App\Entity\MasterMateriIndikator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MasterMateriIndikator>
 *
 * @method MasterMateriIndikator|null find($id, $lockMode = null, $lockVersion = null)
 * @method MasterMateriIndikator|null findOneBy(array $criteria, array $orderBy = null)
 * @method MasterMateriIndikator[]    findAll()
 * @method MasterMateriIndikator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MasterMateriIndikatorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MasterMateriIndikator::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(MasterMateriIndikator $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(MasterMateriIndikator $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return MasterMateriIndikator[] Returns an array of MasterMateriIndikator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MasterMateriIndikator
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
