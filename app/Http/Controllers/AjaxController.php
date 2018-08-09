<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Location;
//use Illuminate\Http\Request;

class AjaxController extends Controller
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
}
