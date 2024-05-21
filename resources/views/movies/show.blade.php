@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
<main id="movie">
    <div class="container">
        <div class="card mb-3">
            <img src="{{ $movie->image }}" alt="cover-movie">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text"><strong>Original Title:</strong> {{ $movie->original_title }}</p>
                <p class="card-text"><strong>Language</strong>: {{ $movie->language }}</p>
                <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
            </div>
        </div>
    </div>
</main>

@endsection