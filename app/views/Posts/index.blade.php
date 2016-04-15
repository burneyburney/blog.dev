<!-- index.blade.php -->

@extends('layouts.master')

@section('content')

    <h1> All posts </h1>

    @foreach($posts as $post)
        <!-- <h2> {{{ $post->title }}}</h2> -->

        <h2><a href="{{{ action('PostsController@show', ['post' => $post->id ])}}}"> {{{ $post->title }}}</a> </h2>
        <p> {{{ $post->body }}}</p>
        <p>Written By: {{{ $post->user->first_name . " " . $post->user->last_name }}} </p>


    @endforeach

    <p>

        <br>
        <a href="{{{ action('PostsController@create' )}}}">
            Create a new one
        </a>
    </p>
    {{ $posts->links() }}

@stop