<?php


namespace OopBundle\Service;


class ShopProduct
{
    public $title = 'Teest';
    public $producerMainName = 'MainName';
    public $producerFirstName = 'FirstName';

    public function getTitle()
    {
        return $this->title;
    }

}