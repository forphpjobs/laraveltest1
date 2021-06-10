@if(\Illuminate\Support\Facades\Auth::check())
    @php
        $user=\Illuminate\Support\Facades\Auth::user();
    @endphp
@else
    @php
        $user=['name'=>'', 'email'=>''];
    @endphp
@endif




<div>
    <form action="/news/ajax/comment" method="POST" >
        {{csrf_field()}}


        <div class="form-group">

            <input type="text" name="name" class="form-control" hidden id="id1" value="{{$user['name']}}">
        </div>
        <div class="form-group">

            <input type="email" name="email" class="form-control" hidden id="id2" value="{{$user['email']}}">
        </div>
        <div class="form-group">
            <label for="id3">Ваш комментарий:</label>
            <textarea class="form-control" name="text" id="id3" rows="3"></textarea>
        </div>
        <input type="hidden" name="news_id" value="{{$news_id}}">
        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
        <button  id="addcomment" type="submit" name="submit" class="btn btn-primary">Отправить</button>
    </form>

</div>