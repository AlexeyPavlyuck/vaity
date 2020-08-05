@extends('layouts/layout')
@section('content')
    <div>
        @php
            foreach ($posts as $post){
            print_r($post->article);
}
        @endphp
    </div>
@endsection
