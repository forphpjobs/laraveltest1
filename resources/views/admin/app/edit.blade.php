@extends('layouts.header')
@section('title')@parent Admin -- Edit @endsection
@section('content')
    @include('admin.layouts.header')



    <section id="promotion-area" class="sections">
        <div class="container">
            <!-- Example row of columns -->

            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="promotion">

                        <div class="promotion">

                            <form action="{{route('app.update', ['app'=>$app->id])}}"  method="post" enctype="multipart/form-data">

                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <input type="text" name="id" value="{{$app->id}}" hidden>
                                <div class="form-group">
                                    <label for="exampleInputName">Название</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{$app->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="opisanie">Описание</label>
                                    <textarea type="textarea" name="opisanie" cols="25" rows="5" class="form-control" id="opisanie" aria-describedby="emailHelp" >{{$app->opisanie}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text">Текст</label>
                                    <textarea type="textarea" name="text" cols="25" rows="10" class="form-control" id="text" aria-describedby="emailHelp" >{{$app->text}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="link">Ссылка</label>
                                    <input type="text" name="link"  class="form-control" id="link" aria-describedby="emailHelp" value="{{$app->link}}">
                                </div>
                                <div class="form-group">
                                    <label for="file">Изображение</label>
                                    <input type="file" name="file"  class="form-control-file" id="file" aria-describedby="emailHelp" value="{{$app->img}}">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div> <!-- /container -->
    </section>


@endsection