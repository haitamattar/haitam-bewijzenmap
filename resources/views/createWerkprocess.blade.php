@extends('layout')

@section('content')
	<h1>Voeg werkprocess toe</h1>
	@include('partials.alerts.errors')
	<form method="POST" action="/storeWerkprocess">
		<input type="text" name="workProcess" placeholder="Werkprocess naam"><br>
		<input type="number" name="workProcessNum" step="0.1" placeholder="Werkprocess nummer"><br>
		<input type="text" name="description" placeholder="Korte uitleg werkprocess"><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<button type="submit">Maak werkprocess Aan</button>
</form>
@stop