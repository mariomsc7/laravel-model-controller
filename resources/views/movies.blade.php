@extends('layouts.base')

@section('head-title', 'MoviesDatabase | Movies')

@section('content')

    <section class="box">
        @foreach ($movies as $movie)
        <div class="card text-center">
            <h4>Titolo: <span><em>"{{ $movie->title }}"</em></span></h4>
            <h4>Titolo originale: <span><em>"{{ $movie->original_title }}"</em></span></h4>
            <h4>Nazionalità: <span>"{{ $movie->nationality }}"</span></h4>
            <h4>Data: <span>"{{ $movie->date }}"</span></h4>
            <h4>Voto:<span>"{{ $movie->vote }}"</span> </h4>
        </div>
        @endforeach
    </section>

@endsection