@extends('layouts.app')

@section('title')
Homepage
@endsection

@section('main_content')

    <div class="container">

        @foreach ($movies as $movie)
                
            @include('components/card')

        @endforeach

    </div>

@endsection