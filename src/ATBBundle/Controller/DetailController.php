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

}
