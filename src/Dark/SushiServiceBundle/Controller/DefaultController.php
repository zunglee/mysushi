<?php

namespace Dark\SushiServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DarkSushiServiceBundle:Default:index.html.twig');
    }
}
