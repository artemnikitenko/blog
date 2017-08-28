<?php


namespace OopBundle\Objects\InterceptorMethods;


class PersonWriter
{
    public function writeName(Person $person)
    {
        var_dump($person->getName());
    }

    public function writeAge(Person $person)
    {
        var_dump($person->getAge());
    }

}