@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main id="all-movies">
    <h1>Movies</h1>
    <div class="container d-flex flex-wrap justify-content-center gap-4">
        @foreach ( $movies as $movie )
        <div class="card">
            <img src="{{ $movie->image }}" class="card-img-top" alt="cover">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text"><strong>Original Title:</strong> {{ $movie->original_title }}</p>
                <p class="card-text"><strong>Language</strong>: {{ $movie->language }}</p>
                <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection