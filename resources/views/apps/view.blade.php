@extends('layouts.header')

@section('title')@parent {{$app->name}} @endsection
@section('content')
    <section class="app">
        <div class="container">


            <div class="app_title">
                <h4 class="app_title_text"> {{$app->name}}</h4>
            </div>


            <div class="row app_opisanie">
                <div class="col-sm-12 col-md-6 ">
                    <div class="app_opisanie_img " style="background: url('{{asset('storage/'.$app->img)}}') center center/cover no-repeat;
                    margin-bottom: 25px;">

                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="app_opisanie_text">
                        <div>{!! $app->text !!}</div>
                    </div>
                    <div class="app_opisanie_btn">
                        <a href="{{$app->link}}" target="_blank" class="app_opisanie_btn_link">скачать</a>
                    </div>
                </div>


            </div>

        </div>
    </section>

@endsection