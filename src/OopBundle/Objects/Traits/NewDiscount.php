<?php


namespace OopBundle\Objects\Traits;


trait NewDiscount
{
    public function calcDiscount($amount)
    {
        return $amount - 5;
    }

}