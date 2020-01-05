@extends('layout')

@section('content')

@include('errors')

    <div class="container">
        <h3>Create post</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['posts.store']]) !!}
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                    <br>
                    <textarea name="hort_description" id="" cols="30" rows="5" class="form-control">{{ old('hort_description') }}</textarea>
                    <br>
                    <textarea name="text" id="" cols="30" rows="10" class="form-control">{{ old('text') }}</textarea>
                    <br>
                    <input type="text" class="form-control" name="author" value="{{ old('author') }}">
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection