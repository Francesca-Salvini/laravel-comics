@extends('layouts.app')

@section('main_content')
    <section class="products-list">
        <div class="wrapper">
            <div class="comics">
                @foreach ($comics_array as $comic)
                <div class="comic">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                    <h5>{{ $comic['series'] }}</h5>
                </div>
                @endforeach
            </div>

            <div class="btn">
                <button class="blue-e-white">load more</button>
            </div>
            
        </div>
    </section>
@endsection