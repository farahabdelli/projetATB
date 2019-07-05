<?php

namespace ATBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ATB/atbviews/detail.html.twig');
    }
}
