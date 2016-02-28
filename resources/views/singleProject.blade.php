@extends('layouts.app')

@section('headerImage')
	Project  {{ $project->projectName}}
	<small>
		werkprocess {{ $werkprocessNum->workProcessNum}}
	</small>
@stop

@section('content')
	<div class='container-center center-project'>
		{{-- <div class='row werkprocessen-row'>
			<div class="col-md-6">
				<div class='werkprocess'>
					<div class='header-werkprocess'>werkprocess 1.1  <span>12 projecten</span></div>
					<p> Stelt de vraag en/of informatie behoeften vast </p>
					<button type="button" class="btn btn-primary custom-werk-btn btn-color1">Zie projecten</button>
				</div>
			</div> --}}

			{{-- <p><a class="btn btn-primary btn-lg" href="{{ URL::previous() }}" role="button">terug</a></p> --}}
				<div id='werkprocessContent'>
				<h3> {{$project->description}}</h3>
				<div> {!! $project->content !!} </div>
				<div> {{$project->tags}}
		</div>

@stop
