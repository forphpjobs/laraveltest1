@extends('layouts/header')

@section('title')@parent {!! $news->getAttribute('name') !!} @endsection

@section('content')
@include('admin.layouts.header')
    <section class="news">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="news_promotion">
                        <h4> {!!$news->getAttribute('name')  !!}</h4>
                        <p> {!! $news->getAttribute('text') !!}</p>
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
                                <form action="{{route('delete_comment')}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('POST')}}
                                    <input type="text" name="id" value="{{$item->id}}" hidden>
                                    <input type="submit" value="delete" >
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>



    </section>

@endsection