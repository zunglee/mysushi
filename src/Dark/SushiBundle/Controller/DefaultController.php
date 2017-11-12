<?php

namespace Dark\SushiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/default", name="homepage")
     */
    public function indexAction(Request $request)
{
die('in Dark Bundle Default controller');
        return $this->render('DarkSushiBundle:Default:index.html.twig');
    }

    /**
     * @Route("/home1", name="ankitesh")
     */
    public function myHome(Request $request)
{
        return $this->render('');
    }



}
