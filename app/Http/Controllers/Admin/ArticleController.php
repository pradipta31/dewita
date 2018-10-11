<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Alert;
use Help;
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
            'file' => 'required',
        ]);
        $response = [];
        if (Article::where('title','=',$request->title)->get()->count() > 0) {
            $response = [
                'messages' => ['Artikel sudah ada.']
            ];
            return response()->json($response);
        }else{
            $post = Article::create([
                'title' => $request->title,
                'desc' => $request->desc,
                'place' => $request->place,
                'file' => json_encode($request->file),
            ]);

            $response = [
                'messages' => ['Artikel berhasil disimpan!'],
            ];
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
        $article = Article::find($id);
        $article->delete();
        return redirect(Help::url('article'))->with('alert-success','Data yang anda pilih berhasil dihapus!');
    }
}
