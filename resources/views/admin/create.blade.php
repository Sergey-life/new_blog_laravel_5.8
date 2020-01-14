@extends('layout')

@section('content')

@include('errors')

    <div class="container">
        <h3>Create post</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['posts.store']]) !!}
                <div class="form-group">
                    <h4>Title</h4>
                    <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                    <br>
                    <h4>Hort description</h4>
                    <textarea name="hort_description" id="" cols="30" rows="5" class="form-control">{{ old('hort_description') }}</textarea>
                    <br>
                    <h4>Text</h4>
                    <textarea name="text" id="" cols="30" rows="10" class="form-control">{{ old('text') }}</textarea>
                    <br>
                    <h4>Author</h4>
                    <input type="text" class="form-control" name="author" value="{{ $author->name }}">
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection