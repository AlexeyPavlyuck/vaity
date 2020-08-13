@extends('layouts/layout')
@section('content')
    @foreach ($posts as $post)
        <article>
            <h1>{{ $post->title }}</h1>
            <p class="author"><a href="#">Иван Кузнецов</a>, 12.08.2020</p>
            <img src="{{$post->img}}">
            <p>{{$post->description}}</p>
            <a class="btn btn-outline-primary btn-lg btn-index" href="{{ route('post.show',['id'=>$post->post_id]) }}" >Читать далее...</a>

        </article>
    @endforeach
@endsection

