<?php


namespace OopBundle\Inheritance;


class BookProduct extends ShopProduct
{
    public $numPage;

    public function __construct($title, $producerMainName, $producerFirstName, $price, $numPage)
    {
        parent::__construct($title, $producerMainName, $producerFirstName, $price);
        $this->numPage = $numPage;
    }

    public function getNumberOfPage()
    {
        return $this->numPage;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ":$this->numPage str";
        return $base;
    }


}