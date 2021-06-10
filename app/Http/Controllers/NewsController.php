<?php

namespace App\Http\Controllers;


use App\Comment;
use App\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news=News::limit(5)->get();
        return view('news.news',compact('news'));
    }


    public function view(int $id){
        $news_id=$id;
        $news=News::find($id);
        $comments=Comment::where('news_id', $id)->paginate(3);
        //var_dump($comments);
        return view('news.view', compact(['news', 'comments', 'news_id']));
    }

    public function ajaxnews(int $offset){
        $news=News::offset($offset)->limit(5)->get();
        return view('news.ajax', compact('news'));
    }

    public function ajaxcomments(Request $request){

        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'text'=>'required|string|min:5|max:500'
        ]);

        if($request->method() == 'POST'){
            $comment=new Comment($request->post());
            $comment->save();
            $news_id=$request->input('news_id');
        }

        $url='news/'.$news_id;
        return redirect($url);
    }
}
