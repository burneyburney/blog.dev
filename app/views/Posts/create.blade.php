<!-- create.blade.php -->

@extends("layouts.master")

@section('content')
<form method="post" action="{{{ action('PostsController@store') }}}">
    <input type="email" value="{{{ Input::old('email') }}}"  placeholder="email" name="email">
    <input type="password" value="{{{ Input::old('password') }}}" placeholder="password" name="password">
    <button type="submit"> THROW IT AWAY! </button>
</form>

@stop
