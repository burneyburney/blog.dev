<!-- edit.blade.php -->

@extends('layouts.master')

@section('top-script')

@stop

@section('content')
    <div class="container">
        <div class="row">
            <h1> Edit Post</h1>

            {{ Form::model($post, ['action' => [PostsController@update', $post->id]], 'method' => 'PUT', 'class' => 'form-horizontal'])}}

                <div class="form-group">
                    <label for"title"> Title </label>

                    <!-- <input type="text" name="title" id="title" palceholder="Title" volue="{{{ ( Input::old(' title') != null) ? Input::old('title') : $post->title }}}"> -->
                    {{ Form::text('title', null, ['placeholder' => 'Title']) }}

                </div>
            </div>
            <div class="form-group">

                <label for="body"> Body </label>
