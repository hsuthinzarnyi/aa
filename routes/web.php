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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/author', 'AuthorController@index');
Route::get('author/add', function(){
	return view('author.add');
});
Route::post('author/add','AuthorController@add');
Route::get('author/delete/{id}','AuthorController@delete');
Route::get('author/edit/{id}', 'AuthorController@edit');
Route::post('author/update/{id}', 'AuthorController@update');


Route::get('/genre','GenreController@index');
Route::get('genre/add',function(){
	return view('genre.add');
});
Route::post('genre/add', 'GenreController@add');
Route::get('genre/delete/{id}','GenreController@delete');
Route::get('genre/edit/{id}', 'GenreController@edit');
Route::post('genre/update/{id}', 'GenreController@update');


Route::get('/publisher','PublisherController@index');
Route::get('publisher/add', function(){
	return view('publisher.add');
});
Route::post('publisher/add', 'PublisherController@add');


Route::get('/book', 'BookController@index');
Route::get('book/create', 'BookController@create');
Route::post('book/add', 'BookController@add');
Route::get('book/delete/{id}','BookController@delete');
Route::get('book/edit/{id}','BookController@edit');






