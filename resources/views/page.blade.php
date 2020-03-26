@extends("layouts.{$pageinfo->pagetype->pagetypegroup->name}.{$pageinfo->pagetype->name}")
@section('title', 'HelloWorld')
@section('content')


@foreach($pageinfo->pagecontent as $content)
	<div class="ct-{{$content->content->name}} m-{{$content->size}}">
		<div class="inner-content">
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
					<a class="btn btn-secondary" href="{{URL::asset('')}}{{$content->linkurl}}">
						{{$content->linktitle}}
						<i class="far fa-long-arrow-right fa-fw"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
@endforeach

@stop