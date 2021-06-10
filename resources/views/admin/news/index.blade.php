@extends('layouts.header')
@section('title')@parent Admin - News @endsection

@section('content')
    @include('admin.layouts.header')
    @foreach($news as $item)
        <section class="news">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-sm-12 col-xs-12  add_news">

                            <div class="news_promotion offset">
                                <a href="news/{{$item->id}}" class="news_promotion_h4"><h4> {{$item->name}}</h4></a>
                                <div style="padding-bottom: 15px" class="news_text">{!! $item->opisanie !!}</div>
                                <form style="display: inline;" action="{{route('news.destroy', ['news'=>$item->id])}}" method="post" class="myform">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input style="width: 70px" type="submit" value="delete">
                                </form>
                                <form style="display: inline;" action="{{route('news.edit', ['news'=>$item->id])}}" method="get" class="myform">
                                    <input style="width: 70px" type="submit" value="edit">
                                </form>
                            </div>

                    </div>
                </div>

            </div>
        </section>
    @endforeach

@endsection


