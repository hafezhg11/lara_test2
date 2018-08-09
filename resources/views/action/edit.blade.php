
@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
{{--<script type="text/javascript">--}}

        {{--document.addEventListener('DOMContentLoaded', function(){ //equivalent $(document).ready(function(){}) in jquery--}}
        {{--if (document.getElementById('origincheckbox_ID').checked == false){--}}
            {{--document.getElementById('parent_ID').style.display='block';--}}
        {{--}--}}
        {{--else {--}}
            {{--document.getElementById('parent_ID').style.display = 'none';--}}
            {{--document.getElementById('parentselect_ID').value='';--}}
        {{--}--}}
    {{--});--}}
    {{--function showparent(){--}}
        {{--if (document.getElementById('origincheckbox_ID').checked == false){--}}
            {{--document.getElementById('parent_ID').style.display='block';--}}
        {{--}--}}
        {{--else {--}}
            {{--document.getElementById('parent_ID').style.display = 'none';--}}
            {{--document.getElementById('parentselect_ID').value='';--}}
        {{--}--}}
    {{--}--}}
{{--</script>--}}
@section('content')
    <section class="content-header">

        <h1>
            {{ __('action.Actions') }}
            <small>{{__('action.Edit Action')}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{__('action.Home')}}</a></li>
            <li class="active">{{__('action.Actions')}}</li>
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
                <h3 class="box-title">{{__('action.Action Specifications')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{--<form role="form">--}}
            {!! Form::model($action,['method'=>'PATCH','route'=>['action/update',$action->id]]) !!}

            <div class="box-body">
                {{---***********---------------************----------*****--}}
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('action.Action Name')}}</label>
                    <input name="name" class="form-control" id="" value="{{ old( 'name', $action->name) }}" placeholder="{{__('action.Action Name')}}" type="text">
                </div>
                <div class="form-group">
                    <label>{{__('action.Operation Name')}}</label>
                    <select class="form-control" name="operation_id">

                        <option value="{{$action->operation_id}}" selected>{{$operations->find($action->operation_id)->name}}</option>
                        <option value="">{{__('action.Choose A Operation')}}</option>
                        @foreach($operations as $operation)
                            <option value="{{$operation->id}}">{{$operation->name}}</option>
                        @endforeach

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
                        <label><input type="radio" name="status" value="1" @if($action->status==1) checked @endif >{{__('action.Enable')}}</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="status" value="0" @if($action->status==0) checked @endif >{{__('action.Disable')}}</label>
                    </div>
                </div>
                {{--******************--}}
                {{--<div class="checkbox">--}}
                {{--<label>--}}
                {{--<input name="origin" type="checkbox" id="origincheckbox_ID" onclick="showparent()"> {{__('operation.Origin')}}--}}
                {{--</label>--}}
                {{--</div>--}}
                {{--------------------------------------}}
                <div class="form-group" style="display: block" >
                    <label>{{__('action.Next Action Name')}}</label>
                    <select class="form-control" name="next_action_id" >
                        @if($action->next_action_id != null)
                            <option value="{{$action->next_action_id}}" selected>{{$actions->find($action->next_action_id)->name}}</option>
                        @else
                            <option value="" selected>{{__('action.Choose A Action')}}</option>
                        @endif

                        @foreach($actions as $action_next)
                            <option value="{{$action_next->id}}">{{$action_next->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group" style="display: block" >
                    <label>{{__('action.Previous Action Name')}}</label>
                    <select class="form-control" name="pre_action_id" >
                        @if($action->pre_action_id != null)
                            <option value="{{$action->pre_action_id}}" selected>{{$actions->find($action->pre_action_id)->name}}</option>
                        @else
                            <option value="" selected>{{__('action.Choose A Action')}}</option>
                        @endif
                        @foreach($actions as $action_pre)
                            <option value="{{$action_pre->id}}">{{$action_pre->name}}</option>
                        @endforeach

                    </select>
                </div>
                {{---***********---------------************----------*****--}}
                {{--------------------------------------------}}
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{__('operation.Edit')}}</button>
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