<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $nowPlaying;
    public $generos;
    public function __construct($popularMovies,$nowPlaying,$gender)
    {
        //
        $this->generos = $gender;
        $this->popularMovies = $popularMovies;
        $this->nowPlaying = $nowPlaying;
    }

    public function popularMovies(){
        // return $this->popularMovies;
        return $this->formatMovie($this->popularMovies);
    }
    public function nowPlayingMovies(){
        return $this->formatMovie($this->nowPlaying);
    }
    public function genero(){
        return collect($this->generos)->mapWithKeys(function ($genre) {
                return [$genre['id'] => $genre['name']];
            });
    }
    private function formatMovie($movies){
        return collect($movies)->map(function($movie){
            $genresFormated = collect($movie['genre_ids'])->mapWithKeys(function($value){

                return [$value=>$this->genero()->get($value)];

            })->implode(',');

            return collect($movie)->merge([
                'poster_path' =>'https://image.tmdb.org/t/p/w500/'. $movie['poster_path'],
                'release_date' =>Carbon::parse($movie['release_date'])->format('d M, Y'),
                'vote_average' =>$movie['vote_average'] * 10 . '%',
                'genres'=>$genresFormated
            ])->only([
                'poster_path','id','genre_ids','title','vote_average','overview','release_date','genres'
            ]);
        });
    }

}
