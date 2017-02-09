<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/9/17
 * Time: 10:28 AM
 */

namespace NB\MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller{

    public function indexAction(){

        return $this->render('NBMainBundle::dasboard.html.twig');
    }

}