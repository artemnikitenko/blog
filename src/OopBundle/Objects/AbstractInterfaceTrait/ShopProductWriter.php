<?php

namespace OopBundle\Objects\AbstractInterfaceTrait;

use OopBundle\Objects\Inheritance\ShopProduct;

abstract class ShopProductWriter
{
    protected $products = array();

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();

}