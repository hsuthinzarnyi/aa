<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Author;
use App\Genre;
use App\Publisher;
use App\Book;

class BookController extends Controller
{
   public function index()
   {
   		// $book = DB::table('books')
   		// 		->join('authors','authors.id','=','books.author_id')
   		// 		->join('genres','genres.id','=','books.genre_id')
   		// 		->join('publishers','publishers.id','=','books.publisher_id')
   		// 		->select('books.id','books.b_name','authors.a_name','publishers.p_name','genres.g_name')
   		// 		->get();
        $books = Book::with('authors','genres','publishers')->get();
           		// dd($books);
   		return view('book.list',['book'=>$books]);
   }

   public function create()
   {
   	$author  = Author::all();
   	$publish = Publisher::all();
   	$genre   = Genre::all();
   	return view('book.add',['authors'=>$author, 'pub'=>$publish, 'genres'=>$genre]);
   }

   public function add(Request $request)
   {
   	$this->validate($request,[
   		'name'   => 'required',
   		'a_name' => 'required',
   		'g_name' => 'required',
   		'p_name' => 'required',
   		'price'  => 'required'
   	]);
   	$book 			    = New Book();
   	$book->b_name       = $request->input('name');
   	$book->photo 		= '1';
   	$book->author_id    = $request->input('a_name');
   	$book->genre_id     = $request->input('g_name');
   	$book->publisher_id = $request->input('p_name');
   	$book->price 		= $request->input('price');
   	$book->save();
   	return redirect('book');
   }

   public function delete($id)
   {
   	$book = book::destroy($id);
   	return redirect('book');
   }

   public function edit($id)
   {
         $book       = Book::find($id);
         $authors    = Author::all(); 
         $genres     = GEnre::all(); 
         $publishers = Publisher::all(); 
         return view('book.edit',['book'=>$book, 'author' => $authors, 'publisher'=>$publishers ,'genre'=>$genres]);
   }
}
