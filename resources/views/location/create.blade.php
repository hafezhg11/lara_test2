@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
@section('content')
    <section class="content-header">

        <h1>
            {{ __('location.Locations') }}
            <small>{{__('location.Create New Location')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{__('translate.Home')}}</a></li>
            <li class="active">{{__('location.Locations')}}</li>
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
                <h3 class="box-title">{{__('location.Location Specifications')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--<form role="form">--}}
{{--            {{ Form::open(['url'=>'user','class'=>'form-horizontal']) }}--}}
            {{ Form::open(['url'=>'location/store','class'=>'']) }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('location.Location Name')}}</label>
                        <input name="name" class="form-control" id="" placeholder="{{__('location.Location Name')}}" type="">
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputEmail1">{{__('location.Description')}}</label>--}}
                        {{--<input name="Description" class="form-control" id="" placeholder="{{__('location.Description')}}" type="text">--}}
                    {{--</div>--}}
                    <div class="checkbox">
                        <label>
                            <input name="origin" type="checkbox"> {{__('location.Location Of Origin')}}
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="destination" type="checkbox"> {{__('location.Destination Location')}}
                        </label>
                    </div>


                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputFile">File input</label>--}}
                        {{--<input id="exampleInputFile" type="file">--}}

                        {{--<p class="help-block">Example block-level help text here.</p>--}}
                    {{--</div>--}}

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