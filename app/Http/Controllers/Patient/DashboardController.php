<?php

namespace App\Http\Controllers\Patient;
use App\Appointment;
use App\Treatment;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Redirect;
use PDF;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct() {
    //     $this->middleware('auth');
    //   }

      public function index() {

        $user = Auth::user();

       $email = (Auth::user()->email);
       $id = (Auth::user()->id);
    //  $allappointment = Appointment::find('email');
    $patienttreatment= DB::table('patient_treatment')->where('user_id',  $id)->get();



    $patientdiagnosis= DB::table('diagnosis')->where('patient_id',  $id)->get();

// dd($patientdiagnosis);
     $appointment = Appointment::where('user_id', $id)->get();
//
        return view('patient.dashboard',compact('user','appointment','patienttreatment','patientdiagnosis'));
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




    public function updatepicture(Request $request)

    {
        $user = Auth::user();



        return view('patient.profile',compact('user'));

    }



    public function medicalDetail(Request $request)

    {
dd('hi');

       $id = (Auth::user()->id);
    //  $allappointment = Appointment::find('email');

     $medicalDetail = Treatment::where('user_id', $id)->get();
     $a= DB::table('patient_treatment')->where('user_id', '=', 'id')->get();

dd($a);
        return view('patient.dashboard',compact('user','appointment','a'));
      }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function appointmentstore(Request $request)


    {
        //  $user = Auth::user()->id;
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
            'user_id'=>(Auth::user()->id),
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


public function profilestore(Request $request, User $user)


    {

        $user = Auth::user()->id;

        $a=User::where('id',$user);


        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            if ($files = $request->file('image')) {
                $destinationPath = 'public/images/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $update['image'] = "$profileImage";
                }


                User::where('id',$user)->update($update);
                return back()->with('success','Greate! You added the profile picture, now staff will recognize you clearly.');



        // $email = Auth::user()->email;






    }


    public function pupdate(Request $request, User $user)


    {

        $id = Auth::user()->id;



        $request->validate([


            'sex' => 'required',
            'datebirth' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'ethnicity' => 'required',
            'blood_type' => 'required',
            ]);

            $contact = User::find($id);
            $contact->sex =  $request->get('sex');
            $contact->datebirth = $request->get('datebirth');
            $contact->height = $request->get('height');
            $contact->weight = $request->get('weight');
            $contact->ethnicity = $request->get('ethnicity');
            $contact->blood_type = $request->get('blood_type');
            $contact->save();



                // User::where('id',$user)->update($update);
                return back()->with('success','Greate! You added the profile picture, now staff will recognize you clearly.');



        // $email = Auth::user()->email;






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


    public function showuserappointment($id)
    {

//         $appointment = Appointment::where('user_id', $id)->get();
// // dd($appointment);
// //         $appointment = Appointment::findorFail($id);



//         // dd($date,$time);


//         return view('showuserappointment',compact('appointment'));


    }

    public function anishxyz()
    {
        $user = Auth::user()->name;

        return view('updateprofile');
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
