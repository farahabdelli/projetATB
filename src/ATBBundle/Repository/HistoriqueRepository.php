<?php
/**
 * Created by PhpStorm.
 * User: farah
 * Date: 27/02/2019
 * Time: 10:21
 */

namespace ATBBundle\Repository;


class HistoriqueRepository extends \Doctrine\ORM\EntityRepository
{


    public function findbycreditDQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Transactions t where t.typeTransaction= ?1');
        $query->setParameter(1, 'Crédit');
        $t= $query->getResult();
        return $t;

    }

    public function findbydebitDQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Transactions t where t.typeTransaction= ?1');
        $query->setParameter(1, 'Débit');
        $t= $query->getResult();
        return $t;

    }

    public function findbydebit2DQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Transactions t where t.typeTransaction= ?1');
        $query->setParameter(1, 'Débit2');
        $t= $query->getResult();
        return $t;

    }

    public function findbydate1DQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Transactions t where t.dateTransaction< ?1 ');
        $query->setParameter(1, '2018-07-09');

        $t= $query->getResult();
        return $t;

    }


    public function findbydate2DQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Transactions t where t.dateTransaction< ?1 and t.typeTransaction= ?2 ');
        $query->setParameter(1, '2018-07-09');
        $query->setParameter(2, 'Débit');
        $t= $query->getResult();
        return $t;

    }
    public function findbydate3DQL(){
        $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Transactions t where t.dateTransaction= ?1 ');
        $query->setParameter(1, '2019-07-11');

        $t= $query->getResult();
        return $t;

    }
}
