{{-- @extends('layouts.app')
@section('content')

<a href="{{ route('userappointment.create',$user->id)}}" class="btn btn-primary">Book Appointment</a>

@endsection --}}



<!DOCTYPE html>
<html lang="en">

@include('include.app')


<body>

    @include('include.topbar')
    @include('include.nav')

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">



        <div class="col-sm-12">
            @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div>
            @endif
          </div>

          @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>



        </ul>
    </div>
@endif
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


<div class="section-title">
          <h2>Patient Portal</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                  <li class="nav-item">
                      <a class="nav-link active show" data-toggle="tab" href="#tab-1">Profile</a>
                  </li>
                  <li class="nav-item">


                      <a class="nav-link" data-toggle="tab" href="#tab-2">Book Appointment</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tab-3">Medications</a>
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
                              <p>
                                  Patient registration details goes here.
                              </p>
                          </div>
                          <div class="col-lg-4 text-center order-1 order-lg-2">
                              <img src="assets/img/Heart.jpg" alt="" class="img-fluid">
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
                  <div class="tab-pane" id="tab-2">
                      <div class="row">
                          <div class="col-lg-8 details order-2 order-lg-1">
                              <h3>Make Appointments {{ Auth::user()->name }}.</h3>
                              <p class="font-italic">Book an appointment</p>

                              <p>

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
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number" >
                                            <div class="validate"></div>
                                          </div>

                                          <div class="col-md-4 form-group">
                                            <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="time" data-msg="Please enter a valid time">
                                            <div class="validate"></div>
                                          </div>

                                          <div class="form-row">
                                            <div class="col-md-10 form-group">
                                              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Date" data-rule="minlen:8" data-msg="Please enter at least 4 chars">
                                              <div class="validate">

                                              </div>
                                            </div>
                                          {{-- <div class="col-md-4 form-group">
                                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validate"></div>
                                          </div> --}}
                                        </div>




                                        {{-- <div class="col-md-4 form-group">
                                          <select name="department" id="department" class="form-control">
                                            <option value="">Select Department</option>
                                            <option value="Department 1">Department 1</option>
                                            <option value="Department 2">Department 2</option>
                                            <option value="Department 3">Department 3</option>
                                          </select>
                                          <div class="validate"></div>
                                        </div> --}}
                                        <div class="col-md-4 form-group" name="department">
                                            <input type="string" name="department" class="form-control" id="department" placeholder="Department" data-rule="minlen:10" data-msg="Please enter at least 10 chars">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                                        <div class="validate"></div>
                                      </div>




                                    <div class="text-center"><button class="btn btn-success" type="submit">Make an Appointment</button></div>
                                  </form>
                            </p>
                          </div>
                          <div class="col-lg-4 text-center order-1 order-lg-2">
                              <img src="assets/img/Appointment.jpg" alt="" class="img-fluid">
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
                          </div>
                 </div>


          </div>
        </div>

      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')


</body>

</html>
