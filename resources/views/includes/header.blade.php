<div class="header-wrapper collapsed navbar navbar-expand-lg">
	<div class="logo">
		<img src="{{URL::asset('')}}image/logo-tp-white-200px.png" height="22px">
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-fw"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav justify-content-center">
		@foreach($navlist as $list)
			@if(count($list->page)>1 && $list->showinnav)
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
			@elseif(count($list->page)==1 && $list->showinnav)
			<li class="nav-item">
				<a class="nav-link active" href="{{URL::asset('')}}page/{{strtolower($list->page[0]->name)}}">{{strtolower($list->page[0]->name)}}</a>
			</li>
			@endif
		@endforeach
		</ul>
	</div>
</div>


<div class="page-header {{$pageinfo->headeroverlap?'overlap':''}}" style="background-image:linear-gradient(-90deg, rgba(0, 25, 40, 0.4) 0, rgba(40, 25, 0, 0.5) 100%),url('{{URL::asset('image/storage')}}/{{$pageinfo->headerbackground}}');">
	<div class="header">
		{{$pageinfo->pageheader}}
	</div>
	<div class="subheader">
		{{$pageinfo->subheader}}
	</div>
</div>


