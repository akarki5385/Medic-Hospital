


@extends('layouts.patient')
@section('content')

<section id="appointment" class="appointment section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Make an Appointment mr {{ $user->name}}</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form action="{{ route('userappointment.store') }}" method="post" role="form" class="php-email-form">
        @csrf
        <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Your Name" data-rule="minlen:20" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>

            <div class="col-md-4 form-group">
              <input type="last_name" class="form-control" name="last_name" id="last_name" placeholder="Last Name" data-rule="minlen:20" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>




          <div class="form-row">
              <div class="col-md-4 form-group">
                <input type="phone_number" name="name" class="form-control" id="phone_number" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter at least 10 chars">
                <div class="validate"></div>
              </div>

              <div class="col-md-4 form-group">
                <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="time" data-msg="Please enter a valid time">
                <div class="validate"></div>
              </div>

              <div class="form-row">
                <div class="col-md-4 form-group">
                  <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate">

                  </div>
                </div>
              {{-- <div class="col-md-4 form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div> --}}
            </div>





            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">

            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>




        <div class="text-center"><button class="btn btn-success" type="submit">Make an Appointment</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->


@endsection
