@extends('layouts.main')
@include('layouts.nav')
@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
          <a href="https://youtu.be/haqVARhMlpY" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>"Medic+ GH is transforming healthcare in St. lucia"</h3>
          <p>
              Medic+ GH accommodates more than 50 thousand patients annually, including close to 5,000
              infant deliveries and more than 20,000 emergency department visits. The facility started as a
              health clinic with 5 beds, which rendered voluntary service, and turned out to be a public health
              facility by the St. Lucian government in the year 2000. The hospital was upgraded from a 5 bed
              capacity to 120 beds along with 8 additional beds in the Intensive Care Unit.
          </p>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-target-lock"></i></div>
            <h4 class="title"><a href="">Our Mission</a></h4>
            <p class="description">The mission of Medic+ GH is to improve the health of the St. Lucian community and the Caribbean by setting the standard of excellence in medicine and clinical care.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-plus-medical"></i></div>
            <h4 class="title"><a href="">Our Vision</a></h4>
            <p class="description">Medic+ GH pushes the boundaries of discovery and transforms health care using medical technology whilst offering cost effective care, creating hope for the nation.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-heart"></i></div>
            <h4 class="title"><a href="">Our Core Values</a></h4>
            <p class="description">Excellence, Leadership & Integrity, Diversity & Inclusion, Respect & Teamwork, Compassion</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  @endsection
