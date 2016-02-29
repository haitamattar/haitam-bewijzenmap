@extends('layouts.app')

@section('headerImage')
	Project  {{ $project->projectName}}
	<small>
		werkprocess {{ $werkprocessNum->workProcessNum}}
	</small>
@stop

@section('content')
	<div class='container-center center-project'>
		@if (Auth::user()->admin == 1)
			<a type="button" class="btn btn-primary custom-werk-btn btn-admin center-block" href="/updateProject/{{$project->id}}" role='button'>Update project</a>
		@endif
		<div id='werkprocessContent'>
			<h3 style='text-align: center;'> {{$project->description}}</h3>
			<div> {!! $project->content !!} </div>
			<div> {{$project->tags}}
	</div>
@stop
