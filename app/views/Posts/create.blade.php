<!-- create.blade.php -->
@extends("layouts.master")

@section('content')
<!-- <form method="post" action="{{{ action('PostsController@store') }}}">
    <input type="name" value="{{{ Input::old('name') }}}"  placeholder="name" name="name">
    <input type="password" value="{{{ Input::old('password') }}}" placeholder="password" name="password">
    <button type="submit"> THROW IT! </button>
</form> -->

@stop
<form method="post" action="{{{ action('PostsController@store') }}}">
<div class="form group">
    <label for="title"> TITLE </label>
    <input
        type="text"
        clss="form-control"
        id="title" name="title"
        value="{{{ Input::old('title') }}}">
</div>
@if ($errors->has('title'))
    <p>{{ $errors->first(
        'title',
        '<span style="color:red">:message</span>'
        ) }}</p>
@endif

<div class="form-group">
        <label for="body"> Content </label>
        <textarea name="body" id="body" placeholder="body" rows="8" cols="40" value="{{{ Input::old('body') }}}"> </textarea>
        <button type="submit">POST IT!! </button>
</div>

@if ($errors->has('title'))
    <p>{{ $errors->first(
        'body',
        '<span style="color:red">:message</span>'
        ) }}</p>
@endif
</form>
