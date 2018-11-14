<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $fillable = [
		'b_name','photo','price','author_id','genre_id','publisher_id','created_at','updated_at','deleted_at'
	];

	public function authors()
	{
		return $this->belongsTo('App\Author','author_id');
	}

	public function genres()
	{
		return $this->belongsTo('App\Genre','genre_id');
	}
	
	public function publishers()
	{
		return $this->belongsTo('App\Publisher','publisher_id');
	}


}
