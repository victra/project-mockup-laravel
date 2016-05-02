<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>{{ $title }}</title>
	{{ HTML::style('public/css/master/main.css') }}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	@include('layouts.script')
	@include('layouts.web.header')
	@yield('content')
	@include('layouts.web.footer')
</body>
</html>
