@extends('layouts.app')

@section('content')
<h3>This is create page</h3>

{!! Form::open(['url'=>'/posts', 'method'=>'POST', 
    'enctype'=> 'multipart/form-data']) !!}

   <div class="Form-group">
   	{{Form::Label('title','Title')}}
   	{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

   </div>

   <div class="Form-group">
   	{{Form::Label('body','Body')}}
   	{{Form::textArea('body','',['id'=> 'article-ckeditor', 'class'=>'form-control','placeholder'=>'Body'])}}

   </div>

   <div class="from-group">
   		{{Form::file('cover_image')}}
   </div>

<br>
{{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection