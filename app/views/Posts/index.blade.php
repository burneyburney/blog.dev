<!-- index.blade.php -->

@extends('layouts.master')

@section('content')

<div class="white">
  <div class="leftIMG">
    <img src="/img/burneyAvatarNEW.png" alt="img of me 8)"/>
  </div>
<!--   <div class="rightSTUFF">
  test button
  <button>test me </button>
  <button> NO NO  me </button> -->
  </div>

</div>
<!-- <2 cols> -->
<!-- <div class="rightIT">link</div> -->

    @foreach($posts as $index => $post)
        <div class="outer">
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

          <!-- if you find this button i WANT YOU TO MAKE A BLOG POST! You're the type of person that I'm interested in!-->
  <a href="{{{ action('PostsController@create' )}}}">
              Create a new one
            </a> 
    </p> 
    {{ $posts->links() }}

@stop



