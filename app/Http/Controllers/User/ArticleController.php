<?php

namespace App\Http\Controllers\User;

use App\Article;
use App\Comment;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $news = Article::all();
        return view('frontend.article.index', compact('news'));
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
        // dd($request->all());
        $valid = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);
        

        $n = Article::where('id', '=', $request->id)->firstOrFail();
        $c = new Comment;
        $c->name = $request->name;
        $c->email = $request->email;
        $c->comment = $request->comment;
        $c->article_id = $n->id;
        $c->save();

        return redirect()->back()->with('success', 'Komentar anda berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $news = Article::where('slug','=',$slug)->firstOrFail();
        $n = $news->id;
        // dd($n);
        $comment = Comment::where('article_id',$n)->get();
        $count = Comment::where('status','=','approved')->count();
        // $c = $comment->name;
        // dd($comment);
        return view('frontend.article.show', compact('news','comment','count'));
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
