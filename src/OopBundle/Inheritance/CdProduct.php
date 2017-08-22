<?php


namespace OopBundle\Inheritance;


class CdProduct extends ShopProduct
{
    public $playLength;

    public function __construct($title, $producerMainName, $producerFirstName, $price, $playLength)
    {
        parent::__construct($title, $producerMainName, $producerFirstName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= " :Sound time - $this->playLength";
        return $base;
    }

}