@extends('app')

@section('main')
    <div>

        <div id="jumbotron"></div>
        <div id="main">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="thumb">
                    <p>{{ $comic['series'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
