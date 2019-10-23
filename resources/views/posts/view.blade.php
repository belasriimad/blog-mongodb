@extends('posts.layout')


@section('content')
    <div class="row">
        <div class="col-6 mx-auto mt-4">
            <div class="card bg-light border-primary">
                <h3 class="card-header">{{$post->title}}</h3>
                <div class="card-body">
                    <p class="lead">{{$post->body}}</p>
                </div>
                <div class="card-footer">
                    <a href="{{url('/')}}">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection