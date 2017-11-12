<?php

namespace Dark\SushiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DarkService\SushiServiceBundle\Util\DarkSushiConstant;

class HomeController extends BaseController
{


    /**
     * @Route("/home",
     * name="home")
     */
    public function homeAction(){
  //$darkConstant = new \DarkService\SushiServiceBundle\Util\DarkSushiConstant();
        $param =array();
        return $this->renderView('DarkSushiBundle:Desktop:home.html.twig' ,$param);
    }



}
