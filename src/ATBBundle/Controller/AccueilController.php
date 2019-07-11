<?php

namespace ATBBundle\Controller;

use ATBBundle;
use ATBBundle\Entity\Accounts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ATB/atbviews/accueil.html.twig');
    }


    public function afficherAccueilAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('ATBBundle:Accounts')->afficherCompteDQL($this->getUser());

        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Cards')->findAll();

        return $this->render('@ATB/atbviews/accueil.html.twig', array('em' => $modeles,'m'=>$modele));
    }

}
