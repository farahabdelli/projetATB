<?php

namespace ATBBundle\Controller;
use ATBBundle\Entity\Transactions;
use ATBBundle\Entity\Virements;
use ATBBundle\Entity\Accounts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VirementController extends Controller
{




    public function envoyerAction(Request $request )
    {

        $user= $this->getUser();

        $defaultData = [];
        $form = $this->createFormBuilder($defaultData)
            ->add('numCompteD', ChoiceType::class, [

                'choices' => [
                    '0532984751364'=>'0532984751364', '0235649871524'=>'0235649871524'],
                'label'=>'Du compte :',
                'attr' => array('class' => 'form-control input-focus ','style' => 'width: 12%'),
                'label_attr' => array('style' => 'font-weight: bold'),

            ])

            ->add('numCompteB', TextType::class, [
                'label'=>'Au compte :',
                'attr' => array('class' => 'form-control input-focus ','style' => 'width: 12%'),
                'label_attr' => array('style' => 'font-weight: bold'),

            ])
            ->add('montantVirement', NumberType::class, [
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

        $numC=$form['numCompteD']->getData();
        $numR=$form['numCompteB']->getData();
        $montant=$form['montantVirement']->getData();
        $date=$form['dateVirement']->getData();
        $rep = $form['Repetition']->getData();


        $vir = new Virements();
        $vir->setNumCompteD($numC);
        $vir->setNumCompteB($numR);
        $vir->setMontantVirement($montant);
        $vir->setDateVirement($date);
        $vir->setIdClient($user->getId());

        $trans=new Transactions();
        $trans->setTypeTransaction('Virement');
        $trans->setDateTransaction($date);
        $trans->setMontant($montant);
        $trans->setDebit($montant);
        $trans->setIntitule($numR);
        $trans->setCredit('0,000');
        $trans->setDateValeur($date);
        $trans->setNumCompte($numC);







        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vir);
            $em->flush();


            $fm = $this->getDoctrine()->getManager();
            $fm->persist($trans);
            $fm->flush();




            $em = $this->getDoctrine()->getManager()->getRepository('ATBBundle:Accounts');

            $solde = $em->editsolde($montant,$numC);
            $solde2 = $em->editsolde2($montant,$numR);


             return $this->redirectToRoute('envoyer');
            return $this->render('@ATB/atbviews/compte.html.twig', ['form' => $form->createView(),'solde'=>$solde,'solde2'=>$solde2]);



        }
        $em = $this->getDoctrine()->getManager()->getRepository('ATBBundle:Accounts');
        $solde = $em->editsolde($montant,$numC);
        $solde2 = $em->editsolde2($montant,$numR);
        return $this->render('@ATB/atbviews/envoyer.html.twig', ['form' => $form->createView(),'solde'=>$solde,'solde2'=>$solde2]);
    }





}
