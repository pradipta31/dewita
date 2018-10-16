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
});


/* END OF ADMIN */


/* USER */

Route::get('/', 'User\HomeController@index');
Route::resource('article', 'User\ArticleController');

// Route::get('/home', 'HomeController@index')->name('home');
