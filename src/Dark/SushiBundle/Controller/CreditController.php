<?php

namespace Dark\SushiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DarkService\SushiServiceBundle\Util\DarkSushiConstant;



/**
 * Description of CreditController
 *
 * @author Ankitesh Kushwaha
 */
class CreditController extends BaseController
{
    /**
     * @Route("/credit",
     * name="credit")
     */
    public function CreditAction(){
  //$darkConstant = new \DarkService\SushiServiceBundle\Util\DarkSushiConstant();
        $param =array();
        return $this->renderView('DarkSushiBundle:Desktop:memories.html.twig' ,$param);
    }
}
