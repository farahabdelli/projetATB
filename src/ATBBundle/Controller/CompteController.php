<?php

namespace ATBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompteController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ATB/atbviews/compte.html.twig');
    }

    public function afficherCompteAction( )
    {
        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->afficherCompteDQL($this->getUser());

        return $this->render('@ATB/atbviews/compte.html.twig',array('em'=>$modeles));
    }
}
