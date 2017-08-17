<?php


namespace CoreBundle\Plagins\Content;


interface ContentEntityInterface
{
    public function id();

    public function title();

    public function canonicalLink();

    public function editLink();

    public function viewLink();

}