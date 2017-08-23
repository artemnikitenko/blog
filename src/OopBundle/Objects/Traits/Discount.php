<?php


namespace OopBundle\Objects\Traits;


trait Discount
{
    private $discount = 10;

    public function calcDiscount($amount)
    {
        return $amount - $this->discount;
    }

}