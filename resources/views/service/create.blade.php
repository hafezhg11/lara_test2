{{--@extends('layouts.layoutrtl')--}}
@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
@section('content')
    <section class="content-header">

        <h1>
            {{ __('service.Services') }}
            <small>{{__('service.Create New Service')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{__('service.Home')}}</a></li>
            <li class="active">{{__('service.Services')}}</li>
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
                <h3 class="box-title">{{__('service.Service Specifications')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--<form role="form">--}}
{{--            {{ Form::open(['url'=>'user','class'=>'form-horizontal']) }}--}}
            {{ Form::open(['url'=>'service/store','class'=>'']) }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('service.Service Name')}}</label>
                        <input name="name" class="form-control" id="" placeholder="{{__('service.Service Name')}}" type="text">
                    </div>
                    {{----}}
                    <div class="form-group">
                        <label>{{__('service.Branch Name')}}</label>
                        <select class="form-control" name="branch_id">
                           @foreach($branches as $branch)
                                <option value="{{$branch->id}}">{{$branch->title}}</option>
                           @endforeach
                            <option value="0" selected>{{__('service.Choose A Branch')}}</option>
                        </select>
                    </div>
                    {{----}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('service.Specification')}}</label>
                        <input name="specification" class="form-control" id="" placeholder="{{__('service.Specification')}}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('service.Average Processing Time')}}</label>
                        <input name="ave_processing_time" class="form-control" id="" placeholder="{{__('service.Average Processing Time')}}" type="">
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputFile">File input</label>--}}
                        {{--<input id="exampleInputFile" type="file">--}}

                        {{--<p class="help-block">Example block-level help text here.</p>--}}
                    {{--</div>--}}

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{__('service.Submit')}}</button>
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