<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Author;
use Auth;
use App\Book;

class AuthorController extends Controller
{
    public function index()
    {
    	$authors = author::all();
    	return view('author.list' ,['author' =>$authors]);
    }

    public function add(Request $request)
    {
    	$this->validate(
    		$request,['name'=>'required'
    			]);
    	$author = New Author();
    	$author->a_name = $request->input('name');
    	$author->save();
    	return redirect('author');

    }

    public function delete($id)
    {
    	$author = author::destroy($id);
    	return redirect('author');
    }

    public function edit($id)
    {
    	$author = author::find($id);
    	return view('author.edit' , ['author' =>$author]);
    }

    public function update($id, Request $request)
    {
    	$this->validate(
    		$request,['name'=>'required']);
    	$author 		= New Author();
    	$author->a_name = $request->input('name');
    	$data = array('a_name'=> $author->a_name,);
    	author::where('id',$id)->update($data);
    	$author->update();
    	return redirect('author');

    }
}
