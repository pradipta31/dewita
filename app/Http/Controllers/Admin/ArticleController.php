<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Comment;
use Help;
use Image;
use Auth;
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
            'file' => 'required|image|max:3000|mimes:jpeg,jpg,png',
        ]);
        $gambar = $request->file('file');
        $filename = time() . '.' . $gambar->getClientOriginalExtension();
        if ($request->file('file')->isValid()) {
            Image::make($gambar)->resize(365, 280)->save(public_path('/images/article/'.$filename));
            $file = Article::create([
                'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
                'slug' => str_slug($request->title),
                'desc' => $request->desc,
                'file' => $filename,
                'place' => $request->place,
                'user_id' => Auth::id()
            ]);
        }
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
        $data = Article::find($id);
        return view('admin.article.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id){
    //     dd(request()->all());
    // }
    public function update(Request $request, $id)
    {
        // dd($request()->all());
        $valid = Validator::make($request->all(),[
            'title' => 'required',
            'desc' => 'required',
            'place' => 'required',
            // 'file' => 'required|image|max:3000|mimes:jpeg,jpg,png',
        ]);
        
        if ($request->hasFile('file') == 0) {
            // Image::make($gambar)->resize(365, 280)->save(public_path('/images/article/'.$filename));
            $file = Article::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => str_slug($request->title),
                'desc' => $request->desc,
                // 'file' => $filename,
                'place' => $request->place,
            ]);
        }elseif ($request->hasFile('file')){
            $gambar = $request->file('file');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            Image::make($gambar)->resize(365, 280)->save(public_path('/images/article/'.$filename));
            $file = Article::findOrFail($id)->update([
                'title' => $request->title,
                'slug' => str_slug($request->title),
                'desc' => $request->desc,
                'file' => $filename,
                'place' => $request->place,
            ]);
        }
        return redirect(Help::url('article'))->with('message', 'Artikel telah diperbaharui!');
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
