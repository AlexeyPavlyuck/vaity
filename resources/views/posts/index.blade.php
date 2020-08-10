@extends('layouts/layout')
@section('content')
    @foreach ($posts as $post)

        <article class="article-index">
            <h1>{{ $post->title }}</h1>
            <img  src="{{$post->img}}">

            <p>{{$post->description}}</p>
            <button  class="main-button" type="button"><a href="{{ route('post.show',['id'=>$post->post_id]) }}" >Читать далее...</a></button>

        </article>

    @endforeach
@endsection
