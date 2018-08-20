@extends('layouts.app')

@section('content')
<h3>Edit page</h3>

{!! Form::open(['url'=>['/posts', $post-> id], 'method'=>'POST', 
    'enctype'=> 'multipart/form-data']) !!}

   <div class="Form-group">
   	{{Form::Label('title','Title')}}
   	{{Form::text('title', $post-> title, ['class'=>'form-control','placeholder'=>'Title'])}}
	</div>

   <div class="Form-group">
   	{{Form::Label('body','Body')}}
   	{{Form::textArea('body', $post-> body, ['id'=> 'article-ckeditor', 'class'=>'form-control','placeholder'=>'Enter Your Blog'])}}
	</div>

	<div class="from-group">
   		{{Form::file('cover_image')}}
   </div>

{{Form::hidden('_method', 'PUT')}}
<br>
{{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection