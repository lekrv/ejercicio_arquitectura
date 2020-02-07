<?php

namespace Laraveltip\Application\Services;

/**
 * Class getMoviesHandler
 * @package Laraveltip\Application\Services
 */
final class getMoviesHandler implements Handler
{
    /**
     * @var MovieRepository
     */
    private $repository;

    /**
     * getMoviesHandler constructor.
     * @param MovieRepository $repository
     */
    public function __construct(MovieRepository $repository)
    {
        $this->repository = $repository;
    }
}