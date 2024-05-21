@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main id="all-books">
    <h1 class="p-5">Books</h1>
    <div class="container d-flex flex-wrap justify-content-center gap-4">
        @foreach ( $books as $book )
        <div class="card">
            <img src="{{ $book->cover_image }}" class="card-img-top" alt="book-cover">
            <div class="card-body">
                <a href="{{ route('books.show', $book->id) }}" class="btn btn-danger">Details</a>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection