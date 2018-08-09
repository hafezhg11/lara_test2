<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        \App::setLocale(\Session::get('lang'));
        $locations = Location::orderby('id')->paginate(12);
        return view('location.index',['locations'=>$locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \App::setLocale(\Session::get('lang'));
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->has('destination'))
            $request->merge(['destination' => 1]);
        else
            $request->merge(['destination' => 0]);

        if ($request->has('origin'))
            $request->merge(['origin' => 1]);
        else
            $request->merge(['origin' => 0]);
        $location=new Location($request->all());


        if($location->save()){
            return redirect('location/index');
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
        //
        $location=Location::find($id);

//        return view('user.edit',['user'=>$user]);
        return view('location.edit',['location'=>$location]);
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
        //
        $location=Location::find($id);

        if ($request->has('destination'))
            $request->merge(['destination' => 1]);
        else
            $request->merge(['destination' => 0]);

        if ($request->has('origin'))
            $request->merge(['origin' => 1]);
        else
            $request->merge(['origin' => 0]);

        if($location->update($request->all()))
        {
//            $user->updated_at=time();
            return redirect('location/index');
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
        //
        $location=Location::find($id)->delete();
//        User::find($id)->delete();
        return redirect('location/index');
    }
}
