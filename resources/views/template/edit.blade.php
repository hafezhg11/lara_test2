@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
@section('content')
    <section class="content-header">

        <h1>
            {{ __('template.Templates') }}
            <small>{{__('template.Edit Template')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{__('template.Home')}}</a></li>
            <li class="active">{{__('template.Templates')}}</li>
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
                <h3 class="box-title">{{__('template.Template Specifications')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--<form role="form">--}}
            {!! Form::model($template,['method'=>'PATCH','route'=>['template/update',$template->id]]) !!}


                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('template.Template Name')}}</label>
                        <input name="name" class="form-control" value="{{ old( 'name', $template->name) }}" id="" placeholder="{{__('template.Template Name')}}" type="">
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="status" value="1" @if($template->status==1) checked @endif >{{__('template.Enable')}}</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="0" @if ($template->status==0) checked @endif >{{__('template.Disable')}}</label>
                        </div>
                    </div>
                    <div class="form-group" style="display: block" id="operation_ID" >
                        <label>{{__('template.Origin Operation')}}</label>
                        <select class="form-control" name="operation_id" id="operationselect_ID">
                            @if($template->operation_id != null)
                                <option value="{{$operation->id}}">{{$originoperation->find($operation->id)}}</option>
                            @else
                                <option value="" selected>{{__('template.Choose A Operation')}}</option>
                            @endif
                            @foreach($orginoperations as $operation)
                                <option value="{{$operation->id}}">{{$operation->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="priority_ID">{{__('template.Priority')}}</label>
                        <input name="priority" class="form-control" id="priority_ID" placeholder="{{__('template.Priority')}}" type="">
                    </div>
                    {{--<div class="form-group">--}}
                    {{--<label for="exampleInputEmail1">{{__('location.Description')}}</label>--}}
                    {{--<input name="Description" class="form-control" id="" placeholder="{{__('location.Description')}}" type="text">--}}
                    {{--</div>--}}

                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input name="origin" type="checkbox"--}}
                                {{--@if($location->origin==1)--}}
                                   {{--checked="checked"--}}
                                {{--@endif--}}
                            {{--> {{__('location.Location Of Origin')}}--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input name="destination" type="checkbox"--}}
                               {{--@if($location->destination==1)--}}
                                    {{--checked="checked"--}}
                               {{--@endif--}}
                            {{--> {{__('location.Destination Location')}}--}}
                        {{--</label>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{__('user.Edit')}}</button>
                </div>
            {{--</form>--}}
            {!! Form::close() !!}
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