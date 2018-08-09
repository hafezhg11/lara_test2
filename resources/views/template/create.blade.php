@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )
@section('jquery')

    <link href="{{URL::asset('assets/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{URL::asset('assets/js/select2.full.min.js')}}"></script>

    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}
<meta name="_token" content="{{ csrf_token() }}">
    {{--<style>--}}
        {{--.select2-results .select2-highlighted {--}}
            {{--background: #3ea211;--}}
        {{--}--}}
    {{--</style>--}}
<script>
    jQuery(document).ready(function(){
        $('#operationselect_ID').select2({
            placeholder:"{{__('template.Choose A Operation')}}",
            allowClear:true
            // dir: "rtl"

            // background: "#3ea211"
            // tags: true
            // templateSelection: formatState
            // language: "fa"
        });
        // $(".js-example-language").select2({
        //     language: "fa"
        // });
        // jQuery('#serviceselect_ID').change(function(e){
        jQuery('#serviceselect_ID').change(function(){
        //     e.preventDefault();
            $('#operationselect_ID').empty();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });



            jQuery.ajax({
                url: "{{ url('/ajax') }}",
                method: 'post',
                data: {
                    serviceselect_id: jQuery('#serviceselect_ID').val(),
                    // name: jQuery('#name_ID').val()
                    // service_id: 1
                    // type: jQuery('#type').val(),
                    // price: jQuery('#price').val()
                },
                // failures:alert(),

                // error: function (error) {
                //     alert(" Can't do because: " + error.message);
                // },

                error: function(xhr, status, error) {
                    var err = JSON.parse(xhr.responseText);
                    alert(err.message);
                    // alert(error);
                    // alert(status);
                },
                success: function(result){

                    // alert(JSON.stringify(result));
                    var op = document.getElementById('operationselect_ID');
                    var length_op=result.length;
                    if(length_op!=0) {
                        for (var i = 0; i < length_op; i++) {
                            op.innerHTML = op.innerHTML +
                                '<option value="' + result[i]['id'] + '">' + result[i]['name'] + '</option>';
                        }
                    }
                    {{--else{--}}
                        {{--op.innerHTML = op.innerHTML +--}}
                            {{--'<option value="" selected>{{__("template.There Is No Operation For This Service")}}</option>';--}}
                    {{--}--}}
                }});
        });

        $('#operationselect_ID').on("select2-selecting", function(e) {
            var val = $(this).val();
            alert(val);
        });

        jQuery('#ajaxbutton').click(function(){
            // e.preventDefault();

            var data = $('#operationselect_ID').select2('data');
            alert (JSON.stringify(data));

            // $('#operationselect_ID').on("select2-selecting", function(e) {
            //     var val = $(this).val();
            //     alert(val);
            // });

            // alert(JSON.stringify(jQuery('#operation_id').val()));
        });
    });

</script>
@endsection

@section('content')
    {{--<script src="{{URL::asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>--}}

    <section class="content-header">

        <h1>
            {{ __('template.Templates') }}
            <small>{{__('template.Create New Template')}}</small>
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
{{--            {{ Form::open(['url'=>'user','class'=>'form-horizontal']) }}--}}
            {{ Form::open(['url'=>'template/store','class'=>'']) }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('template.Template Name')}}</label>
                        <input name="name" class="form-control" id="name_ID" placeholder="{{__('template.Template Name')}}" type="">
                    </div>
                    {{--service--}}
                    <div class="form-group" style="display: block" id="service_ID" >
                        <label>{{__('template.Service Name')}}</label>
                        <select class="form-control" name="service_id" id="serviceselect_ID">
                            <option value="" selected>{{__('template.Choose A Service')}}</option>
                            @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group" style="display: block" id="operation_ID" >
                        <label>{{__('template.Origin Operation')}}</label>
                        {{--<select class="form-control" name="operation_id"  id="operationselect_ID">--}}
                        <select  class="form-control js-example-language" multiple="multiple" name="operation_id[]"  id="operationselect_ID">
                            {{--<option value="" selected>{{__('template.Choose A Operation')}}</option>--}}
                            {{--@foreach($orginoperations as $operation)--}}
                                {{--<option value="{{$operation->id}}">{{$operation->name}}</option>--}}
                            {{--@endforeach--}}

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="priority_ID">{{__('template.Priority')}}</label>
                        <input name="priority" class="form-control" id="priority_ID" placeholder="{{__('template.Priority')}}" type="">
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <label><input type="radio" name="status" value="1" checked>{{__('template.Enable')}}</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="status" value="0">{{__('template.Disable')}}</label>
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputEmail1">{{__('location.Description')}}</label>--}}
                        {{--<input name="Description" class="form-control" id="" placeholder="{{__('location.Description')}}" type="text">--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input name="origin" type="checkbox"> {{__('template.Template Of Origin')}}--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="checkbox">--}}
                        {{--<label>--}}
                            {{--<input name="destination" type="checkbox"> {{__('template.Destination Template')}}--}}
                        {{--</label>--}}
                    {{--</div>--}}


                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputFile">File input</label>--}}
                        {{--<input id="exampleInputFile" type="file">--}}

                        {{--<p class="help-block">Example block-level help text here.</p>--}}
                    {{--</div>--}}

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">{{__('template.Submit')}}</button>
                    <button type="button" class="btn btn-primary" name="ajaxbutton" id="ajaxbutton">Ajax Test</button>
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