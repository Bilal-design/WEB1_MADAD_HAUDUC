@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
    @foreach($posts as $post)

        <h3>{{$post->titre}}</h3>
        <p>{{$post->contenu}}</p>
        <a href="{{route('posts.show', $post->id)}}">
            <button class="btn btn-success">Voir l'article</button>
        </a>

        @if(Auth::check() && Auth::user()->id == $post->user_id)
            <a href="{{route('posts.edit', $post->id)}}">
                <button class="btn btn-info">Editer l'article</button>
            </a>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger">Supprimer l'article</button>
        @endif
            </form>
            <hr>

            @endforeach
        </div>
    </div>
</div>
@endsection