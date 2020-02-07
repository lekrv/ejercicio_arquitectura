<?php

namespace Laraveltip\Infrastructure\Eloquent;

use App\Models\Movie;
use Laraveltip\Domain\MovieRepository;

final class MovieEloquentRepository implements MovieRepository
{
    /**
     * @var Movie
     */
    private $model;

    /**
     * MovieEloquentRepository constructor.
     * @param Movie $model
     */
    public function __construct(Movie $model)
    {
        $this->model = $model;
    }

    /**
     * @return iterable
     */
    public function getMovies(): iterable
    {
        return $this->model->all();
    }

}