<?php

namespace NB\MainBundle\Repository;

/**
 * PromotionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PromotionRepository extends \Doctrine\ORM\EntityRepository
{
    public function findActivePromo($route_id){

        $queryBuilder = $this
            ->createQueryBuilder('p')
            ->innerJoin('p.axes', 'ax')
            //    ->leftJoin('t.frequency', 'frequency')
            ->where('ax.id = :route')
            ->andWhere('p.dateExpiration > :today')
            ->andWhere('p.status = :status')
            //->andWhere('(:gd) in f')
            //->andWhere('(:gd) in f')
            ->setParameters(array('route' => $route_id, 'today' => date('Y-m-d') , 'status' => true))
        ;


        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
  //    echo "<pre>";  var_dump($results); exit;
        return $results[0];
    }
}
