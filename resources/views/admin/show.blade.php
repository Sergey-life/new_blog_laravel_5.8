@extends('layout')

@section('content')

    @include('errors')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{$post->subject}}</h3>
                <p>{{$post->hort_description}}</p>
                <p>{{$post->author}}</p>
                <p>
                    {{$post->text}}
                </p>
            </div>
        </div>
    </div>

@endsection