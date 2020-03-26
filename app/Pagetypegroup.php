<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagetypegroup extends Model
{
	protected $fillable = ['name'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];


	public function pagetype(){
		return $this->hasMany('App\Pagetype', 'pagetypegroupID')->with('page');
	}
}
