<!-- index.blade.php -->

@extends('layouts.master')

@section('content')
    <h1> All posts </h1>

    @foreach($posts as $post)
        <h2> {{{ $post->title }}}</h2>
        <p> {{{ $post->body }}}</p>

        <a href="{{{ action('PostsController@show', ['post' => $post->id ])}}}"> Read more</a>

    @endforeach

    <p>

        <br>
        <a href="{{{ action('PostsController@create' )}}}">
            Create a new one
        </a>
    </p>
@stop
