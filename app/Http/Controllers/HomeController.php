<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index1');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function index1()
    {
        return view('home1');
    }
//    public function index2()
//    {
//        return view('dashboard.index');
//    }
    public function index_en()
    {
        \Session::put('lang','en');
        \App::setLocale('en');
//        return view('en/layout');
        return view('dashboard.index');
    }
    public function index_fa()
    {
//        \App::setLocale('fa');
        \Session::put('lang','fa');
        \App::setLocale('fa');
//        return view('fa/layout');
        return view('dashboard.index');
    }
    public function index_ar()
    {
       \Session::put('lang','ar');
        \App::setLocale('ar');
//        return view('ar/layout');
        return view('dashboard.index');
    }
}
