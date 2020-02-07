<?php

namespace App\Http\Controllers;

use Laraveltip\Domain\MovieRepository;

class MovieController extends Controller
{

    /**
     * @var MovieInterface
     */
    private $movies;

    /***
     * MovieController constructor.
     * @param MovieInterface $movies
     */
    public function __construct(MovieRepository $movies)
    {
        $this->movies = $movies;
    }

    /**
     *
     */
    public function __invoke()
    {
        $movies = $this->movies->getMovies();
        return View::make('movies')->with('movies', $movies);
    }

}
