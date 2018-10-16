<?php

namespace App\Http\Controllers\User;

use App\Article;
use Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('frontend.layouts.super', compact('articles'));
    }
}
