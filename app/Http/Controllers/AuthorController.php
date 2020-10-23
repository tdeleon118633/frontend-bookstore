<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Autor;
class AuthorController extends Controller
{
    public function showAllAuthors(){
      $client = new Client([
          'base_uri' => 'http://localhost:8001',  // Base URI is used with relative requests
          'timeout'  => 2.0, // You can set any number of default request options.
      ]);

      $response = $client->request('POST', '/authors/all');

      $authors_all = json_decode($response->getBody()->getContents());
       return view('author.index',compact('authors_all'));
        //return view('author.index');
        //return view('home');
    }

    public function edit(Autor $author)
    {
        return view('author.edit',compact('author'));
    }

    public function delele(){

    }
}
