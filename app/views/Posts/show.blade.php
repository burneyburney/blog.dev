
@extends('layouts.master')

@section('content')
    <h1>{{{ $post->title }}} </h1>
    <p> {{{ $post->body}}}</p>
    	<!-- time -->
    <p> {{{  $post->created_at->format('l, F jS Y @ h:i:s A') }}} </p>

    <p>Written by {{{ $post->user->first_name }}} </p>

@stop