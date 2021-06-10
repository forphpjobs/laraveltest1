@extends('layouts.header')
@section('title')@parent Admin -- Admins @endsection
@section('content')
    @include('admin.layouts.header')
    <section class="apps">
        <div class="container">
            <div class="container add_comments">

                    @foreach($users as $item)
                        <div class="row">
                            <div class="col-sm-12 col-sm-12 col-xs-12">
                                <div class="news_promotion comments">
                                    <h4> {{ $item->name }}</h4>
                                    <p>{{$item->email}}</p>
                                    @if($item->is_admin == 1)
                                        <p>Администратор</p>
                                    @else
                                        <p>Пользователь</p>
                                    @endif
                                    @if($item->is_admin == 1)
                                        <form style="display: inline;" action="{{route('addadmin.destroy', ['addadmin'=>$item->id])}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input style="width: 105px" type="submit" value="delete admin">
                                        </form>
                                    @else
                                        <form style="display: inline;" action="{{route('addadmin.update', ['addadmin'=>$item->id])}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <input style="width: 105px" type="submit" value="add admin">
                                        </form>
                                    @endif
                                    <form style="display: inline;" action="{{route('addadmin.store')}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('POST')}}
                                        <input type="text" name="id" value="{{$item->id}}" hidden>
                                        <input style="width:105px" type="submit" value="delete user">
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach

            </div>
        </div>
    </section>



@endsection