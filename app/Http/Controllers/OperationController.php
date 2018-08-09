<?php

namespace App\Http\Controllers;

use App\Operation;
use App\Service;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \App::setLocale(\Session::get('lang'));
        $operations= Operation::orderby('id')->paginate(12);
//        $branches = Branch::all(['id', 'title']);
//        return view('service.index',['services'=>$services]);
        return view('operation.index',compact('operations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \App::setLocale(\Session::get('lang'));
        $operations = Operation::all(['id', 'name']);
        $services = Service::all(['id', 'name']);
//        $operations = Operation::all(['id', 'name'])->where(['status'=>'1']);
        return view('operation.create',compact('operations','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->has('origin'))
            $request->merge(['origin' => 1]);
        else
            $request->merge(['origin' => 0]);
        $operation=new Operation($request->all());

        if($operation->save()){
            return redirect('operation/index');
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
        $services = Service::all(['id', 'name']);
        $operations = Operation::all(['id', 'name']);
        $operation=Operation::find($id);
        return view('operation.edit',compact('operation','services','operations'));
//        return view('operation.edit',['operation'=>$operation]);
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
        $operation=Operation::find($id);

        if ($request->has('origin'))
            $request->merge(['origin' => 1]);
        else
            $request->merge(['origin' => 0]);
//var_dump($request->all());
        if($operation->update($request->all()))
        {
            return redirect('operation/index');
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
        $operation=Operation::find($id)->delete();
        return redirect('operation/index');
    }

}
