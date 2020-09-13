<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



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


Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    $articles = App\Article::all()->take(3);

    // $articles = App\Article::get();

    return view('about', ['articles' => $articles]);
});


Route::get('articles/create', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');

Route::get('articles', 'ArticlesController@index')->name('articles');


Route::get('articles/{id}', 'ArticlesController@show');
