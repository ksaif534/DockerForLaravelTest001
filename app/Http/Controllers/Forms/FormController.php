<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form;
use App\Jobs\ProcessForm;
use App\Jobs\EditForm;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formList = Form::all();
        return view('form-list',compact('formList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Request Data Handling in Controller
        $input = [
            'user_name'  => $request->username,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => $request->password
        ];
        //Send Request Data to Queue
        ProcessForm::dispatch($input);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Form $formData)
    {
        $formList = Form::where('id',$formData->id)->get();
        return view('form-list',compact('formData','formList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $formData)
    {
        return view('form-edit',compact('formData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $formData)
    {
        //Request Data Handling in Controller
        $input = [
            'user_name'  => $request->username,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => $request->password
        ];
        //Send Request Data to Queue
        EditForm::dispatch($input,$formData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $formData)
    {
        Form::where('id',$formData->id)->delete();
        return back();
    }
}
