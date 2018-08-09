<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
//        \App::setLocale(\Session::get('lang'));
//        \App::setLocale('fa');
    }
    public function index()
    {
        \App::setLocale(\Session::get('lang'));
        $users = User::orderby('id','desc')->paginate(12);
        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        \App::setLocale(\Session::get('lang'));
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user=new User($request->all());
        if($user->save()){
            return redirect('user/index');
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
        $user=User::find($id);

//        return view('user.edit',['user'=>$user]);
        return view('user.edit',['user'=>$user]);
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
        $user=user::find($id);
        if($user->update($request->all()))
        {
//            $user->updated_at=time();
            return redirect('user/index');
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
        $user=User::find($id)->delete();
//        User::find($id)->delete();
        return redirect('user/index');
    }
}
