{{--@extends('layouts.layoutrtl')--}}
@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )

<script type="text/javascript">
    function showparent(){
        if (document.getElementById('origincheckbox_ID').checked == false){
            document.getElementById('parent_ID').style.display='block';
        }
        else {
            document.getElementById('parent_ID').style.display = 'none';
            document.getElementById('parentselect_ID').value='';
        }
    }
</script>
@section('content')
    <section class="content-header">
        <h1>
            {{ __('operation.Operations') }}
            <small>{{__('operation.Create New Operation')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{__('operation.Home')}}</a></li>
            <li class="active">{{__('operation.Operations')}}</li>
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
                <h3 class="box-title">{{__('operation.Operation Specifications')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--<form role="form">--}}
{{--            {{ Form::open(['url'=>'user','class'=>'form-horizontal']) }}--}}
            {{ Form::open(['url'=>'operation/store','class'=>'']) }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('operation.Operation Name')}}</label>
                        <input name="name" class="form-control" id="" placeholder="{{__('operation.Operation Name')}}" type="text">
                    </div>
                    <div class="form-group">
                        <label>{{__('operation.Service Name')}}</label>
                        <select class="form-control" name="service_id">
                            @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->name}}</option>
                            @endforeach
                            <option value="" selected>{{__('operation.Choose A Service')}}</option>
                        </select>
                    </div>
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input name="status" type="checkbox"> {{__('operation.Status')}}--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--******************--}}
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="status" value="1">{{__('operation.Enable')}}</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="0">{{__('operation.Disable')}}</label>
                        </div>
                    </div>
                    {{--******************--}}
                    <div class="checkbox">
                        <label>
                            <input name="origin" type="checkbox" id="origincheckbox_ID" onclick="showparent()"> {{__('operation.Origin')}}
                        </label>
                    </div>
                    {{----}}
                    <div class="form-group" style="display: block" id="parent_ID" >
                        <label>{{__('operation.Parent Name')}}</label>
                        <select class="form-control" name="parent_id" id="parentselect_ID">
                           @foreach($operations as $operation)
                                <option value="{{$operation->id}}">{{$operation->name}}</option>
                           @endforeach
                            <option value="" selected>{{__('operation.Choose A Parent')}}</option>
                        </select>
                    </div>
                    {{----}}

                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputEmail1">{{__('service.Average Processing Time')}}</label>--}}
                        {{--<input name="ave_processing_time" class="form-control" id="" placeholder="{{__('service.Average Processing Time')}}" type="">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputFile">File input</label>--}}
                        {{--<input id="exampleInputFile" type="file">--}}

                        {{--<p class="help-block">Example block-level help text here.</p>--}}
                    {{--</div>--}}

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{__('operation.Submit')}}</button>
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