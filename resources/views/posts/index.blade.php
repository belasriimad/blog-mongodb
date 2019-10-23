@extends('posts.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 mt-4">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            @endif
            <div class="card bg-light border-primary">
                <div class="card-body">
                    <div class="float-left mb-3">
                        <h2>Posts</h2>
                    </div>
                    <div class="float-right mb-3">
                        <a class="btn btn-success" href="{{ route('create') }}"> Ajouter</a>
                    </div>
                    <table class="table table-stripped">
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>
                                <form action="{{route('post.delete',$post->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('post.show',$post->id) }}">Voir</a>
                                    <a class="btn btn-primary" href="{{ route('post.edit',$post->id) }}">Modifier</a>
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection