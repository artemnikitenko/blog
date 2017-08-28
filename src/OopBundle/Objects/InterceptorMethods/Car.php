<?php


namespace OopBundle\Objects\InterceptorMethods;


class Car
{
    private $id;

    public function __clone()
    {
        $this->id = 0;
    }

    function __toString()
    {
        $toReurn = 'ID = '.$this->id;
        return $toReurn;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }



}