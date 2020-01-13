@extends('layout')

@section('content')

    @include('errors')

    <div class="container">
        <h3>Edit post # - {{ $post->id }}</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" value="{{ $post->subject }}">
                    <br>
                    <textarea name="hort_description" id="" cols="30" rows="5" class="form-control">{{ $post->hort_description }}</textarea>
                    <br>
                    <textarea name="text" id="" cols="30" rows="10" class="form-control">{{ $post->text }}</textarea>
                    <br>
{{--                    <input type="text" class="form-control" name="author" value="{{ $post->author }}">--}}
{{--                    <br>--}}
                    <button class="btn btn-warning">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection