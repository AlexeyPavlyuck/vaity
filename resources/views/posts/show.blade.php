@extends('layouts/layout')
@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <img  src="{{$post->img}}">

        <p>{{$post->description}}</p>
        {!! $post->article !!}

    </article>

                <form action="{{ route('post.destroy', ['id'=>$post->post_id]) }}" method="post"
                      onsubmit="if (confirm('Точно удалить?')) {return true} else {return false}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
                    <a href="{{ route('post.edit',['id'=>$post->post_id]) }}" class="btn btn-outline-primary">Редактировать пост</a>
                    <a href="{{ route('post.index')}}" class="btn btn-outline-primary">На главную</a>
                </form>

@endsection
