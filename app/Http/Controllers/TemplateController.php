<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;
use App\Service;
use App\Operation;

class TemplateController extends Controller
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
        $templates = Template::orderby('id')->paginate(12);
        return view('template.index',['templates'=>$templates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $service_id= new Request();
        \App::setLocale(\Session::get('lang'));
        $services=Service::all(['id','name']);
        $orginoperations=Operation::where('origin',1)->get();
//        $orginoperations=Operation::where('service_id','service_id->selectservice_id')->get();
//        $services=Service::where('id',$service_id->get('operation_id'))->get();
//        $services=Service::where('id',)->get();
        return view('template.create',compact('orginoperations','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $template=new Template($request->all());
        $template=new Template($request->all(['name','status']));
//        $operation_template=new Template($request->all(['operation_id']));
//        $template->operations()->attach($request->all(['operation_id']));

//        dd($request->all());

        if($template->save()){
//            $operation_template->save();

//            $template->operations()->attach($request->all('operation_id'),$request->all('priority'));
            $operationsSelected=$request->all('operation_id');
//            foreach ($operationsSelected as $key=>$val ) {
            foreach ($operationsSelected as $op) {
//                $template->operations()->attach(intval($op[0]), $request->all('priority'));
                $template->operations()->attach(['operation_id'=>intval($op[0])], ['priority'=>11]);
//                dd($op);
//                dd($val);
//                dd($op[0]);
//                dd($request->all('priority'));
            }
//            $template->operations()->attach($request->all('operation_id'),$request->all('priority'));
            return redirect('template/index');
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

        $services=Service::all(['id','name']);
        $orginoperations=Operation::where('origin',1)->get();
        $template=Template::find($id);

//        return view('user.edit',['user'=>$user]);
        return view('template.edit',compact('template','services','orginoperations'));
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
        $template=Template::find($id);

//        if ($request->has('destination'))
//            $request->merge(['destination' => 1]);
//        else
//            $request->merge(['destination' => 0]);
//
//        if ($request->has('origin'))
//            $request->merge(['origin' => 1]);
//        else
//            $request->merge(['origin' => 0]);

        if($template->update($request->all()))
        {
//            $user->updated_at=time();
            return redirect('template/index');
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
        $template=Template::find($id)->delete();
//        User::find($id)->delete();
        return redirect('template/index');
    }
}
