<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = Appointment::all();
        return view('appointments.index', compact('appointment'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('appointments.create');
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

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'department'=>'required',

            'date'=>'required',
            'time'=>'required',
            'message'=>'required',

            ]);
        $appointment = new Appointment([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'department' => $request->get('department'),
            'phone_number' => $request->get('phone_number'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'message' => $request->get('message'),
        ]);

        $appointment->save();




        return redirect('/')->with('success', 'Appointment saved!');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('appointments.show',compact('appointment'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $contact = Contact::find($id);
        return view('Appointments.edit', compact('Appointment'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);
        $Appointment = Appointment::find($id);
        $Appointment->first_name =  $request->get('first_name');
        $Appointment->last_name = $request->get('last_name');
        $Appointment->email = $request->get('email');
        $Appointment->job_title = $request->get('job_title');
        $Appointment->city = $request->get('city');
        $Appointment->country = $request->get('country');
        $Appointment->save();
        return redirect('/contacts')->with('success', 'Appointment updated!');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $Appointment = Appointment::find($id);
        $Appointment->delete();
        return redirect('/appointment')->with('success', 'Appoinment deleted!');

        //
    }
}
