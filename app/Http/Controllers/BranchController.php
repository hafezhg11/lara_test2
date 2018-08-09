<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \App::setLocale(\Session::get('lang'));
        $branches = Branch::orderby('id')->paginate(12);
        return view('branch.index',['branches'=>$branches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \App::setLocale(\Session::get('lang'));
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Branch=new Branch($request->all());
        if($Branch->save()){
            return redirect('branch/index');
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
        $branch=Branch::find($id);
//        return view('user.edit',['user'=>$user]);
        return view('branch.edit',['branch'=>$branch]);
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
        $branch=Branch::find($id);
        if($branch->update($request->all())) {
//            $user->updated_at=time();
            return redirect('branch/index');
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
        $branch=Branch::find($id)->delete();
//        User::find($id)->delete();
        return redirect('branch/index');
    }
}
