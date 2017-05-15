@extends('layout.app')
@section('title','Todolist')
@section('body')
<br>
<a class="btn btn-danger pull-right" href="/todo/create">CREATE</a><br>
<div class="col-md-3">
</div>

<div class="col-md-6">
@foreach($todos as $todo)
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">{{$todo->created_at->diffForHumans()}}</span> {{--diffForHumans displays time in ago --format--}}
   {{$todo->body}}
  </li>
</ul>
@endforeach
</div>

<div class="col-md-3">
</div>
@endsection