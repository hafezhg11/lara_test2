{{--@extends('layouts.layoutrtl')--}}
@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
@section('content')
    <section class="content-header">

        <h1>
            {{ __('translate.Users') }}
            <small>{{__('translate.Create User')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{__('translate.Home')}}</a></li>
            <li class="active">{{__('translate.Users')}}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    {{--<div class="col-lg-12">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--{!! Form::open(['url'=>'user','class'=>'form-horizontal']) !!}--}}
                {{--<div class="form-group">--}}
{{--                    {{Form::lable('firstname',['class'=>'control-lable'])}}--}}
                    {{--<div class="col-lg-7">--}}
                        {{--{{Form::text('firstname',null,['class'=>'form-control'])}}--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--************************************************--}}
    <div class="col-md-12 center-block">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{__('user.User Specifications')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--<form role="form">--}}
{{--            {{ Form::open(['url'=>'user','class'=>'form-horizontal']) }}--}}
            {{ Form::open(['url'=>'user/store','class'=>'']) }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('user.First Name')}}</label>
{{--                        <label for="exampleInputEmail1">{{__('translate.Users')}}</label>--}}
                        <input name="firstname" class="form-control" id="" placeholder="{{__('user.First Name')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('user.Last Name')}}</label>
                        <input name="lastname" class="form-control" id="" placeholder="{{__('user.Last Name')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('user.Contract Date')}}</label>
                        <input name="contract_date" class="form-control" id="" placeholder="{{__('user.Contract Date')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('user.National Number')}}</label>
                        <input name="ssn" class="form-control" id="" placeholder="{{__('user.National Number')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('user.Date Of Birth')}}</label>
                        <input name="dob" class="form-control" id="" placeholder="{{__('user.Date Of Birth')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('user.Email address')}}</label>
                        <input name="email" class="form-control" id="exampleInputEmail1" placeholder="{{__('user.Email address')}}" type="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">{{__('user.Password')}}</label>
                        <input name="password" class="form-control" id="exampleInputPassword1" placeholder="{{__('user.Password')}}" type="password">
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputFile">File input</label>--}}
                        {{--<input id="exampleInputFile" type="file">--}}

                        {{--<p class="help-block">Example block-level help text here.</p>--}}
                    {{--</div>--}}
                    <div class="checkbox">
                        <label>
                            <input name="Status" type="checkbox"> {{__('user.Status')}}
                        </label>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{__('user.Submit')}}</button>
                </div>
            {{--</form>--}}
            {{ Form::close()}}
        </div>
        <!-- /.box -->
    </div>

{{--*******************************************--}}
    <!-- /.row -->
        <div class="row">
            <section class="col-lg-12 col-md-12">
            </section>
        </div>
        <!-- Main row -->
        <div class="row">
            <!-- right col -->
            <section class="col-lg-7 connectedSortable">
            </section>
            <!-- /.right col -->
            <!-- left col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
            </section>
            <!-- left col -->
        </div>

    {{--************************************************--}}
    </section>
    <!-- /.content -->

@endsection