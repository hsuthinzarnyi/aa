<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
	// use SoftDeletes;
	// protected $fillable = [
	// 	'a_name','created_at','updated_at'
	// ];

	public function books()
  	{
      return $this->hasMany('App\Book');
  	}
}


