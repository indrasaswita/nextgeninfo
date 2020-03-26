<div class="header-wrapper">
	<div class="logo">
		<img src="{{URL::asset('')}}image/logo-tp-200px.png" height="22px">
	</div>
	<ul class="nav justify-content-center">
	@foreach($navlist as $list)
		@if(count($list->page)>1)
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{URL::asset('')}}page/{{strtolower($list->name)}}" role="button" aria-haspopup="true" aria-expanded="false">
				{{strtolower($list->name)}}
			</a>
			<div class="dropdown-menu">
			@foreach($list->page as $page)
				<a class="dropdown-item" href="{{URL::asset('')}}page/{{strtolower($page->name)}}">{{strtolower($page->name)}}</a>
			@endforeach
			</div>
		</li>
		@elseif(count($list->page)==1)
		<li class="nav-item">
			<a class="nav-link active" href="{{URL::asset('')}}page/{{strtolower($list->page[0]->name)}}">{{strtolower($list->page[0]->name)}}</a>
		</li>
		@endif
	@endforeach
	</ul>
</div>


<div class="page-header {{$pageinfo->headeroverlap?'overlap':''}}" style="background-image:linear-gradient(-90deg, rgba(196, 225, 255, 0.9) 0, rgba(255, 225, 196, 0.85) 100%),url('{{URL::asset('image/storage')}}/{{$pageinfo->headerbackground}}');">
	<div class="header">
		{{$pageinfo->pageheader}}
	</div>
	<div class="subheader">
		{{$pageinfo->subheader}}
	</div>
</div>