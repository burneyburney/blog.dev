<!-- index.blade.php -->

@extends('layouts.master')

@section('content')

<!--     <h1 class="title"> TEST ! BURNEY'S B<span class="superSmall">o</span>LOG<span class="superSmall">na</span> TESTING</h1>
 -->
<div class="grey">
<!-- <img> -->
<div class="leftIT">hi</div>
<!-- <2 cols> -->
<div class="rightIT">link</div>
</div>

    @foreach($posts as $index => $post)

         <a href="{{{ action('PostsController@show', ['post' => $post->id ])}}}">
            <div class="inner">
            <!-- 7 colors used, make sure you dont foreach past that -->
              <div class="post {{ $colors[$index % 7] }}">
                <h2 class="title">{{{ $post->title }}}</h2>
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



