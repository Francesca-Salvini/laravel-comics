@extends('layouts.app')

@section("tag_title")
    Homepage
@endsection

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

            <div class="btn">
                <button id="current" class="blue-e-white">current series</button>
            </div>
            
        </div>
    </section>

    <section>
        <div class="blue-bg-sect">
            <div class="wrapper">
                <div class="white-icon">
                    <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <h5>digital comics</h5>
                </div>

                <div class="white-icon">
                    <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="">
                    <h5>dc merchandise</h5>
                </div>

                <div class="white-icon">
                    <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <h5>subscription</h5>
                </div>

                <div class="white-icon">
                    <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <h5>comic shop locator</h5>
                </div>

                <div class="white-icon">
                    <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <h5>dc power visa</h5>
                </div>
            </div>
        </div>
    </section>
@endsection