@extends('layouts.header')
@section('title')@parent Регистрация @endsection
@section('content')
    <section id="promotion-area" class="sections">
        <div class="container">
            <!-- Example row of columns -->

            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="promotion">

                        <div class="promotion">

                            <form action="send"  method="post" class="register">


                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputName">Имя</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Адрес электронной почты</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Пароль</label>
                                    <input type="password"  name="pass" class="form-control" id="exampleInputPassword">
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