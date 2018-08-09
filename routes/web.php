<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('en/layout',function(){
//	return view('en/layout');
//});

//Route::get('/{lang}',function ($lang){
//    \App::setLocale($lang);
//});s
//Route::resource('user','UserController');

//Route::get('layoutrtl',function (){
//    return view('layouts/layoutrtl');
//});

//Auth::routes();
//Route::get('/{lang}',function($lang){
//    \Illuminate\Support\Facades\Session::put('lang',$lang);
////    \Session::put('lang',$lang);
////    $ll=\Illuminate\Support\Facades\Session::get('lang');
////    \App::setLocale($ll);
////    \App::setLocale($lang);
////    Auth::routes();
////    \App::setLocale('fa');
////    return \Illuminate\Support\Facades\Redirect::to($this->lang.'/index');
////    return \Illuminate\Support\Facades\Redirect::to(\App::getLocale('lang').'/index');
//    return \Illuminate\Support\Facades\Redirect::to(\Session::get('lang').'/index');
////    return \Illuminate\Support\Facades\Redirect::to($lang);
//});


Auth::routes();
Route::get('/{lang}',function($lang){
    \Illuminate\Support\Facades\Session::put('lang',$lang);
    return \Illuminate\Support\Facades\Redirect::to(\Session::get('lang').'/index');
});


//Route::get('/{lang}/index',function($lang){
//    \Illuminate\Support\Facades\Session::put('lang',$lang);
////    $ll=\Illuminate\Support\Facades\Session::get('lang');
////    \App::setLocale($ll);
////    \App::setLocale($lang);
////    return \Illuminate\Support\Facades\Redirect::to($this->lang.'/index');
//    return \Illuminate\Support\Facades\Redirect::to(\Session::get('lang').'/index');
////    return \Illuminate\Support\Facades\Redirect::to($lang);
//});

//if( \Illuminate\Support\Facades\Session::has('lang')){
////    \Illuminate\Support\Facades\App::setLocale(\Illuminate\Support\Facades\Session::get('lang'));
////    var_dump('hhhhhhh');
//}

//Route::get('fa/layout',function(){
//	return view('fa/layout');
//});
//Route::get('ar/layout',function(){
//	return view('ar/layout');
//});


Route::get('/','HomeController@index1');




//Route::get('/home', 'HomeController@index')->name('home');
Route::get('en/index', 'HomeController@index_en');//->name('en/layout');
Route::get('fa/index', 'HomeController@index_fa');//->name('en/layout');
Route::get('ar/index', 'HomeController@index_ar');//->name('en/layout');
//Route::get('dashboard/index', 'HomeController@index2');//->name('en/layout');

//user
//Route::resource('user','UserController');
Route::get('user/index','UserController@index');
Route::get('user/create','UserController@create');
Route::post('user/store','UserController@store');
Route::get('user/{id}/edit','UserController@edit');
Route::delete('user/{id}','UserController@destroy');
Route::patch('user/{id}','UserController@update')->name('user/update');

//location
Route::get('location/index','LocationController@index');
Route::get('location/create','LocationController@create');
Route::post('location/store','LocationController@store');
Route::get('location/{id}/edit','LocationController@edit');
Route::delete('location/{id}','LocationController@destroy');
Route::patch('location/{id}','LocationController@update')->name('location/update');

//branch
Route::get('branch/index','BranchController@index');
Route::get('branch/create','BranchController@create');
Route::post('branch/store','BranchController@store');
Route::get('branch/{id}/edit','BranchController@edit');
Route::delete('branch/{id}','BranchController@destroy');
Route::patch('branch/{id}','BranchController@update')->name('branch/update');

//service
Route::get('service/index','ServiceController@index');
Route::get('service/create','ServiceController@create');
Route::post('service/store','ServiceController@store');
Route::get('service/{id}/edit','ServiceController@edit');
Route::delete('service/{id}','ServiceController@destroy');
Route::patch('service/{id}','ServiceController@update')->name('service/update');


//operation
Route::get('operation/index','OperationController@index');
Route::get('operation/create','OperationController@create');
Route::post('operation/store','OperationController@store');
Route::get('operation/{id}/edit','OperationController@edit');
Route::delete('operation/{id}','OperationController@destroy');
Route::patch('operation/{id}','OperationController@update')->name('operation/update');

//action
Route::get('action/index','ActionController@index');
Route::get('action/create','ActionController@create');
Route::post('action/store','ActionController@store');
Route::get('action/{id}/edit','ActionController@edit');
Route::delete('action/{id}','ActionController@destroy');
Route::patch('action/{id}','ActionController@update')->name('action/update');

//template
Route::get('template/index','TemplateController@index');
Route::get('template/create','TemplateController@create');
Route::post('template/store','TemplateController@store');
Route::get('template/{id}/edit','TemplateController@edit');
Route::delete('template/{id}','TemplateController@destroy');
Route::patch('template/{id}','TemplateController@update')->name('template/update');

//Ajax Test
//Route::get('ajax',function(){
//    return view('message_test_ajax');
//});
//Route::post('/ajax/post', 'AjaxController@store');

//Route::post('/ajax', 'Ajax\TemplateController@fetchOperations');
Route::post('/ajax', 'TemplateController2@fetchOperations');

