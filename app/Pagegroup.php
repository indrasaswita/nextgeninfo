<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagegroup extends Model
{
	protected $fillable = ['name', 'queue', 'asalist'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	protected $casts = [
		"asalist" => "boolean"
	];


	public function page(){
		return $this->hasMany('App\Page', 'pagegroupID')->with('pagetype');
	}
}
