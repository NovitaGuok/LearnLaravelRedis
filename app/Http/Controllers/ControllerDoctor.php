<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class ControllerDoctor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        return view('doctors/index',['doctor' => $doctor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/doctors/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'name' => 'required',
    		'degree' => 'required',
    		'phone' => 'required',
    		'address' => 'required',
    		'field' => 'required'
    	]);
        
        Doctor::create([
            'name' => $request->name,
            'degree' => $request->degree,
            'phone' => $request->phone,
            'address' => $request->address,
            'field' => $request->field
        ]);

        return redirect('/doctors/index');
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
        $doctor = Doctor::find($id);
        return view('doctors/edit',['doctor' => $doctor]);
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
        $this->validate($request,[
    		'name' => 'required',
    		'degree' => 'required',
    		'phone' => 'required',
    		'address' => 'required',
    		'field' => 'required'
    	]);
        
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->degree = $request->degree;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->field = $request->field;

        $doctor->save();

        return redirect('/doctors/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
	    return redirect('/doctors/index');
    }
}
