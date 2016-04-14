@extends('layouts.master')

<!-- @Asection('content') -->

@section('top-script')
    <title>I'm on it!</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.css"> -->
    <style>
        html{
            height: 100%;
        }
        body{
            background-image: url("/img/marioBackground.jpg");
            width: 100%;
            height: auto;
            /*background-repeat: repeat;*/
            background-attachment: fixed;
            background-position: center;
            background-size: auto;


        }
        h1{
            text-align: center;
            position: relative;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: auto;
            height: auto;

        }
        span{
            margin-left: 10%;
        }
        .mario{
            text-align: center;
            position: relative;
            margin: auto;
            margin-top max-height: 30%;
            right: 0;
            bottom: 0;
            left: 0;
            width: auto;
            height: auto;
        }
        .container{
            margin-top max-height: 20%;
            position:relative;
        }
    </style>
@stop

@section('content')
        <img src="/img/notFound.png" alt="Mountain View">
        <div class="mario">
            <img src="/img/blackMarioTT.png" alt="Mountain View">
        </div>


@stop

@section('bottom-script')

@stop
