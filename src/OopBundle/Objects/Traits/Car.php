<?php


namespace OopBundle\Objects\Traits;


class Car
{
    use Discount, NewDiscount, StaticTraite, AbstractTrait, PrivTrait {
        Discount::calcDiscount insteadof NewDiscount;
        NewDiscount::calcDiscount as basicDiscount;
        PrivTrait::getNum as private;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getN()
    {
        return $this->getNum();
    }

}