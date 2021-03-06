@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-white-500  text-lg font-semibold">
                Popular Movies
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16 justify-center">
                @foreach ($popularMovies as $movie)
                  <x-movie-card :movie="$movie" :generos="$generos"/>
                @endforeach
            </div>
        </div>

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-white-500  text-lg font-semibold">
                Now Playing
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16 justify-center">
                @foreach ($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
