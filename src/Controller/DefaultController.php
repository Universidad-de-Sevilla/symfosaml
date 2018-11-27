<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/hola", name="hola")
     */
    public function hola(){
        return $this->redirect("http://icasus.us.es");
    }

    /**
     * @Route("/login", name="login")
     */
    public function login() {
        return $this->redirect("http://icasus.us.es");
    }

}