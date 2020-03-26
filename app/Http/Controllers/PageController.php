<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Pagegroup;

class PageController extends Controller
{
	public function showhome(){
		return $this->showpage('home');
	}

	public function showpage($pagename){
		$pageinfo = Page::where('name', $pagename)
			->where('status', 'active')
			->with('pagetype')
			->with('pagegroup')
			->with('pagecontent')
			->first();

		$navlist = Pagegroup::with('page')
			->orderBy('queue')
			->get();

		return view('page', compact('pageinfo', 'navlist'));
	}
}
