
@extends( \App::isLocale('en')  ?  'layouts.layoutltr' : 'layouts.layoutrtl' )

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{ __('location.Locations') }}
        <small>{{__('location.View All Locations')}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{__('translate.Home')}}</a></li>
        <li class="active">{{__('location.Locations')}}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    {{--**************************--}}
    {{--{{\App}}--}}
@foreach ($locations as $location)
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" @if(!\App::isLocale('en')) style="float: right" @endif>
        {{--<div class="panel panel-primary">--}}
        <div class="panel panel-info">
            <div class="panel-heading">
            {{__('Location.Location Name')}}: {{$location->name}}
            </div>
            <div class="panel-body">
                <p>{{ __('Location.Location Of Origin') }}:
                    @if($location->origin==1)
                        <span style='color:green' class='glyphicon glyphicon-ok'></span>
                    @else
                        <span style='color:red' class='glyphicon glyphicon-remove'></span>
                    @endif
                </p>
                <p>{{ __('Location.Destination Location') }}:
                    @if($location->destination==1)
                        <span style='color:green' class='glyphicon glyphicon-ok'></span>
                    @else
                        <span style='color:red' class='glyphicon glyphicon-remove'></span>
                @endif
                </p>
                {{--<p>{{ __('translate.Date Of Birth') }}:{{$user->dob}}</p>--}}
                {{--<p>{{ __('translate.SSN') }}:{{$user->ssn}}</p>--}}
            </div>
            {{--<div class="panel-footer" align="center">--}}
            <div class="panel-footer" >
                {{--<button type="button" title="{{__("translate.Show")}}" class="btn btn-primary btn-circle btn-sm">--}}
                {{--<i class="fa fa-list"></i>--}}
                {{--</button>--}}
                {{--<button type="button" title="{{__("translate.Edit")}}" class="btn btn-primary btn-circle btn-sm">--}}
                    {{--<i class="fa fa-edit"></i>--}}
                {{--</button>--}}
                {{--<button type="button" title="{{__("translate.Delete")}}" class="btn btn-primary btn-circle btn-sm">--}}
                    {{--<i class="fa fa-remove"></i>--}}
                {{--</button>--}}

                {{--<a data-original-title="{{__("translate.Show")}}" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary" ><i class="fa fa-list"></i></a>--}}
                <a title="{{__("translate.Show")}}" data-toggle="modal" data-target="#show{{$location->id}}" type="button" class="btn btn-sm btn-primary" ><i class="fa fa-list"></i></a>
                <span class="pull-right">
                    <a href="<?= url('location/'.$location->id.'/edit'); ?>" data-original-title="{{__("translate.Edit")}}" data-target="#{{$location->id}}" type="submit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                    <a data-original-title="{{__("translate.Delete")}}" data-toggle="modal" data-target="#delete{{$location->id}}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
                </span>
            </div>
        </div>

    </div>

        {{--*************************************************--}}
        {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
        {{--<div class="panel panel-info">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">Sheena Shrestha</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>--}}

                    {{--<!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>--}}
                      {{--<dl>--}}
                        {{--<dt>DEPARTMENT:</dt>--}}
                        {{--<dd>Administrator</dd>--}}
                        {{--<dt>HIRE DATE</dt>--}}
                        {{--<dd>11/12/2013</dd>--}}
                        {{--<dt>DATE OF BIRTH</dt>--}}
                           {{--<dd>11/12/2013</dd>--}}
                        {{--<dt>GENDER</dt>--}}
                        {{--<dd>Male</dd>--}}
                      {{--</dl>--}}
                    {{--</div>-->--}}
                    {{--<div class=" col-md-9 col-lg-9 ">--}}
                        {{--<table class="table table-user-information">--}}
                            {{--<tbody>--}}
                            {{--<tr>--}}
                                {{--<td>Department:</td>--}}
                                {{--<td>Programming</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>Hire date:</td>--}}
                                {{--<td>06/23/2013</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>Date of Birth</td>--}}
                                {{--<td>01/24/1988</td>--}}
                            {{--</tr>--}}

                            {{--<tr>--}}
                            {{--</tr><tr>--}}
                                {{--<td>Gender</td>--}}
                                {{--<td>Female</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>Home Address</td>--}}
                                {{--<td>Kathmandu,Nepal</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>Email</td>--}}
                                {{--<td><a href="mailto:info@support.com">info@support.com</a></td>--}}
                            {{--</tr>--}}
                            {{--<tr><td>Phone Number</td>--}}
                                {{--<td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)--}}
                                {{--</td>--}}

                            {{--</tr>--}}

                            {{--</tbody>--}}
                        {{--</table>--}}

                        {{--<a href="#" class="btn btn-primary">My Sales Performance</a>--}}
                        {{--<a href="#" class="btn btn-primary">Team Sales Performance</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="panel-footer">--}}
                {{--<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>--}}
                {{--<span class="pull-right">--}}
                    {{--<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>--}}
                {{--</span>--}}
            {{--</div>--}}

        {{--</div>--}}
        {{--</div>--}}
    {{--*************************************************--}}


    {{--delete modal--}}
        <div class="modal fade" id="delete{{$location->id}}" tabindex="-1" role="dialog" aria-labelledby="mylable" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="mymodallabel">
                            {{__('location.Location Delete')}}
                        </h4>
                        <form action="<?= url('location/'.$location->id) ?>" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="modal-body">
                                <h3>{{__('location.Are you sure you want to delete the following Location?')}} <hr>
                                     {{$location->name}}</h3>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" value="{{__('location.Delete')}}">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    {{__('location.Cancel')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     {{--/. delete modal--}}
        {{--show modal--}}
        <div class="modal" id="show{{$location->id}}" tabindex="-1" role="dialog" aria-labelledby="mylable" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="mymodallabel">
                            {{$location->name}}
                        </h4>
                        <div class="modal-body">
                            <p>{{ __('Location.Location Of Origin') }}:
                                @if($location->origin==1)
                                    <span style='color:green' class='glyphicon glyphicon-ok'></span>
                                @else
                                    <span style='color:red' class='glyphicon glyphicon-remove'></span>
                                @endif
                            </p>
                            <p>{{ __('Location.Destination Location') }}:
                                @if($location->destination==1)
                                    <span style='color:green' class='glyphicon glyphicon-ok'></span>
                                @else
                                    <span style='color:red' class='glyphicon glyphicon-remove'></span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     {{--/. show modal--}}
@endforeach
{{--***********************************--}}

{{--///////////////////////////////////////////////////--}}
{{--@foreach ($users as $user)--}}
    {{--<div class="modal" id="{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="mylable" aria-hidden="true">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">--}}
                        {{--&times;--}}
                    {{--</button>--}}
                    {{--<h4 class="modal-title" id="mymodallabel">--}}
                        {{--{{$user->firstname}}.' '.{{$user->lastname}}--}}
                    {{--</h4>--}}
                    {{--<div class="modal-body">--}}
                        {{--<p>first name: {{$user->firstname}}</p>--}}
                        {{--<p>last name: {{$user->lastname}}</p>--}}
                        {{--<p>national number: {{$user->ssn}}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endforeach--}}
{{--///////////////////////////////////////////////////--}}
    <!-- /.row -->
    <div class="row">
        <section class="col-lg-12 col-md-12">
            {{--<div class="box box-info">--}}
            {{--<div class="box-header">--}}
            {{--<i class="fa fa-info-circle"></i>--}}
            {{--<h3 class="box-title">قالب AdminLTE فارسی ورژن 2.4.0</h3>--}}
            {{--<!-- tools box -->--}}
            {{--<div class="pull-left box-tools">--}}
            {{--<button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>--}}
            {{--</button>--}}
            {{--</div>--}}
            {{--<!-- /. tools -->--}}
            {{--</div>--}}
            {{--<div class="box-body">--}}
            {{--<h5>این قالب به صورت html هست و برای بخش کنترل پنل و مدیریت سایت های مختلف مناسب می باشد.</h5>--}}
            {{--<h5>نسخه اصلی این قالب AdminLTE می باشد که توسط <a href="https://adminlte.io">Almsaeed Studio</a> به صورت رایگان قرار داده شده است.</h5>--}}
            {{--<br><h5><b>ویژگی های قالب و تفاوت های آن با قالب اصلی:</b></h5>--}}
            {{--<h5>۱- قالب به صورت کامل و حرفه ای فارسی و راست چین شده.</h5>--}}
            {{--<h5>۲- انتخاب تاریخ به صورت شمسی یا دیتا پیکر توسط کتاب خانه باباخانی اضافه شده.</h5>--}}
            {{--<h5>۳- ویرایشگر CK Editor فارسی و راست چین شده.</h5>--}}
            {{--<h5>۴- ویرایشگر TinyMCE فارسی و راست چین شده و به قالب اضافه شده.</h5>--}}
            {{--<h5>۵- همچنین فونت فارسی برای خوانایی بیشتر حروف و اعداد فارسی به قالب افزوده شد.</h5>--}}
            {{--<br>--}}
            {{--<h6><b>قالب توسط حافظ هیبتی و به صورت رایگان منتشر شده است.</b></h6>--}}
            {{--<h6><b>برای دانلود قالب و دریافت آپدیت های آن به این <a href="http://hosseinizadeh.ir/adminlte">وب سایت</a> مراجعه کنید.</b></h6>--}}
            {{--</div>--}}
            {{--</div>--}}
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
    <!-- /.row (main row) -->

</section>
<!-- /.content -->
@endsection