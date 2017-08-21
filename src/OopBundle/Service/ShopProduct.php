<?php


namespace OopBundle\Service;


class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

//    public function __construct($title, $producerMainName, $producerFirstName, $price)
//    {
//        $this->title = $title;
//        $this->producerMainName = $producerMainName;
//        $this->producerFirstName = $producerFirstName;
//        $this->price = $price;
//    }

    public function getProducer()
    {
        return $this->producerFirstName." ".$this->producerMainName;
    }


}