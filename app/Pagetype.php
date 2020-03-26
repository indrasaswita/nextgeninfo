<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagetype extends Model
{
 protected $fillable = ['pagetypegroupID', 'name', 'favourite', 'status'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	protected $casts = [
		"favourite" => "boolean"
	];


	public function page(){
		return $this->hasMany('App\Page', 'pagetypeID')->with('pagegroup');
	}

	public function pagetypegroup(){
		return $this->belongsTo('App\Pagetypegroup', 'pagetypegroupID');
	}
}
