@extends('layouts.header')
@section('title')@parent Профиль @endsection

@section('content')

    <section id="promotion-area" class="profile">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="profile_card">
                        <div class="card-body profile_card_text">
                            <h4 class="card-title">{{$user->name}}</h4>
                            <p class="card-text">Ваш e-mail: {{$user->email}}</p>
                            <p class="card-text">Вы зарегестрированы:<br> {{$date}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection