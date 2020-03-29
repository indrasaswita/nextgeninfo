@extends("layouts.{$pageinfo->pagetype->pagetypegroup->name}.{$pageinfo->pagetype->name}")
@section('title')
{{strtoupper($pageinfo->name)}}
@stop
@section('content')

@foreach($pageinfo->pagecontent as $content)
	@if($content->content->name=='card')
	<div class="ct-{{$content->content->name}} m-{{$content->size}}">
		<a class="inner-content" href="{{URL::asset('')}}{{$content->linkurl}}">
			<div class="image" style="background-image:url('{{URL::asset('image/storage')}}/{{$content->backgroundurl}}');">
			</div>
			<div class="inside">
				<div class="title">
					{{$content->titletext}}
				</div>
				<div class="content">
					{{$content->contenttext}}
				</div>
				<div class="action">
					<div class="btn btn-secondary">
						{{$content->linktitle}}
						<i class="far fa-long-arrow-right fa-fw"></i>
					</div>
				</div>
			</div>
		</a>
	</div>
	@elseif($content->content->name=='paragraph')
	<div class="ct-{{$content->content->name}} m-{{$content->size}}">
		<div class="inner-content">
			<div class="image" style="background-image:url('{{URL::asset('image/storage')}}/{{$content->backgroundurl}}');">
			</div>
			<div class="inside">
				<div class="title" style="{{$content->titlecolor==null?'':'color:'.$content->titlecolor.';'}}{{$content->titleweight==null?'':'font-weight:'.$content->titleweight.';'}}{{$content->titlesize==null?'':'font-size:'.$content->titlesize.';'}}">
					{{$content->titletext}}
				</div>
				<div class="content" style="{{$content->contentcolor==null?'':'color:'.$content->contentcolor.';'}}{{$content->contentweight==null?'':'font-weight:'.$content->contentweight.';'}}{{$content->contentsize==null?'':'font-size:'.$content->contentsize.';'}}">
					{!! $content->contenttext !!}
				</div>
		@if($content->linktitle!=null)
				<div class="action">
					<div class="btn btn-secondary">
						{{$content->linktitle}}
						<i class="far fa-long-arrow-right fa-fw"></i>
					</div>
				</div>
		@endif
			</div>
		</div>
	</div>
	@elseif($content->content->name=='singlebutton')
	<div class="ct-{{$content->content->name}} m-{{$content->size}}">
		<a class="btn btn-secondary" href="{{$content->linkurl}}">
			{{$content->linktitle}}
		</a>
	</div>
	@elseif($content->content->name=='singletext')
	<div class="ct-{{$content->content->name}} m-{{$content->size}}" style="{{$content->contentcolor==null?'':'color:'.$content->contentcolor.';'}}{{$content->contentweight==null?'':'font-weight:'.$content->contentweight.';'}}{{$content->contentsize==null?'':'font-size:'.$content->contentsize.';'}}">
		{{$content->contenttext}}
	</div>
	@elseif($content->content->name=='line')
	<div class="ct-{{$content->content->name}} m-{{$content->size}}">
		<hr />
	</div>
	@endif
@endforeach

@stop