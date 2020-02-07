<?php

namespace Laraveltip\Application\Contracts;


interface MovieInterface
{
    /**
     * @return iterable
     */
    public function getListsMovies(): iterable;
}