<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

// Basado en https://github.com/l3-team/CasBundle
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
        $target = urlencode($this->container->getParameter('cas_login_target'));
        $url = 'https://'.$this->container->getParameter('cas_host') . $this->container->getParameter('cas_path') . '/login?service=';
        dump($url);
        return $this->redirect($url . $target . '/force');
    }


    /**
     * @Route("/force", name="force")
     */
    public function force() {

        if ($this->container->getParameter('cas_gateway')) {
            if (!isset($_SESSION)) {
                session_start();
            }

            session_destroy();
        }

        return $this->redirect($this->generateUrl('homepage'));
    }

}