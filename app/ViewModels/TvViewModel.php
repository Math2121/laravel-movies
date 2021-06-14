<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
    public $popularTv;
    public $topRatedShows;
    public $generos;
    public function __construct($popularTv,$topRatedShows,$generos)
    {
        //
        $this->generos = $generos;
        $this->popularTv = $popularTv;
        $this->topRatedShows = $topRatedShows;
    }

    public function popularTv(){
        // return $this->popularMovies;
        return $this->formatMovie($this->popularTv);
    }
    public function topRatedShows(){
        return $this->formatMovie($this->topRatedShows);
    }
    public function genero(){
        return collect($this->generos)->mapWithKeys(function ($genre) {
                return [$genre['id'] => $genre['name']];
            });
    }
    private function formatMovie($tv){
        return collect($tv)->map(function($tvshow){
            $genresFormated = collect($tvshow['genre_ids'])->mapWithKeys(function($value){

                return [$value=>$this->genero()->get($value)];

            })->implode(',');

            return collect($tvshow)->merge([
                'poster_path' =>'https://image.tmdb.org/t/p/w500/'. $tvshow['poster_path'],
                'first_air_date' =>Carbon::parse($tvshow['first_air_date'])->format('d M, Y'),
                'vote_average' =>$tvshow['vote_average'] * 10 . '%',
                'genres'=>$genresFormated
            ])->only([
                'poster_path','id','genre_ids','name','vote_average','overview','first_air_date','genres'
            ]);
        })->dump();
    }

}
