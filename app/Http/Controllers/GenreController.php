<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Genre;
use Auth;

class GenreController extends Controller
{
    public function index()
    {
    	$genres = Genre::all();
    	return view('genre.list',['genre' =>$genres]);
    }

    public function add(Request $request)
    {
    	$this->validate(
    		$request,['genre'=>'required']);
    	$genre = New Genre();
    	$genre->g_name = $request->input('genre');
    	$genre->save();
    	return redirect('genre');
    }

    public function delete($id)
    {
    	$genre = Genre::destroy($id);
    	return redirect('genre');
    }

    public function edit($id)
    {
    	$genre = Genre::find($id);
    	return view('genre.edit',['data'=>$genre]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,['genre'=>'required']);
        $genre = New Genre();
        $genre->g_name = $request->input('genre');
        $data = array('g_name'=>$genre->g_name);
        Genre::where('id',$id)->update($data);
        $genre->update();
        return redirect('genre');
    }
}
