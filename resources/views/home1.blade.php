{{--@extends('layouts.app')--}}
<style>
    body{
        background-color: black;

        /* card center */
        display: grid;
        place-items: center center;
        height: 100vh;
    }

    .card{
        /*background-color: white;*/
        /*border-radius: 5px;*/
        /*width:auto;*/
        max-width: 400px;
        padding: 1em;
    }
</style>
<body style="background-color: #2c3b41">
{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}


                {{--<div style="float: right;margin: 0 auto;">--}}
                    {{--<img src="/assets/img/logo.png">--}}
                {{--</div>--}}
                {{--<div class="card-body" style="--}}
                  {{--position: absolute;--}}
                  {{--margin: auto;--}}
                  {{--top: 0;--}}
                  {{--right: 0;--}}
                  {{--bottom: 0;--}}
                  {{--left: 0;--}}
                  {{--width: 50%;--}}
                  {{--height: 100px;--}}
                  {{--background-color: #ccc;--}}
                  {{--border-radius: 3px;--}}
                {{--/*margin:0 auto;background-color: #00A6C7;width:50%;height:50%;*/--}}
                {{--" >--}}
                    {{--<a href="/ar" style="float:right;margin: 10px;">Arabic</a>--}}
                    {{--<a href="/fa" style="float: right;margin: 10px;">Farsi</a>--}}
                    {{--<a href="/en" style="float: right;margin: 10px;">English</a>--}}

                {{--</div>--}}

                <div class="card">
                    <img src='{{url("/assets/img/logo.png")}}' alt='Al Rafedain'>
                    <div style="text-align: center">
                        {{--<p style="width: auto;">--}}
                            <a href="/ar" style="margin: 15px;color: #7a869d">العربية</a>
                            <a href="/fa" style="margin: 15px;color: #7a869d">فارسی</a>
                            <a href="/en" style="margin: 15px;color: #7a869d">English</a>

                            {{--<li class="dropdown notifications-menu">--}}
                                {{--<a href="/ar/index" class="dropdown-toggle" data-toggle="dropdown tooltip" title="العربی">--}}
                                    {{--<img src="/assets/img/country_img/iq.png" class="img-circle fa" alt="العربی">--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</p>--}}
                    </div>
                </div>


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
</body>
{{--@endsection--}}
