<?php


namespace OopBundle\Objects\AbstractInterfaceTrait;


class TextProductWriter extends ShopProductWriter
{
    public function write()
    {
        $str = "Gifts";
        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine();
        }
        var_dump($str);
    }

}