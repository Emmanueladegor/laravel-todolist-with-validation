@extends('layout.app')
@section('title','Todolist Organiser')
@section('body')
<form class="form-horizontal" action="/todo" method="post">
{{csrf_field()}}
  <fieldset>
   <center> <legend>Type in Something and i'll help you remember</legend></center>
   
  <a class="btn btn-danger pull-right" href="/todo">back</a><br>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Text:</label>
      <div class="col-md-6 col-md-push-1">
        <textarea class="form-control" name="body" rows="5" id="textArea"></textarea><br>
         <button class="btn btn-primary" type="submit">Create</button>
      </div>
      
    </div>
  
  </fieldset>
</form>

	@if(count($errors) > 0)
	<center>
		<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
			{{$error}}
		@endforeach
		</div>
</center>
	@endif
@endsection