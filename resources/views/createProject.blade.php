@extends('layout')

@section('content')
	<h1>Maak project aan</h1>
	@include('partials.alerts.errors')
	<form method="POST" action="/storeProject">
		<select name='workProcess_id'>
		@foreach($werkprocessen as $werkprocess)
			<option value="{{$werkprocess->id}}">{{$werkprocess->workProcessNum}}</option>
		@endforeach
		</select><br>
		<input type="text" name="projectName" placeholder="Project naam"><br>
		<input type="text" name="description" placeholder="Korte uitleg"><br>
		<textarea name="content" id="editor1" rows="10" cols="80">
			Project uitleg
		</textarea>
		<script>
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace( 'editor1');
		</script>
		<input type="text" name="tags" placeholder="tags"><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<button type="submit">Maak Project Aan</button>
</form>
@stop