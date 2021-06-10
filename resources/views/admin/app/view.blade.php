@extends('layouts.header')
@section('title')@parent Admin -- Apps @endsection
@section('content')
    @include('admin.layouts.header')

    <section class="app">
        <div class="container">

            <div class="app_title" style="margin-top: 0px;">
                <h4 class="app_title_text"> {{$app->name}}</h4>
            </div>

            <div class="row app_opisanie">
                <div class="col-sm-12 col-md-6 ">
                    <div class="app_opisanie_img {{$app->css}}">

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

             <center>
                <form style="display: inline;" action="{{route('app.destroy', ['app'=>$app->id])}}" method="post" class="myform">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input style="width: 70px" type="submit" value="delete">
                </form>
                <form style="display: inline;" action="{{route('app.edit', ['app'=>$app->id])}}" method="get" class="myform">
                    <input style="width: 70px" type="submit" value="edit">
                </form>
            </center>

        </div>
    </section>


@endsection