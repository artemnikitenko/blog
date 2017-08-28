<?php


namespace OopBundle\Objects\CallBackFunctions;


use Symfony\Component\Config\Definition\Exception\Exception;

class ProcessSale
{
    private $callbacks;

    public function registerCallbacks($callback)
    {
        if (!is_callable($callback)) {
            throw new Exception('not callable function');
        }
        $this->callbacks[] = $callback;
    }

    public function sale($phone)
    {
        print "$phone->name : in process";
        echo('<pre>');

        var_dump('**************');

        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $phone);
        }
    }

}