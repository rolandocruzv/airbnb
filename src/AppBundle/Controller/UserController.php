<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    
    /**
     * @Route("/user/view/{username}", name="user_view")
     */
    public function userViewAction(Request $request)
    {
        $user = '';
        return $this->render('default/index.html.twig', array(
            'user'=>$user
        ));
    }
    
    /**
     * @Route("/user/profile/{id}", name="user_profile")
     */
    public function userProfileEditAction(Request $request)
    {
        
        return $this->render('default/index.html.twig', array(
            
        ));
    }
    
    /**
     * @Route("/register/", name="register")
     */
    public function registerAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            
        ));
    }
    
    /**
     * @Route("/login/", name="login")
     */
    public function loginAction(Request $request)
    {
        
        return $this->render('default/index.html.twig', array(
            
        ));
    }
    
    
    
}
