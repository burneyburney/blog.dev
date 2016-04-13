<!-- create.blade.php -->
@extends("layouts.master")

@section('content')
<form method="post" action="{{{ action('PostsController@store') }}}">
    <input type="name" value="{{{ Input::old('name') }}}"  placeholder="name" name="name">
    <input type="password" value="{{{ Input::old('password') }}}" placeholder="password" name="password">
    <button type="submit"> THROW IT! </button>
</form>

@stop

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
        <label for="body"> Content</label>
        <textarea name ="body" rows="8" cols="40">
        </textarea>
</div>
</form>
