@extends('layout')

@section('content')
		<p><a class="btn btn-primary btn-lg" href="/werkprocessen" role="button">terug</a></p>

	<h1>Werkprocess {{$werkprocessen->workProcessNum }} {{$werkprocessen->workProcess}}</h1>
	<h2>Alle Projecten 
		@if(!empty($werkprocessen->projectsCount[0]))
		({{$werkprocessen->projectsCount[0]['countedProjects']}})
		@endif 
		</h2>
		@foreach($projects as $project)
			<div>
			<p>{{ $project->projectName}}</p>
			<p>{!! $project->content !!}</p>
			<p><a class="btn btn-primary btn-lg" href="/project/{{$project->id}}" role="button">lees project</a></p>
		</div>
		@endforeach

@stop