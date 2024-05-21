@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main id="all-movies" class="w-100">
    <h1 class="p-5">Movies</h1>
    <div class="container d-flex flex-wrap justify-content-center gap-4">
        @foreach ( $movies as $movie )
        <div class="card">
            <img src="{{ $movie->image }}" class="card-img-top" alt="cover">
            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Details</a>
        </div>
        @endforeach
    </div>
</main>

@endsection