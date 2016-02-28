@extends('layout')

@section('content')
	<h1>Update Project</h1>
	@include('partials.alerts.errors')
	@if(Session::has('flash_message'))
		<div class="alert alert-success">
				{{ Session::get('flash_message') }}
		</div>
	@endif
	<form method="POST" action="/updateStoreProject/{{$oudeData->id}}">
	<select name='workProcess_id'>
		@foreach($werkprocessen as $werkprocess)
			<option value="{{$werkprocess->id}}">{{$werkprocess->workProcessNum}}</option>
		@endforeach
	</select><br>
		<input type="text" name="projectName" placeholder="Project naam" value="{{$oudeData->projectName}}"><br>
		<input type="text" name="description" placeholder="Korte uitleg" value="{{$oudeData->description}}"><br>
		<textarea name="content" id="editor1" rows="10" cols="80">
			{{$oudeData->content}}
		</textarea>
		<script>
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace( 'editor1');
		</script>
		<input type="text" name="tags" placeholder="tags" value="{{$oudeData->tags}}"><br>
		<input type="hidden" name="_method" value="PATCH">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<button type="submit">update project</button>
</form>
@stop