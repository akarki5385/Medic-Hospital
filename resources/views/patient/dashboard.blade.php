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

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
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
                    <a href="{{ route('userappointment.create',$user->id)}}" class="btn btn-primary">Book Appointment</a>

                      {{-- <a class="nav-link" data-toggle="tab" href="#tab-2">Appointments</a> --}}
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tab-3">Medications</a>
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
                  <div class="tab-pane" id="tab-2">
                      <div class="row">
                          <div class="col-lg-8 details order-2 order-lg-1">
                              <h3>Appointments.</h3>
                              <p class="font-italic">Review or book an appointment</p>
                              <p>
                                  Graphical calendar goes here.

								  Calendar drop down goes here.
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
