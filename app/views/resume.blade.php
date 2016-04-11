<!-- resume.blade.php -->
@extends('layouts.master')
@section('content')
    <p> This is my resume </p>
    <!-- <a href="#"> {{{ action('HomeController@showResume') }}}</a> resume page -->
    <a href="{{{ action('HomeController@showPortfolio')}}}"> PORTFOLIO LINK </a>

@stop
