<?php

namespace ATBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HistoriqueController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ATB/atbviews/historique.html.twig');
    }


    public function afficherHistoriqueAction()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();


        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Transactions')->findAll();

        return $this->render('@ATB/atbviews/historique.html.twig',array('em'=>$modeles,'m'=>$modele));
    }

    public function afficherHistoriquecreditAction()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();


        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Transactions')->findbycreditDQL();

        return $this->render('@ATB/atbviews/historiquecredit.html.twig',array('em'=>$modeles,'m'=>$modele));
    }

    public function afficherHistoriquedebitAction()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();


        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Transactions')->findbydebitDQL();

        return $this->render('@ATB/atbviews/historiquedebit.html.twig',array('em'=>$modeles,'m'=>$modele));
    }

    public function afficherHistoriquedebit2Action()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();


        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Transactions')->findbydebit2DQL();

        return $this->render('@ATB/atbviews/historiquedebit2.html.twig',array('em'=>$modeles,'m'=>$modele));
    }

    public function afficherHistoriquedate1Action()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();


        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Transactions')->findbydate1DQL();

        return $this->render('@ATB/atbviews/historiquedate1.html.twig',array('em'=>$modeles,'m'=>$modele));
    }
    public function afficherHistoriquedate2Action()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();


        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Transactions')->findbydate2DQL();

        return $this->render('@ATB/atbviews/historiquedate2.html.twig',array('em'=>$modeles,'m'=>$modele));
    }

    public function afficherHistoriquedate3Action()
    { $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('ATBBundle:Accounts')->findAll();


        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Transactions')->findbydate3DQL();

        return $this->render('@ATB/atbviews/historiquedate3.html.twig',array('em'=>$modeles,'m'=>$modele));
    }

}
