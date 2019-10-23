@extends('posts.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 mt-4">
            
        </div>
        <div class="card mx-auto">
            <div class="card-header">
                <div class="float-left">
                    <h2>Modifier un post</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-link" href="{{ route('index') }}"> retour</a>
                </div>
            </div>
            <div class="card-body">
                @if (count($errors->all()) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger"> {{ $error }}</div>
                    @endforeach     
                @endif
                <form action="{{ route('post.update',['id'=>$post->id]) }}" method="POST">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <strong>Titre:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Titre" value="{{$post->title}}">
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" rows="10" name="body" placeholder="Description">{{$post->body}}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection