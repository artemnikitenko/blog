<?php


namespace OopBundle\Objects\InterceptorMethods;


class Person
{
    private $age;
    private $writer;


    public function __construct(PersonWriter $writer)
    {
        $this->writer = $writer;
    }

    public function __get($name)
    {
        $method = "get{$name}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->writer, $name)) {
            return $this->writer->$name($this);
        }
    }

    public function __set($name, $value)
    {
        $method = "set{$name}";

        if (method_exists($this, $method)) {
            return $this->$method($value);
        }
    }

    public function getName()
    {
        return "Mike";
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}