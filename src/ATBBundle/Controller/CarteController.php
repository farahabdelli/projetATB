<?php

namespace ATBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarteController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ATB/atbviews/carte.html.twig');
    }

    public function afficherCarteAction( )
    {
        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Cards')->findAll();

        return $this->render('@ATB/atbviews/carte.html.twig',array('em'=>$modeles));
    }
}
