{{--@extends('layouts.layoutrtl')--}}
@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
@section('content')
    <section class="content-header">

        <h1>
            {{ __('branch.Branches') }}
            <small>{{__('branch.Create New Branch')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{__('translate.Home')}}</a></li>
            <li class="active">{{__('branch.Branches')}}</li>
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
                <h3 class="box-title">{{__('branch.Branch Specifications')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--<form role="form">--}}
{{--            {{ Form::open(['url'=>'user','class'=>'form-horizontal']) }}--}}
            {{ Form::open(['url'=>'branch/store','class'=>'']) }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('branch.Branch Title')}}</label>
{{--                        <label for="exampleInputEmail1">{{__('translate.Users')}}</label>--}}
                        <input name="title" class="form-control" id="" placeholder="{{__('branch.Branch Title')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('branch.Landline')}}</label>
                        <input name="landline" class="form-control" id="" placeholder="{{__('branch.Landline')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('branch.Address')}}</label>
                        <input name="address" class="form-control" id="" placeholder="{{__('branch.Address')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('branch.Website Address')}}</label>
                        <input name="website_address" class="form-control" id="" placeholder="{{__('branch.Website Address')}}" type="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('branch.Email Address')}}</label>
                        <input name="email" class="form-control" id="exampleInputEmail1" placeholder="{{__('branch.Email Address')}}" type="email">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{__('branch.Submit')}}</button>
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