<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* ADMIN */

Auth::routes();

Route::get('/login', function(){
    return view('admin');
});

Route::get('/home', function(){
    return redirect('/redirecting');
});

Route::get('/redirecting', function(){
    if(Auth::user()->role == 'sadmin'){
        return redirect('sadmin');
    }elseif(Auth::user()->role == 'admin'){
        return redirect('admin');
    }
});

Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', function(){
        return redirect('admin/dashboard');
    });
    Route::get('logout', 'LoginController@logout');
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('article', 'ArticleController');
    // Route::get('article', 'ArticleController@index');
    // Route::get('article/create', 'ArticleController@create');
    // Route::post('article','ArticleController@store');
    // Route::get('article/{id}', 'ArticleController@edit');
    // Route::put('article/update', 'ArticleController@updateArticle');
    // Route::delete('article/{id}', 'ArticleController@destroy');
    Route::resource('comment', 'CommentController');
});


/* END OF ADMIN */


/* USER */

Route::get('/', 'User\HomeController@index');
Route::resource('article', 'User\ArticleController');
Route::get('about-us', function(){
    return view('frontend.about.index');
});

// Route::get('/home', 'HomeController@index')->name('home');
