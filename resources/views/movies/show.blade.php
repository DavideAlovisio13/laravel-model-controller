@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
<main id="movie">
    <div class="container">
        <div class="card mb-3">
            <img src="{{ $movie->image }}" alt="cover-movie">
        </div>
    </div>
</main>

@endsection