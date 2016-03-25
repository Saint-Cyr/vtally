<?php

namespace VtallyBundle\Repository;

/**
 * PollingStationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PollingStationRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLimitedList($max)
    {
        $qb = $this->createQueryBuilder('p');
        $qb->select('p')
           ->where('p.active = true');
           //->setParameter($var, true);
        return $qb;
    }
}
