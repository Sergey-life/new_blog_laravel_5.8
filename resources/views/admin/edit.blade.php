@extends('layout')

@section('content')

    @include('errors')

    <div class="container">
        <h3>Edit post # - {{ $post->id }}</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    <h4>Title</h4>
                    <input type="text" class="form-control" name="subject" value="{{ $post->subject }}">
                    <br>
                    <h4>Hort description</h4>
                    <textarea name="hort_description" id="" cols="30" rows="5" class="form-control">{{ $post->hort_description }}</textarea>
                    <br>
                    <h4>Text</h4>
                    <textarea name="text" id="" cols="30" rows="10" class="form-control">{{ $post->text }}</textarea>
                    <br>
                    <button class="btn btn-warning">Edit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection