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
    public function appointmentcreate(Request $user)

    {   dd($user);
        $user = Auth::user();


        return view('appointments.create',compact('user'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function appointment(Request $request)


    {






        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'department'=>'required',

            'date'=>'required',
            'time'=>'required',
            'message'=>'required',

            ]);
        $appointment = new Appointment([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'department' => $request->get('service'),
            'phone_number' => $request->get('phone_number'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'message' => $request->get('message'),
        ]);

        $appointment->save();
        return redirect('/')->with('success', 'Appointment saved!');
        return view('appointments.index', compact('appointment'));


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
