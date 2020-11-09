<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <!-- Uncomment below if you prefer to use an image logo --> --}}
      <a href="{{ url('/') }}" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#departments">Departments</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li class="drop-down"><a href="">More</a>
           <ul>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Gallery</a></li>

                </ul>
                 </li>
          <li><a href="#contact">Contact</a></li>

            @if (Route::has('login'))
            <li>
                    @auth
                        <a href="{{ url('/patient_dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
          </li>
                    <li>    @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    </li>
            @endif</li>


        </ul>
      </nav><!-- .nav-menu -->

      {{-- <a href="/patient_dashboard" class="appointment-btn scrollto">Patient Login</a> --}}


    </div>
  </header><!-- End Header -->
