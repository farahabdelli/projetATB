<?php

namespace ATBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HistoriqueController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ATB/atbviews/historique.html.twig');
    }
}
