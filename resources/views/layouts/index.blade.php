<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	@include('partials.header')
	
	@yield('content')

	@include('partials.scripts')
</body>
</html>