<?php

namespace Vergo\NaissanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NaissanceBundle:Default:index.html.twig');
    }
}
