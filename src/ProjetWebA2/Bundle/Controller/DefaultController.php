<?php

namespace ProjetWebA2\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjetWebA2Bundle:Default:index.html.twig');
    }
}
