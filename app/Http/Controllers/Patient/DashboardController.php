<?php

namespace App\Http\Controllers\Patient;
use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        $user = Auth::user();


        return view('patient.dashboard',compact('user'));
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appointmentcreate(Request $request)

    {
        $user = Auth::user();


        return view('appointments.create',compact('user'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function appointmentstore(Request $request)


    {
        // $user = Auth::user()->name;
        // $email = Auth::user()->email;



        $request->validate([

            'phone_number'=>'required',
            'department'=>'required',

            'date'=>'required',
            'time'=>'required',
            'message'=>'required',

            ]);

        $appointment = new Appointment([
            'name' => (Auth::user()->name),
            'email' =>(Auth::user()->email),
            'department' => $request->get('department'),
            'phone_number' => $request->get('phone_number'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'message' => $request->get('message'),
        ]);
        $appointment->save();

        $details=[
            'name' => (Auth::user()->name),
            'title'=> 'Confirmation email for  Medic+',
            'body'=> 'be there on time, your appointment is booked for sure.Trust us we will cure you on',
            'date' => $request->get('date'),
            'time' => $request->get('time')
            ];
            \Mail::to(Auth::user()->email)->send(new \App\Mail\TestMail($details));

        return redirect('/patient_dashboard')->with('success', 'Appointment saved!');


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
        //
    }
}
