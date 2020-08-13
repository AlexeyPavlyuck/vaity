@extends('layouts/layout')
@section('content')
    <article style="border: none">
        <h1>{{ $post->title }}</h1>
        <p class="author"><a href="#">Иван Кузнецов</a>, 12.08.2020</p>
        <img src="{{$post->img}}">
        <p>{{$post->description}}</p>
        {!! $post->article !!}
    </article>

                <form action="{{ route('post.destroy', ['id'=>$post->post_id]) }}" method="post"
                      onsubmit="if (confirm('Точно удалить?')) {return true} else {return false}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Удалить" style="cursor: pointer">
                    <a href="{{ route('post.edit',['id'=>$post->post_id]) }}" class="btn btn-outline-secondary">Редактировать пост</a>
                </form>

@endsection
