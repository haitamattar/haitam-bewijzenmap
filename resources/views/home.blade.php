<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/css/style.css">
		<!-- Fonts -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<!-- Styles -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
		<script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
		{{-- <link href="{{ elixir('css/apps.css') }}" rel="stylesheet"> --}}
	</head>
	<body>
		{{-- hier komt content van andere views--}}
		<div class='homepage'>
		<div class="row" style="height:100vh;">
			<div class="col-md-7 intro_about">
			<div class='introText'>
			<h1>welkom<br>
			op mijn bewijzenmap website</h1>
			<div class='intro_story'>
				Je kunt al mijn werkprocessen bekijken en nog veel meer, mist je een account hebt natuurlijk want sommige gegegevens 
				zijn alleen voor school bedoelt. Vraag een account als je nieuwsgierig bent
			</div>
			<button type="button" class="btn btn-default askBtn">vraag een account aan</button>
			</div>
			</div>
			<div class="col-md-5 intro_login">
				<div class="form-group loginform">
					<div class='allLogIn'>
					<h2>Login</h2>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" autocomplete="off" class="form-control customLogForm" name="email" placeholder="emailadres">
						@if ($errors->has('email'))
							<span class="help-block customHelp ">
									<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
						<input type="password" autocomplete="off" class="form-control customLogForm" name="password" placeholder="wachtwoord">
						@if ($errors->has('password'))
							<span class="help-block customHelp">
									{{ $errors->first('password') }}
							</span>
						@endif
						<input type="submit" class="btn btn-default loginBtn" value="inloggen">
				</form>
				</div>
				</div>
			</div>
		</div>
	</div>

		
	</body>
</html>
