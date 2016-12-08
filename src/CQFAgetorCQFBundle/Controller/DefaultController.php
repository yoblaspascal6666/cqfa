<?php

namespace CQFAgetorCQFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CQFAgetorCQFBundle:Default:index.html.twig');
    }
}
