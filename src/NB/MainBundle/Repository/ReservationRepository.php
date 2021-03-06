<?php

namespace NB\MainBundle\Repository;

/**
 * ReservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationRepository extends \Doctrine\ORM\EntityRepository
{
    public function getBookedSeats($bus, $doj)
    {
        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->leftJoin('r.travel', 't')
            ->select('SUM(r.seats) As booked')
            ->where('t.bus =:bus')
            ->andWhere('r.doj = :doj')
            ->setParameters(array('bus' => $bus, 'doj' => $doj));
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        $results = $results[0];


      // var_dump($results['booked']); exit;
        return $results['booked'];

    }

    public function findReservationByTicketId($id){

        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->innerJoin('r.tickets', 't')
            ->where('t.id =:TID')
            ->setParameter('TID', $id);
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        //$results = $results;


        // var_dump($results['booked']); exit;
        return $results;

    }

    public function billetVendus($from, $to){

        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->where('r.confirmed = :con')
            ->andWhere('r.dateAdd BETWEEN :from and :to')
            ->setParameters([
                'con' => true,
                'from' => $from,
                'to' => $to
            ])


        ;

        $query = $queryBuilder->getQuery();
        $result = $query->getScalarResult();



        return ($result != null)?$result:0;



    }

     public function billetNonConfirmes($from, $to)
     {
         $queryBuilder = $this
             ->createQueryBuilder('r')
             ->select('count(r.id) as total')
             ->where('r.confirmed= :con')
             ->andWhere('r.dateAdd BETWEEN :from and :to')
             ->setParameters([
                 'con' => false,
                 'from' => $from,
                 'to' => $to
             ]);
         $query =  $queryBuilder->getQuery();

         $result = $query->getResult();
         return $result[0];
     }
}






