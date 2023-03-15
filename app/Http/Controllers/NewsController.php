<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\GoodNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('news.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['foto'=> 'required|image|max:2048']);
        
        $news = new GoodNew();
        $file = $request->file('foto');
        $nombre =  time()."_".$file->getClientOriginalName();
        $news->title=$request->txtTitulo;
        $news->description=$request->txtDescripcion;
        $news->category_id=$request->category_id;
        $news->image_user=$nombre;
        $news->save();
        
        $imagenes = $request->file('foto')->store('public/uploads');
        $url = Storage::url($imagenes);
        File::create([ 'url'=>$url]);
        return redirect()->route('news')->with('success', 'New Created succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
