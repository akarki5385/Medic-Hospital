<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>


  </head>
  <body>
    @include('layouts.topbar')


    @yield('content')


    @include('layouts.footer')



    <!--Start of Tawk.to Script-->


  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">


  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

  <script src="{{ asset('js/app.js') }}" defer></script>

  <link href="{{ asset('css/my.css') }}" rel="stylesheet" type="text/css">

  <script src="{{ asset('js/my.js') }}" defer></script>








    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt" ></i></a>

    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5fae0d827279c47e5dcf6f91/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>

</body>

</html>
