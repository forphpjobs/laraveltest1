@foreach ($news as $item)
    <div class="news_promotion offset">
        <a href="news/{{$item->id}}" class="news_promotion_h4"><h4> {{$item->name}}</h4></a>
        <div class="news_text">{!! $item->opisanie !!}</div>
        <div class="news_wrapper">
            <a href="news/{{$item->id}}" class="news_promotion_a">Далее</a>
        </div>
    </div>
@endforeach