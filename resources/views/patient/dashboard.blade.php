@extends('layouts.main')
@extends('layouts.innernav')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->



<div class="section-title">
          <h2>Patient Portal</h2>
          <p>  </p>
        </div>
        {{-- <div class="pull-right">
            <a class="btn btn-success" href="{{ route('profile.update','$user->id')}}" > Upload the profile picture</a>
        </div> --}}

{{--

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('my.appointment',Auth::user()->id)}}" > View your medical detail</a>
        </div> --}}





        <div class="row">
          <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                  <li class="nav-item">
                      <a class="nav-link active show" data-toggle="tab" href="#tab-1">Profile</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-5">Edit your Profile</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-6">Edit your Profile information </a>

                </li>
             <li class="nav-item">


                      <a class="nav-link" data-toggle="tab" href="#tab-2">Book Appointment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tab-3">Medical Detail</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4">Good to know...</a>
                </li>
                  <li class="nav-item">

                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>

                   </li>
			 </ul>
          </div>

	<div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                  <div class="tab-pane active show" id="tab-1">
                      <div class="row">
                          <div class="col-lg-8 details order-2 order-lg-1">
                              <h3>Welcome {{ Auth::user()->name }} , this is your personal profile.</h3>
                              <p class="font-italic">Message your health care provider should your information change.</p>


                              <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                <div class="card-header">Personal Details </div>
                                <div class="card-body">
                                  <h5 class="card-title">Date of birth: {{ Auth::user()->datebirth }}</h5>
                                  <p class="card-text"> </p>

                                  <h5 class="card-title">Height:   {{ Auth::user()->height }} </h5>
                                  <p class="card-text"> </p>

                                  <h5 class="card-title">Weight: {{ Auth::user()->weight }}</h5>
                                  <p class="card-text"></p>

                                  <h5 class="card-title">Ethnicity: {{ Auth::user()->ethnicity }}</h5>
                                  <p class="card-text"> </p>


                                </div>
                              </div>

                          </div>
                          <div class="col-lg-4 text-center order-1 order-lg-2">
                            <a class="thumbnail fancybox" rel="ligthbox" href="/public/images/{{ $user->image }}">
                                <img class="img-responsive" alt="your photo" width="200" height="200" src="/public/images/{{ $user->image }}" />

                            </a>
                          </div>
                      </div>
                  </div>

                  <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>good to know</h3>
                            <p class="font-italic">Message your health care provider should your information change.</p>
                            <p>
                                looking for content to upload regarding health concern
                            </p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="assets/img/Heart.jpg" alt="" class="img-fluid">
                        </div>
                    </div>


                </div>

                <div class="tab-pane" id="tab-5">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>Update Profile picture</h3>
                            {{-- <p class="font-italic">Message your health care provider should your information change.</p>
                            --}}

                            <br>
                                        <form method="POST"  action="{{ route('profileimage.update') }}" enctype="multipart/form-data" >
                                            @csrf
                                        <div class="container">
                                            <div class="row">
                                            <div class="col-sm-2 imgUp">
                                            <div class="imagePreview"></div>
                                        <label class="btn btn-primary">Choose a image<input type="file" name="image" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
                                            </div><!-- col-2 -->
                                            {{-- <i class="fa fa-plus imgAdd"></i> --}}
                                        </div><!-- row -->
                                        </div><!-- container -->
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('update') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form></div>
                        </div>
                    </div>



        <div class="tab-pane" id="tab-6">
         <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>Update Profile information</h3>
                            {{-- <p class="font-italic">Message your health care provider should your information change.</p>
                            --}}

                            <br>

<form method="POST"  action="{{ route('profiles.update') }}"  >
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="sex">Sex</label>
        <input type="text" name="sex" class="form-control" id="sex" placeholder="sex">
      </div>

      <div class="form-group col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" name="datebirth" class="form-control" id="dob" placeholder="Date of Birth">
      </div>

      <div class="form-group col-md-6">
        <label for="height">Height</label>
        <input type="number" name="height" class="form-control" id="height" placeholder="Height">
      </div>

      <div class="form-group col-md-6">
        <label for="weight">Weight</label>
        <input type="number" name="weight" class="form-control" id="weight" placeholder="Weight">
      </div>

      <div class="form-group col-md-6">
        <label for="ethnicity">Ethnicity</label>
        <input type="text" name="ethnicity" class="form-control" id="ethnicity" placeholder="Ethnicity">
      </div>

      <div class="form-group col-md-6">
        <label for="bloodtype">Blood type</label>
        <input type="text"  name="blood_type" class="form-control" id="bloodtype" placeholder="blood group">
      </div>



    <button type="submit" class="btn btn-primary">Update info</button>
  </form>

                        </div>
                    </div>
        </div>






              </div>






                    <div class="tab-pane" id="tab-2">
                      <div class="row">
                          <div class="col-lg-8 details order-2 order-lg-1">
                              <h3>Make Appointments {{ Auth::user()->name }}.</h3>
                              <p class="font-italic">Book an appointment</p>


                                <form action="{{ route('userappointment.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-4 form-group">
                                          <input type="text" name="name" class="form-control" id="name" placeholder="{{ Auth::user()->name }} " data-rule="minlen:20" data-msg="Please enter at least 4 chars"readonly>
                                          <div class="validate"></div>
                                        </div>


                                        <div class="col-md-4 form-group">
                                          <input type="email" class="form-control" name="email" id="email" placeholder="{{ Auth::user()->email}} " data-rule="email:4" data-msg="Please enter your email with @ sign"readonly>
                                          <div class="validate"></div>
                                        </div>
                                      </div>



                                          <div class="form-row">
                                            <div class="col-md-4 form-group">
                                                <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Contact Number"  data-msg="Please enter the phone number">
                                                <div class="validate"></div>
                                              </div>

                                            <div class="col-md-4 form-group">
                                              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Date" data-rule="minlen:8" data-msg="Please enter at least 4 chars">
                                              <div class="validate">

                                              </div>
                                            </div>

                                        <div class="col-md-4 form-group">
                                            <input type="time" class="form-control" name="time" id="time" placeholder="Appointment Time"  data-msg="Please enter the time">
                                            <div class="validate"></div>
                                          </div>

                                        </div>



                                        <div class="col-md-4 form-group">
                                          <select name="department" id="department" class="form-control">
                                            <option value="">Select Department</option>
                                            <option value="Cardiology">Cardiology</option>
                                            <option value="Neurology">Neurology</option>
                                            <option value="General Medicine">General Medicine</option>
                                            <option value="Pediatrics">Pediatrics</option>
                                            <option value="Oncology">Oncology</option>
                                            <option value="Endocrinology">Endocrinology</option>
                                            <option value="Immunology">Immunology</option>
                                            <option value="Nephrology">Nephrology</option>
                                            <option value="Obstetrics and Gynaecology">Obstetrics and Gynaecology</option>
                                            <option value="A&E">A&E</option>
                                          </select>
                                          <div class="validate"></div>
                                        </div>



                                      <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                                        <div class="validate"></div>
                                      </div>




                                    <div class="text-center"><button class="btn btn-success" type="submit">Make an Appointment</button></div>
                                  </form>


                          <div class="col-lg-4 text-center order-1 order-lg-2">
                              <img src="assets/img/Appointment.jpg" alt="" class="img-fluid">
                          </div>
                          </div>
                      </div>
                  </div>











                  <div class="tab-pane" id="tab-3">
                      <div class="row">
                          <div class="col-lg-8 details order-2 order-lg-1">
                              <h3>Current Medication Information.</h3>
                              <p class="font-italic">Stay up to date on your medications</p>
                              <p>
                                  Medication information goes here.
                              </p>
                              {{-- card template --}}

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Department</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($appointment as $user)
      <tr>
        <td>{{ $user->department}}</td>
        <td>{{ $user->date }}</td>

        <td>{{ $user->time }}</td>


      </tr>
      @endforeach
    </tbody>
  </table>
{{-- card template --}}
                          </div>
                 </div>


          </div>
        </div>

      </div>
    </section>


  </main><!-- End #main -->

  @endsection
