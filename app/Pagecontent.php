<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagecontent extends Model
{
	protected $fillable = ['pageID',	'contentID',	'name',	'titletext',	'titlesize',	'titleweight',	'titleitalic',	'titlecolor',	'titlealign',	'contenttext',	'contentsize',	'contentweight',	'contentitalic',	'contentcolor',	'contentalign',	'backgroundcolor',	'backgroundurl',	'linkurl',	'linktitle',	'size',	'specialmargin',	'specialpadding',	'queue', 'created_at', 'updated_at'];
	protected $guarded = ['id'];
	protected $dates = ['created_at', 'updated_at'];
	protected $casts = [
		'contentitalic' => 'boolean',
		'titleitalic' => 'boolean'
	];

	public function page(){
		return $this->belongsTo('App\Page', 'pageID')->with('pagetype', 'pagegroup');
	}

	public function content(){
		return $this->belongsTo('App\Content', 'contentID');
	}
}
