<?php

namespace ATBBundle\Controller;
use Doctrine\ORM\QueryBuilder;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VirementController extends Controller
{




    public function envoyerAction(Request $request )
    {
        $defaultData = [];
        $form = $this->createFormBuilder($defaultData)
            ->add('numCompteD', EntityType::class, [
                'class' =>'ATBBundle:Accounts',
                'choice_label'=>'numCompte',
                'multiple'=>false,
                'label'=>'Du compte :',
                'attr' => array('class' => 'form-control input-focus ','style' => 'width: 12%'),
                'label_attr' => array('style' => 'font-weight: bold'),
                'query_builder' => function(CompteRepository $repo) {
                    return $repo->afficherCompte2DQL($this->getUser());
                }





            ])

            ->add('numCompteB', EntityType::class, [
                'class' =>'ATBBundle:Accounts',
                'choice_label'=>'RIB',
                'multiple'=>false,
                'label'=>'Au compte :',
                'attr' => array('class' => 'form-control input-focus ','style' => 'width: 12%'),
                'label_attr' => array('style' => 'font-weight: bold'),



            ])
            ->add('montantVirement', TextType::class, [
                'label'=>'Montant  :',
                'attr' => array('class' => 'form-control input-focus ','style' => 'width: 12%'),
                'label_attr' => array('style' => 'font-weight: bold'),

            ])
            ->add('dateVirement', DateType::class, [
                'widget' => 'choice',
                'format' => 'yyyy-MM-dd',
                'label'=>'Date :',
                'attr' => array('class' => 'form-control input-focus ','style' => 'width: 12%'),
                'label_attr' => array('style' => 'font-weight: bold'),

            ])

            ->add('Repetition', ChoiceType::class, [

                    'choices' => [
                        'Aucune'=>'Aucune', 'Hebdomadaire'=>'Hebdomadaire','Trimestriel'=>'Trimestriel'],
                'label'=>'Repetition',
                'attr' => array('class' => 'form-control input-focus ','style' => 'width: 12%'),
                'label_attr' => array('style' => 'font-weight: bold'),

             ])
                ->add('Valider', SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-danger', 'style' => 'margin-top:10px')))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {



            return $this->render('@ATB/atbviews/envoyer.html.twig', ['form' => $form->createView()]);

            return  $this->redirectToRoute('envoyer');


        }

        return $this->render('@ATB/atbviews/envoyer.html.twig', ['form' => $form->createView()]);
    }





}
