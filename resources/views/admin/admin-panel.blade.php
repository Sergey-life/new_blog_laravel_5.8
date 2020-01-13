@extends('layout')

@include('layouts.app')

@section('content')

    <div class="container">
        <h3>My posts</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Author</td>
                        <td>Actions</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->subject}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            <a href="{{route('posts.show', $post->id)}}">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>

                            <a href="{{ route('posts.edit', $post->id) }}">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>

                            {!! Form::open(['method' => 'DELETE', 'route' =>['posts.destroy', $post->id]]) !!}
                            <button onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-remove"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection