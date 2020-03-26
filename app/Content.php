<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	protected $fillable = ['name', 'margin', 'padding', 'height', 'width', 'created_at', 'updated_at'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];


	public function pagecontent(){
		return $this->hasMany('App\Pagecontent', 'contentID');
	}
}
