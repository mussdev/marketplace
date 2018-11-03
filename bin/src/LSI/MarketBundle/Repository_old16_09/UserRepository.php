<?php

namespace LSI\MarketBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository {
    public function findAdministreProfil($username){
        $qb = $this->createQueryBuilder('u')
                    ->innerJoin('u.administre', 'a.id')
                    ->addSelect('a');

        $qb
            ->where('u.username = :username')
            ->setParameter('username', $username)
            ->andWhere('u.administre = a.id');

        return $qb->getQuery()->getResult();
    }

    public function findMairieProfil($username){
        $qb = $this->createQueryBuilder('u')
                    ->innerJoin('u.mairie', 'm.id')
                    ->addSelect('m');
        $qb
            ->where('u.username = :username')
            ->setParameter('username', $username)
            ->andWhere('u.username = m.id');

        return $qb->getQuery()->getResult();
    }

    public function findAuteurAnnonce($id){
        $qb = $this->createQueryBuilder('u')
            ->join('u.mairie', 'm')
            ->addSelect('m')
        ;

        $qb
            ->where('u.mairie = m.id')
            ->andWhere('m.id = :id')
            ->setParameter('id', $id)

            //->andWhere('m = u.mairie')
        ;
        return $qb->getQuery()->getResult();
    }
}
