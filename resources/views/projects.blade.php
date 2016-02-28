@extends('layouts.app')

@section('headerImage')
	Werkprocess {{$werkprocessen->workProcessNum }} {{$werkprocessen->workProcess}}
	<small>
		Alle Projecten
		@if(!empty($werkprocessen->projectsCount[0]))
		({{$werkprocessen->projectsCount[0]['countedProjects']}})
		@endif
	</small>
@stop

@section('content')
	<div class='container-center'>
	@foreach($projects as $project)
		<div class="col-md-6">
			<div class='werkprocess'>
				<div class='header-werkprocess'>Project: {{ $project->projectName}}
					<span>
					</span>
				</div>
				<p>{{$project->description}}</p>
				<a type="button" class="btn btn-primary custom-werk-btn btn-color1" href="/project/{{$project->id}}" role='button'>Zie project</a>
			</div>
		</div>
	@endforeach
		</div>
	</div>

@stop
