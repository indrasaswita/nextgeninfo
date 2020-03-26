<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = ['pagetypeID', 'pagegroupID', 'name', 'pageheader', 'subheader', 'headerbackground', 'showfooter', 'status', 'headeroverlap'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	protected $casts = [
		"showfooter" => "boolean",
		"headeroverlap" => "boolean"
	];


	public function pagegroup(){
		return $this->belongsTo('App\Pagegroup', 'pagegroupID');
	}

	public function pagetype(){
		return $this->belongsTo('App\Pagetype', 'pagetypeID')->with('pagetypegroup');
	}

	public function pagecontent(){
		return $this->hasMany('App\Pagecontent', 'pageID')->with('content');
	}
}
