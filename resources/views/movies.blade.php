@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title">Movies</h1>
        <div class="movies">
            @forelse ($movies as $movie)
                <div class="movie_card">
                    <h4>Title: {{ $movie->title }}</h4>
                    <h5>Original Title: {{ $movie->original_title }}</h5>
                    <div class="info">
                        <p>Nationality: {{ $movie->nationality }}</p>
                        <p> Date release: {{ $movie->date }}</p>
                        <p>Vote: {{ $movie->vote }}</p>
                    </div>
                </div>

            @empty
                <p> No movie found</p>
            @endforelse
        </div>
    </div>
@endsection
