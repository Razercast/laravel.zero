@extends('layouts.app')
@section('title')
    Главная страница
@endsection
@section('content')
    @include('partials.header')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($posts as $post)
            @include("partials.posts.item",["post"=>$post])
        @endforeach
    </div>
@endsection