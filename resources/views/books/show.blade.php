@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main id="book" class="w-100">
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p>{{$book->plot}}</p>
    </div>

</main>

@endsection