<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	@section('style_css')
	@show
</head>
<body>
	<p>Header admin</p>
	<h1>Admin page</h1>
		@yield('main_content_here')
	<p>Footer admin</p>
</body>
</html>