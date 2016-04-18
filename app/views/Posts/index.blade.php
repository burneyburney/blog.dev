<!-- index.blade.php -->

@extends('layouts.master')

@section('content')
<!-- 
    <h1 class="title"> TEST ! BURNEY'S B<span class="superSmall">o</span>LOG<span class="superSmall">na</span> TESTING</h1> -->

    @foreach($posts as $post)

         <a href="{{{ action('PostsController@show', ['post' => $post->id ])}}}">
          <div class="post grey">
            <div class="inner">
              <h2 class="title">{{{ $post->title }}}</h2>
              <div class="post_info"> <p> {{{ $post->body }}}</p>
                <p class="date"> Written By: {{{ $post->user->first_name . " " . $post->user->last_name }}} </p>
              </div>
            </div>
          </div>
        </a>
    @endforeach

    <p>

        <br>
        <a href="{{{ action('PostsController@create' )}}}">
            Create a new one
        </a>
    </p>
    {{ $posts->links() }}

@stop



