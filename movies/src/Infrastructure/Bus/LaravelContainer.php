<?php

namespace Laraveltip\Infrastructure\Bus;


use Laraveltip\Application\Bus\Contracts\Container;
use Illuminate\Container\Container AS IoC;

final class LaravelContainer implements Container
{
    /**
     * @var IoC
     */
    private $container;

    /**
     * LaravelContainer constructor.
     * @param IoC $container
     */
    public function __construct(IoC $container)
    {
        $this->container = $container;
    }

    /**
     * @param $class
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function make($class)
    {
        return $this->container->make($class);
    }
}