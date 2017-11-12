<?php
namespace Dark\SushiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends BaseController
{

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {

    //var_Dump($request);die('done');

     $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

print_r($error);die('here in the for,');
    return $this->render('security/login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));



 }

    /**
     * @Route("/loginfail", name="login_failure")
     */
    public function loginFailAction(Request $request)
    {

    return $this->render('security/login.html.twig', array(
        'last_username' => 'adfsf',
        'error'         => '',
    ));



 }


}





