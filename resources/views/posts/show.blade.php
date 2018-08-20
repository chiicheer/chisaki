@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-primary">Back to posts</a>

	<div class="jumbotron">
		<h2>{{$post-> title}}</h2>
		
		<p>{!!$post->body!!}</p>

		<hr class="bg-dark">

		<small>Written on {{$post-> created_at}}</small>
	</div>
		
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

{!!Form::open(['url'=> ['/posts', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

{{Form::hidden('_method', 'DELETE')}}
<br>
{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}

@endsection