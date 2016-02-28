<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="/css/style.css">
		<!-- Fonts -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<!-- Styles -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" > --}}
		<script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
		{{-- <link href="{{ elixir('css/apps.css') }}" rel="stylesheet"> --}}
	</head>
	<body>
		{{-- hier komt content van andere views--}}
		@yield('content')
		
	</body>
</html>
