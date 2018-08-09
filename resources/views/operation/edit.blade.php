
@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
<script type="text/javascript">

        document.addEventListener('DOMContentLoaded', function(){ //equivalent $(document).ready(function(){}) in jquery
        if (document.getElementById('origincheckbox_ID').checked == false){
            document.getElementById('parent_ID').style.display='block';
        }
        else {
            document.getElementById('parent_ID').style.display = 'none';
            document.getElementById('parentselect_ID').value='';
        }
    });
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
            <small>{{__('operation.Edit Operation')}}</small>
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
            {!! Form::model($operation,['method'=>'PATCH','route'=>['operation/update',$operation->id]]) !!}

            <div class="box-body">
                {{--------------------------------------------}}
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('operation.Operation Name')}}</label>
                    <input name="name" class="form-control" id="" value="{{ old( 'name', $operation->name) }}"  placeholder="{{__('operation.Operation Name')}}" type="text">
                </div>
                <div class="form-group">
                    <label>{{__('operation.Service Name')}}</label>
                    <select class="form-control" name="service_id">
                        <option value="{{$operation->service_id}}" selected>{{$services->find($operation->service_id)->name}}</option>
                        @foreach($services as $service)
                            <option value="{{$service->id}}">{{$service->name}}</option>
                        @endforeach
                        <option value="">{{__('operation.Choose A Service')}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label><input type="radio" name="status" value="1" @if($operation->status==1) checked @endif >{{__('operation.Enable')}}</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="status" value="0" @if($operation->status==0) checked @endif>{{__('operation.Disable')}}</label>
                    </div>
                </div>
                {{--******************--}}
                <div class="checkbox">
                    <label>
                        <input name="origin" type="checkbox" id="origincheckbox_ID" onclick="showparent()" @if($operation->origin==1) checked @else @endif> {{__('operation.Origin')}}
                        {{--<input name="origin" type="checkbox" id="origincheckbox_ID" onclick="showparent()" @if($operation->origin==1) checked @else @endif> {{__('operation.Origin')}}--}}
                    </label>
                </div>
                {{----}}
                <div class="form-group" style="display: block" id="parent_ID" >
                    <label>{{__('operation.Parent Name')}}</label>
                    <select class="form-control" name="parent_id" id="parentselect_ID">
                        @if($operation->parent_id!='')
                            <option value="{{$operation->parent_id}}" selected>{{$operations->find($operation->parent_id)->name}}</option>
                        @endif
                        @foreach($operations as $operation1)
                            <option value="{{$operation1->id}}">{{$operation1->name}}</option>
                        @endforeach
                        <option value=""   @if($operation->parent_id=='') selected @endif>{{__('operation.Choose A Parent')}}</option>
                    </select>
                </div>
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