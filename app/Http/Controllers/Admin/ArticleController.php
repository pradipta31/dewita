<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Alert;
use Help;
use Storage;
use Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(),[
            'title' => 'required',
            'desc' => 'required',
            'place' => 'required',
            'file' => 'required|file',
        ]);

        
        $input           = Input::all();
        $file            = array_get($input, 'image');
        $destinationPath = public_path('public/articleimage');
        $fileName        = $request->file->getClientOriginalName();
        $imageResize     = Image::make($file->getRealPath())
                        ->resize(50,50,function($c){$c->aspectRatio(); $c->upsize();})->save($destinationPath.'/'.$fileName);  
        $filepath        = $destinationPath.'/'.$path;
        $file = Article::create([
            'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
            'slug' => str_slug($request->title),
            'desc' => $request->desc,
            'file' => $filepath,
            'place' => $request->place
        ]);
        
        return redirect(Help::url('article/create'))->with('message', 'Artikel baru telah disimpan!');
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
        $data = Article::findOrFail($id);
        return view('admin.article.edit', compact('data'));
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
        $article = Article::find($id);
        $article->delete();
        return redirect(Help::url('article'))->with('alert-success','Data yang anda pilih berhasil dihapus!');
    }
}
