<?php

namespace App\Http\Controllers\Admin;

use App\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class appadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps=App::all();
        return view('admin.app.index', compact(['apps']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.app.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|string|unique:apps',
            'opisanie'=>'required|string',
            'text'=>'required|string|min:256',
            'link'=>'required|string|max:256',
            'file'=>'required|file',
        ]);

        $path=$request->file('file')->store('img','public');

        App::create([
            'name'=>$request->name,
            'opisanie'=>$request->opisanie,
            'text'=>$request->text,
            'link'=>$request->link,
            'img'=>$path,
        ]);
        return redirect()->route('app.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app=App::find($id);
        return  view('admin.app.view', compact('app'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app)
    {
        return view('admin.app.edit',compact('app'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App $app)
    {
        $path = $request->file('file')->store('img', 'public');
        App::where('id', (int)$request->id)->update([
            'name'=>$request->name,
            'text'=>$request->text,
            'opisanie'=>$request->opisanie,
            'img'=>$path,
            'link'=>$request->link,
            ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        App::destroy($id);
        return redirect()->route('app.index');
    }
}
