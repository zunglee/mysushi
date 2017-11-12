<?php

namespace Dark\SushiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of BaseController
 *
 * @author Ankitesh Kushwaha
 */
class BaseController extends Controller
{

    public function renderView($twig , array $param = null){
        return $this->render($twig , $param);

    }
}
