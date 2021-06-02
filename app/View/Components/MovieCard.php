<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $movie;
     public $generos;
    public function __construct($movie,$generos)
    {
        //
        $this->movie = $movie;
        $this->generos = $generos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
