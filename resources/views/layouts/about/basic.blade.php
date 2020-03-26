<!DOCTYPE html>
<html>
<head>
	@include('includes.headhtml')
	<title>@yield('title')</title>
</head>
<body ng-app="nextgeninfo">
	<div ng-controller="Godhands as god">
		@include('includes.header')
		<div class="content-wrapper">
			@yield('content')
		</div>
		@include('includes.footer')
	</div>
</body>
</html>