<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;
use File;
use App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Log;



class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= Task::orderBy('created_at','asc')->get();

        return view('task',['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator= Validator::make($request->all(),['name' => 'required|max:255','email'=>'required|max:30',]);
        if($validator->fails())
        {
            return redirect('task')->withInput()->withErrors($validator);
        }
        $request->flash();
        $task=new Task;
        $task->name=$request->name;
        $task->designation=$request->designation;
        $task->email=$request->email;
        $task->photo=$request->file('photo')->getClientOriginalName();

        try {
            $task->save();
            $imageName=$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(base_path(). '/public/images/', $imageName);
            $request->session()->flash('alert-success', 'User was successfully added!');
            return redirect('task');


        }
        catch(\Exception $e){
            //Do something when query fails.
            return redirect('task')->withInput()->withErrors("Sorry!! Duplicate Entry.");

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = new Task;
       $result = $test->DeleteImg($id);
        if($result==1)
        {
            return redirect('task');
        }

        return redirect('task')->withInput()->withErrors("Sorry!!Not Found.");

    }
}
