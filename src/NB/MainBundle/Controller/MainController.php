<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/9/17
 * Time: 10:28 AM
 */

namespace NB\MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller{

    public function indexAction(Request $request){

        $from = date('2017-01-01 00:00:00');
        $to = date('2017-02-18 23:59:59');


        $em = $this->getDoctrine()->getManager();
        $nbreBillet = $em->getRepository('NBMainBundle:Reservation')->billetVendus($from, $to);
        $nbreNonConfirmes = $em->getRepository('NBMainBundle:Reservation')->billetNonConfirmes($from, $to);



        return $this->render('NBMainBundle::dasboard.html.twig', [
            'nbreBillet' => $nbreBillet,
            'nbreNonConfirmes' => $nbreNonConfirmes

        ]);
    }




}