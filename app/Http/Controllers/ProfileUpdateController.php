<?php

namespace App\Http\Controllers;

use App\ProfileUpdate;
use Illuminate\Http\Request;
use App\User;

class ProfileUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('hi');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProfileUpdate  $profileUpdate
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileUpdate $profileUpdate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfileUpdate  $profileUpdate
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileUpdate $profileUpdate ,Request $id)
    {
        $user_id = User::find($id);

dd($id);

        $profileUpdate = ProfileUpdate::find($id);
        return view('patient.profile', compact('profileUpdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfileUpdate  $profileUpdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfileUpdate $profileUpdate)
    {

dd('hi');

        $request->validate([
            'user_id'=>'required',
            'p_dob'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip_code'=>'required',
            'p_height'=>'required',
            'time'=>'required',
            'p_weight'=>'required',
            'gender'=>'required',

            ]);
        $appointment = new ProfileUpdate([
            'user_id' => $request->get('user_id'),
            'p_dob' => $request->get('p_dob'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'zip_code' => $request->get('zip_code'),
            'p_height' => $request->get('p_height'),
            'p_weight' => $request->get('p_weight'),
            'gender' => $request->get('gender'),
        ]);

        $appointment->save();
        return redirect('/')->with('success', 'Appointment saved!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfileUpdate  $profileUpdate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileUpdate $profileUpdate)
    {
        //
    }
}
