@extends('layouts.app')

@section('headerImage')
	Alle Werkprocessen
@stop

@section('content')
	<div class='container-center'>
		<div class='row werkprocessen-row'>
			<div class="col-md-6">
				<div class='werkprocess'>
					<div class='header-werkprocess'>werkprocess 1.1  <p>12 projecten</p></div>
					<p> Stelt de vraag en/of informatie behoeften vast </p>
				</div>
			</div>
			
			<div class="col-md-6">JOOP</div>
		</div>
	</div>
	@foreach($werkprocessen as $werkprocess)
		<div id='werkprocessContent'>
		<h3> {{$werkprocess->workProcess}} {{$werkprocess->workProcessNum}}</h3>
		<div> {{$werkprocess->description}} </div>
		<div> {{$werkprocess->competencies}} 
			@if(!empty($werkprocess->projectsCount[0]))
				{{$werkprocess->projectsCount[0]['countedProjects']}} projecten</div>
			@endif
			 <p><a class="btn btn-primary btn-lg" href="/werkprocess/{{$werkprocess->id}}" role="button">Learn more</a></p>
		</div>
		
	@endforeach

@stop