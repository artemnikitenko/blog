<?php

namespace OopBundle\Controller;

use OopBundle\Inheritance\CdProduct;
use OopBundle\Inheritance\BookProduct;
use OopBundle\Inheritance\ShopProduct;
use OopBundle\Objects\AbstractInterfaceTrait\Interf;
use OopBundle\Objects\AbstractInterfaceTrait\TextProductWriter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
 * Class DefaultController
 * @package OopBundle\Controller
 * @Route("/oop")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/inheritance")
     */
    public function inheritanceAction()
    {
//        $shopProduct = $this->get(ShopProduct::class);
//        $shopProduct->test();
        $cdProduct = new CdProduct('Cd', 'TestProducer', 'testProducerFirst', 500, 1000);
        $bookProduct = new BookProduct('Book', 'BookProducer', 'BookProducerFirst', 500, 1000);
        echo('<pre>');
        var_dump($cdProduct->getSummaryLine());
        var_dump($bookProduct->getSummaryLine());
        exit;
        return $this->render('OopBundle:Default:index.html.twig');
    }

    /**
     * @Route("/service")
     */
    public function servAction()
    {
//        $shopProduct = $this->get(ShopProduct::class);
//        echo('<pre>');
//        var_dump($shopProduct->getTitle());
        exit;

    }

    /**
     * @Route("/abstract")
     */
    public function abstractAction()
    {
        $shopProduct = new ShopProduct('title', 'producerMainName', 'producerFirstName', 'price');
        $textProduct = new TextProductWriter();
        $textProduct->addProduct($shopProduct);
        $textProduct->write();

    }

    /**
     * @Route("/interface")
     */
    public function interfactAction()
    {
        $interf = new Interf();
        var_dump($interf->write());
        exit;
        return $this->render('OopBundle:Default:index.html.twig');
    }

}
