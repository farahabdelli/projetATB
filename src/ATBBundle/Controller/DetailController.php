<?php

namespace ATBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailController extends Controller
{
    public function afficherDetailAction($numCompte)
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->find($numCompte);

        return $this->render('@ATB/atbviews/detail.html.twig',array('m'=>$modeles));
    }

    public function afficherDetail2Action()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();

        return $this->render('@ATB/atbviews/detail2.html.twig',array('m'=>$modeles));
    }

    public function afficherDetail3Action($numCompte)
    {


        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->find($numCompte);

        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Accounts')->findAll();

        return $this->render('@ATB/atbviews/detail3.html.twig',array('m'=>$modeles, 'mm'=>$modele));
    }

}
