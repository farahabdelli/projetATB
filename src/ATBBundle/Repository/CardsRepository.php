<?php
/**
 * Created by PhpStorm.
 * User: farah
 * Date: 27/02/2019
 * Time: 10:21
 */

namespace ATBBundle\Repository;


class CardsRepository extends \Doctrine\ORM\EntityRepository
{


    public function findcompteDQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Cards t where t.numCompte= ?1');
        $query->setParameter(1, '0532984751364');
        $t= $query->getResult();
        return $t;

    }

    public function findcard(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Cards t where t.numCompte= ?1');
        $query->setParameter(1, '0532984751364');
        $t= $query->getResult();
        return $t;

    }

    public function findcompte2DQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Cards t where t.numCompte= ?1');
        $query->setParameter(1, '0235649871524');
        $t= $query->getResult();
        return $t;

    }

    public function findcarteDQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Cards t where t.numCompte= ?1');
        $query->setParameter(1, '0235649871524');
        $t= $query->getResult();
        return $t;

    }




}
