@extends('layouts/layout')
@section('content')
    @foreach ($posts as $post)

        <article class="article-index">
            <h2>{{ $post->title }}</h2>
            <img  src="{{$post->img}}">

            <p>{{$post->description}}</p>
            <button name="see-post" type="button"><a href="{{ route('post.show',['id'=>$post->post_id]) }}" >Читать далее...</a></button>

        </article>

    @endforeach
@endsection
