<?php

namespace OopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use OopBundle\Service\ShopProduct;

/**
 * Class DefaultController
 * @package OopBundle\Controller
 * @Route("/oop")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
//        $shopProduct = $this->get(ShopProduct::class);
//        $shopProduct->test();
        return $this->render('OopBundle:Default:index.html.twig');
    }
}
