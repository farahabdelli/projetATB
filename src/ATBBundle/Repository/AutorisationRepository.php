<?php
/**
 * Created by PhpStorm.
 * User: farah
 * Date: 27/02/2019
 * Time: 10:21
 */

namespace ATBBundle\Repository;


class AutorisationRepository extends \Doctrine\ORM\EntityRepository
{

    public function getByDate($from, $to,$num){

            $query=$this->getEntityManager()->createQuery('SELECT t from ATBBundle:Autorisations t where t.date >= ?1 and t.date<= ?2 and t.numCarte= ?3 ');
            $query->setParameter(1, $from);

        $query->setParameter(2, $to);
        $query->setParameter(3, $num);

            $t= $query->execute();
            return $t;

        }




}
