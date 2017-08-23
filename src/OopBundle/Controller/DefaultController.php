<?php

namespace OopBundle\Controller;

use OopBundle\Objects\Inheritance\CdProduct;
use OopBundle\Objects\Inheritance\BookProduct;
use OopBundle\Objects\StaticExample\StaticExample;
use OopBundle\Objects\Inheritance\ShopProduct;
use OopBundle\Objects\AbstractInterfaceTrait\Interf;
use OopBundle\Objects\AbstractInterfaceTrait\TextProductWriter;
use OopBundle\Objects\Traits\Car;
use OopBundle\Service\Product;

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
        $cdProduct = new CdProduct('Cd', 'TestProducer', 'testProducerFirst', 500, 1000);
        $bookProduct = new BookProduct('Book', 'BookProducer', 'BookProducerFirst', 500, 1000);
        echo('<pre>');
        var_dump($cdProduct->getSummaryLine());
        var_dump($cdProduct::Test);
        var_dump($bookProduct->getSummaryLine());
        var_dump($bookProduct::Test);
        exit;
    }

    /**
     * @Route("/service")
     */
    public function servAction()
    {
        $shopProduct = $this->get(Product::class);
        echo('<pre>');
        var_dump($shopProduct->getTitle());
        exit;

    }

    /**
     * @Route("/static")
     */
    public function staticAction()
    {
        echo('<pre>');
        var_dump(StaticExample::sayHello());
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
        exit;

    }

    /**
     * @Route("/interface")
     */
    public function interfactAction()
    {
        $interf = new Interf();
        var_dump($interf->write());
        exit;
    }

    /**
     * @Route("/trait")
     */
    public function traitAction()
    {
        $car = new Car();
        echo '<pre>';
        var_dump($car->calcDiscount(100));
        var_dump($car->basicDiscount(100));
        var_dump($car::sayHello());
        var_dump($car->getN());

        exit;
    }

}
