<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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

$client = new Client([
    'base_uri' => 'http://localhost:8001',  // Base URI is used with relative requests
    'timeout'  => 2.0, // You can set any number of default request options.
]);

$response = $client->request('POST', 'login');
//dd($response->getBody()->getContents());

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('blogs','BlogController');

Route::get('/autores/todos','AuthorController@showAllAuthors');//->name('author.index');

Route::get('/book/all','BookController@showAllbooks');
//Route::get('authors/{id}','AuthorController@showOneAuthor');

//return view('author.index',compact('authors_all'));
