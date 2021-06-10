
<div style="text-align: center">
    <hr>
    <div class="admin">
        <nav class="oneadmin">
            <ul class="topmenu">
                <li><a href="{{route('news.index')}}">Новости</a>
                    <ul class="submenu">
                        <li><a href="{{route('news.create')}}">Добавить</a></li>
                    </ul>
                </li>
                <li><a href="{{route('admin')}}/app">Приложения</a>
                    <ul class="submenu">
                        <li><a href="{{route('app.create')}}/">Добавить</a></li>
                    </ul>
                </li>
                <li><a href="{{route('admin')}}/addadmin">Администраторы</a>

                </li>
            </ul>
        </nav>
    </div>
</div>