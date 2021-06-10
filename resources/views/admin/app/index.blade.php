@extends('layouts.header')
@section('title')@parent Admin -- Apps @endsection
@section('content')
    @include('admin.layouts.header')

    <section class="apps">
        <div class="container">
            @foreach ($apps as $item)
                <div class="row">
                    <div class="col-sm-12 col-sm-12 col-xs-12">
                        <div class="apps_promotion">
                            <a href="app/{{$item->id}}" class="apps_promotion_h4"><h4> {{$item->name}}</h4></a>
                            <div style="padding-bottom: 15px" class="apps_text">{!! $item->opisanie !!}</div>
                            <form style="display: inline;" action="{{route('app.destroy', ['app'=>$item->id])}}" method="post" class="myform">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input style="width: 70px" type="submit" value="delete">
                            </form>
                            <form style="display: inline;" action="{{route('app.edit', ['app'=>$item->id])}}" method="get" class="myform">
                                <input style="width: 70px" type="submit" value="edit">
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


@endsection