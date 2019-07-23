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
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();

        return $this->render('@ATB/atbviews/carte.html.twig',array('em'=>$modeles));
    }



    public function afficherCarte2Action( )
    {
        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Accounts')->findAll();

        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Cards')->findcompteDQL();

        return $this->render('@ATB/atbviews/carte2.html.twig',array('em'=>$modeles,'m'=>$modele));
    }


    public function afficherCarte3Action( )
    {
        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Accounts')->findAll();

        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Cards')->findcompte2DQL();

        return $this->render('@ATB/atbviews/carte3.html.twig',array('em'=>$modeles,'m'=>$modele));
    }

    public function bloquerCarte2Action( $numCarte)
    {
        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Accounts')->findAll();
        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Cards')->findcompteDQL();

        $cm=$this->getDoctrine()->getManager();
        $card=$cm->getRepository('ATBBundle:Cards')->find($numCarte);
        $card->setStatut('Bloquée');

        $cm->persist($card);
        $cm->flush();

        return $this->render('@ATB/atbviews/carte2.html.twig',array('em'=>$modeles,'m'=>$modele));


    }

    public function bloquerCarte3Action( $numCarte)
    {
        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Accounts')->findAll();
        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Cards')->findcompte2DQL();

        $cm=$this->getDoctrine()->getManager();
        $card=$cm->getRepository('ATBBundle:Cards')->find($numCarte);

        $card->setStatut('Bloquée');

        $cm->persist($card);
        $cm->flush();

        return $this->render('@ATB/atbviews/carte3.html.twig',array('em'=>$modeles,'m'=>$modele));


    }




    public function getcompteAction( )
    {
        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Accounts')->findAll();



        return $this->render('@ATB/atbviews/historiqueauto.html.twig',array('m'=>$modele));
    }


}
