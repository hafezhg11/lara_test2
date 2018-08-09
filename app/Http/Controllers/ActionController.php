<?php

namespace App\Http\Controllers;

use App\Operation;
use App\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \App::setLocale(\Session::get('lang'));
        $actions= Action::orderby('id')->paginate(12);
//        $branches = Branch::all(['id', 'title']);
//        return view('service.index',['services'=>$services]);
        return view('action.index',compact('actions'));
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
        $actions = Action::all(['id', 'name']);
        return view('action.create',compact('operations','actions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action=new Action($request->all());
        if($action->save()){
            return redirect('action/index');
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
        $actions = Action::all(['id', 'name']);
        $operations = Operation::all(['id', 'name']);
        $action=Action::find($id);
        return view('action.edit',compact('action','operations','actions'));
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
        $action=Action::find($id);

        if($action->update($request->all()))
        {
            return redirect('action/index');
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
        $action=Action::find($id)->delete();
        return redirect('action/index');
    }

}
