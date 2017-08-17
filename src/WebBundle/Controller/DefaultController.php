<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/test")
     */
    public function indexAction()
    {
        return $this->render('WebBundle:Page:page.html.twig');
    }
}
