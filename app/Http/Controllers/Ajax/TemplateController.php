<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
//use App\Http\Controllers\Controller;
use App\Location;
//use Illuminate\Http\Request;



class TemplateController extends Controller
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
//        $operation=new Operation();
        return response()->json(['success'=>'Data is successfully added']);
//        $operation->find($request->service_id);
//        return response()->json(['success'=>'Data is successfully added']);

//        return response()->json([$operation->find($request->service_id)]);
    }
}
