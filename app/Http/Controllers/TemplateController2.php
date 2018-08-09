<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
//use App\Http\Controllers\Controller;
use App\Location;
//use Illuminate\Http\Request;



class TemplateController2 extends Controller
{
    public function index(){
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }
    public function store(Request $request)
    {
        $location = new Location();
        $location->name = $request->name;
//        $grocery->type = $request->type;
//        $grocery->price = $request->price;

        $location->save();
        return response()->json(['success'=>'Data is successfully added']);
    }

    public function fetchOperations(Request $request)
//    public function fetchOperations()
    {
//        \App::setLocale(\Session::get('lang'));
        $operation=new Operation();
//        return response()->json(['success'=>'Data is successfully added']);
//        $operationsservice=$operation->all()->where('service_id',$request->serviceselect_id);
        $operationsservice=$operation->where('service_id',$request->serviceselect_id)->where('origin',1)->get();
//        return response()->json(['success'=>request('name')]);
//        $data= $request->name;

//        return response()->json(['name'=>$data]);
//        return response()->json($request->all());
//        return response()->json($request->serviceselect_id);
//        return response()->json($operation->all());
        return response()->json($operationsservice);

//        return response()->json([$operation->find($request->service_id)]);
//        return response()->$request->service_id;
    }
}
