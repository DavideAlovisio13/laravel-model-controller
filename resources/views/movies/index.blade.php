@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main id="all-movies">
    <h1>Movies</h1>
    <div class="container d-flex flex-wrap justify-content-center gap-3">
        @foreach ( $movies as $movie )
        <div class="card">
            <img src="{{ $movie->image }}" class="card-img-top" alt="cover">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">Original Title: {{ $movie->original_title }}</p>
                <p class="card-text">Language: {{ $movie->language }}</p>
                <p class="card-text">Date: {{ $movie->date }}</p>
                <p class="card-text">Vote: {{ $movie->vote }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection