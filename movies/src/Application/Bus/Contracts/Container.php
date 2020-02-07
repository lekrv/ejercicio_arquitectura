<?php

namespace Laraveltip\Application\Bus\Contracts;


interface Container
{
    /**
     * @param $class
     * @return mixed
     */
    public function make($class);
}