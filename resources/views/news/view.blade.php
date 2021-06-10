@extends('layouts/header')

@section('title')@parent {!! $news->name !!} @endsection

@section('content')

    <section class="news">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="news_promotion">
                        <h4> {!!$news->name  !!}</h4>
                        <p> {!! $news->text !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container add_comments">
           @if(isset($comments) and !empty($comments))
                    @foreach($comments as $item)
                        <div class="row">
                            <div class="col-sm-12 col-sm-12 col-xs-12">
                                <div class="news_promotion comments">
                                    <h4> {{ $item->name }}</h4>
                                    <p>{{$item->text}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

               {{$comments->links()}}
            @endif
        </div>

        @if(\Illuminate\Support\Facades\Auth::check())
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="news_add_comment">
                               @include('layouts.comment')
                            </div>
                        </div>
                    </div>
                </div>
        @else
            <div class="container add_comments">
                <div class="row">
                    <div class="col-sm-12 col-sm-12 col-xs-12">
                        <div class="news_promotion comments">
                            <center>
                                <h4>
                                    Оставлять комментарии могут только зарегестрированные пользователи.<br>
                                    Пожалуйста <a href="/login">войдите</a> или <a href="/register">зарегестрируйтесь</a>.
                                </h4>
                            </center>


                        </div>
                    </div>
                </div>
            </div>

        @endif

    </section>

@endsection