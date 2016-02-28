@extends('layouts.app')

@section('headerImage')
	Alle Werkprocessen
@stop

@section('content')
	<div class='container-center'>
		{{-- <div class='row werkprocessen-row'>
			<div class="col-md-6">
				<div class='werkprocess'>
					<div class='header-werkprocess'>werkprocess 1.1  <span>12 projecten</span></div>
					<p> Stelt de vraag en/of informatie behoeften vast </p>
					<button type="button" class="btn btn-primary custom-werk-btn btn-color1">Zie projecten</button>
				</div>
			</div> --}}

	@foreach($werkprocessen as $werkprocess)
		<div class="col-md-6">
			<div class='werkprocess'>
				<div class='header-werkprocess'> {{$werkprocess->workProcess}} {{$werkprocess->workProcessNum}}
					<span>
						@if(!empty($werkprocess->projectsCount[0]))
							{{$werkprocess->projectsCount[0]['countedProjects']}} projecten
						@endif
					</span>
				</div>
				<p>{{$werkprocess->description}}</p>
				<a type="button" class="btn btn-primary custom-werk-btn btn-color1" href="/werkprocess/{{$werkprocess->id}}" role='button'>Zie projecten</a>
			</div>
		</div>

	@endforeach
		</div>
	</div>

@stop
