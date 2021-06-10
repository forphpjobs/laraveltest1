@extends('layouts.header')
@section('title')@parent Админка @endsection
@section('content')
<div style="text-align: center">


    <hr>
    <ul style="display: inline">
        <li style="display: inline; padding-right: 25px;"><nav style="display: inline;text-decoration: underline;font-size: 1.2rem">Новости:</nav>
            <ul style="display: inline;padding-left: 0px">
                <li style="display: inline; padding-right: 5px;"><a style="text-decoration: none;" href="/admin/news/delete">Удалить</a></li>
                <li style="display: inline; "><a  style="text-decoration: none"href="/admin/news/add">Добавить</a></li>
            </ul>
        </li>

        <li  style="display: inline; padding-right: 25px;"><nav style="display: inline;text-decoration: underline;font-size: 1.2rem">Приложения:</nav>
            <ul style="display: inline;padding-left: 0px">
                <li style="display: inline; padding-right: 5px;"><a style="text-decoration: none" href="/admin/app/delete">Удалить</a></li>
                <li style="display: inline"><a  style="text-decoration: none"href="/admin/app/add">Добавить</a></li>
            </ul>
        </li>

        <li style="display: inline; padding-right: 25px;"><nav style="display: inline;text-decoration: underline;font-size: 1.2rem">Комментарии:</nav>
            <ul style="display: inline;padding-left: 0px">
                <li style="display: inline; padding-right: 5px;"><a  style="text-decoration: none"href="/admin/comment/delete">Удалить</a></li>

            </ul>
        </li>

        <li style="display: inline; padding-right: 25px;"><nav style="display: inline;text-decoration: underline;font-size: 1.2rem">Модераторы:</nav>
            <ul style="display: inline;padding-left: 0px">
                <li style="display: inline; padding-right: 5px;"><a  style="text-decoration: none"href="/admin/moder/delete">Удалить / Добавить</a></li>

            </ul>
        </li>

    </ul>
    <hr>
</div>
@endsection




<ul style="display: inline">
    <li style="display: inline; padding-right: 25px;">
        <nav style="display: inline;font-size: 1.2rem">
            <a href="{{route('admin')}}/news">Новости</a>
        </nav>
    </li>

    <li  style="display: inline; padding-right: 25px;">
        <nav style="display: inline;font-size: 1.2rem">
            <a href="{{route('admin')}}/app">Приложения</a>
        </nav>
    </li>

    <li style="display: inline; padding-right: 25px;">
        <nav style="display: inline;font-size: 1.2rem">
            <a href="{{route('admin')}}/addadmin">Админы</a>
        </nav>
    </li>

    <li style="display: inline; padding-right: 25px;">
        <nav style="display: inline;font-size: 1.2rem">
            <a href="{{route('admin')}}/users">Пользователи</a>
        </nav>
    </li>

</ul>
<hr>
</div>