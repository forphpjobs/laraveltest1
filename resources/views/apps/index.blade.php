@extends('layouts.header')

@section('title')@parent Приложения @endsection
@section('content')

    <section class="apps">
        <div class="container">
            <h1>Приложения</h1>
            @foreach ($apps as $item)
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="apps_promotion">
                        <a href="app/{{$item->id}}" class="apps_promotion_h4"><h4> {{$item->name}}</h4></a>
                        <div class="apps_text">{!! $item->opisanie !!}</div>
                        <div class="apps_wrapper">
                            <a href="app/{{$item->id}}" class="apps_promotion_a">Далее</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{$apps->links()}}
    </section>
@endsection