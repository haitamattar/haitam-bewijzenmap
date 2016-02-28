@extends('layout')

@section('content')
	<p><a class="btn btn-primary btn-lg" href="{{ URL::previous() }}" role="button">terug</a></p>
	<h1>Project {{ $project->projectName}} </h1> <i>{{ $werkprocessNum->workProcessNum}}</i>
		<div id='werkprocessContent'>
		<h3> {{$project->description}}</h3>
		<div> {!! $project->content !!} </div>
		<div> {{$project->tags}}
@stop