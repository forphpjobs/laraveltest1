@extends('layouts/header')

@section('title')@parent Новости @endsection

@section('content')

    <section class="news">
        <div class="container">
            <h1>Новости</h1>

            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12  add_news">
                    @foreach ($news as $item)
                    <div class="news_promotion offset">
                        <a href="news/{{$item->id}}" class="news_promotion_h4"><h4> {{$item->name}}</h4></a>
                        <div class="news_text">{!! $item->opisanie !!}</div>
                        <div class="news_wrapper">
                            <a href="news/{{$item->id}}" class="news_promotion_a">Далее</a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>
    </section>
@endsection