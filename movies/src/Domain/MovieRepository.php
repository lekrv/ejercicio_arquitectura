<?php

namespace Laraveltip\Domain;


interface MovieRepository
{
    /**
     * @return iterable
     */
    public function getMovies(): iterable;
}