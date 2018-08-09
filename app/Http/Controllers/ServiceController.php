<?php

namespace App\Http\Controllers;

use App\Service;
use App\Branch;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \App::setLocale(\Session::get('lang'));
        $services= Service::orderby('id')->paginate(12);
        $branches = Branch::all(['id', 'title']);
//        return view('service.index',['services'=>$services]);
        return view('service.index',compact('services','branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \App::setLocale(\Session::get('lang'));
        $branches = Branch::all(['id', 'title']);
        return view('service.create',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service=new Service($request->all());
        if($service->save()){
            return redirect('service/index');
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        \App::setLocale(\Session::get('lang'));
        $branches = Branch::all(['id', 'title']);
        $service=Service::find($id);
        return view('service.edit',['service'=>$service , 'branches'=>$branches]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \App::setLocale(\Session::get('lang'));
        $service=Service::find($id);


        if($service->update($request->all()))
        {
            return redirect('service/index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id)->delete();
        return redirect('service/index');
    }

}
