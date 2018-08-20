@extends('layouts.app')

@section('content')
	<h3>This is post page</h3>

	@if(count($posts)>0)

		@foreach($posts as $post)

		<div class="jumbotron container">
			<div class= "row">
				<div class= "col-md-4 col-sm-4">
			<h3><a href="/posts/{{$post-> id}}">{{$post-> title}}</a></h3>
			</div>
		</div>

			<div class= "row">
				<div class="col-md-8 col-sm-8">
					<img src= "/storage/cover_images/{{$post-> cover_image}}">
				</div>
			</div>

			<hr class="bg-danger">
			<small><p>Written On {{$post-> created_at}} By {{$post->user->name}}</p></small>
		</div>

		@endforeach
		{{$posts-> links()}}

	@else
		<p>No posts found</p>

	@endif

@endsection