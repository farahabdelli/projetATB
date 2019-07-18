<?php

namespace ATBBundle\Controller;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class AutorisationController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ATB/atbviews/carte.html.twig');
    }

    public function getcarteAction( )
    {
        $fm=$this->getDoctrine()->getManager();
        $modele=$fm->getRepository('ATBBundle:Cards')->findcompteDQL();



        return $this->render('@ATB/atbviews/search.html.twig',array('m'=>$modele));
    }

    public function searchAction(Request $request)
    {

        $defaultData = [];
        $form = $this->createFormBuilder($defaultData)
            ->add('num', EntityType::class, [
                'class' =>'ATBBundle:Cards',
                'choice_label'=>'numCarte',
                'multiple'=>false,
                'label'=>'Numéro de la carte',


            ])

            ->add('from', DateType::class, [
                'widget' => 'choice',
                'format' => 'yyyy-MM-dd',

            ])
            ->add('to', DateType::class, [
                'widget' => 'choice',
                'format' => 'yyyy-MM-dd',

                ])
            ->add('chercher', SubmitType::class, array('label' => 'Chercher', 'attr' => array('class' => 'btn btn-danger', 'style' => 'margin-top:10px')))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager()->getRepository('ATBBundle:Autorisations');

            $num=$form['num']->getData();
            $from = $form['from']->getData();

            $to = $form['to']->getData();
            $auto = $em->getByDate($from,$to,$num);

          return $this->render('@ATB/atbviews/search.html.twig', ['form' => $form->createView(),'auto'=>$auto]);

           return  $this->redirectToRoute('search');


        }
        $em = $this->getDoctrine()->getManager()->getRepository('ATBBundle:Autorisations');

        $num=$form['num']->getData();
        $from = $form['from']->getData();

        $to = $form['to']->getData();
        $auto = $em->getByDate($from,$to,$num);
        return $this->render('@ATB/atbviews/search.html.twig', ['form' => $form->createView(),'auto'=>$auto]);

    }
}
