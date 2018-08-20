@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="jumbotron">
                        <div class="btn btn-primary">
                           <a href="/posts/create"><p>Create Blog</p></a>
                        </div>


                        You can Post Your Blogs!!!
                    </div>

                    @if(count($posts)>0)
                        <table class= "table table-striped">

                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href= "/posts/{{$post->id}}/edit" class= "btn btn-success">Edit</td>
                            <td>{!! Form::open(['url'=> ['/posts', $post-> id], 'method'=> 'POST', 'class'=> 'pull-right']) !!}

                            {{ Form::hidden('_method', 'DELETE')}}
                            {{ Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    @else
                    <p>You Have No Posts</p>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
