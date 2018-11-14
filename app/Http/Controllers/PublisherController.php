<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Publisher;
use Auth;

class PublisherController extends Controller
{
    public function index()
    {
    	$publisher = Publisher::all();
    	return view('publisher.list', ['data_p' => $publisher]);
    }

    public function add(Request $request)
    {
    	$this->validate($request,['name'=>'required']);
    	$publisher = New Publisher();
    	$publisher->p_name = $request->input('name');
    	$publisher->save();
    	return redirect('publisher');
    }

    public function delete($id)
    {

    }
}
