<?php
/**
 * Created by PhpStorm.
 * User: farah
 * Date: 27/02/2019
 * Time: 10:21
 */

namespace ATBBundle\Repository;
use Doctrine\ORM\EntityRepository;


class CompteRepository extends \Doctrine\ORM\EntityRepository
{


    public function afficherCompteDQL($user){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Accounts t where t.idClient= ?1');
        $query->setParameter(1, $user->getId());
        $t= $query->getResult();
        return $t;

    }

    public function afficherCompte2DQL($user){
        $qb=$this->createQueryBuilder('t')
            ->where('t.idClient=  :id')
            ->setParameter('id', $user->getId());
        return $qb;

    }



}
