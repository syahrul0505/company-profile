<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from corporx.themetags.com/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 15:57:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Corporx - Corporate and Business HTML Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--preloader end-->
    <!--header section start-->
    
    @include('layouts.navbar')

    <!--header section end-->

    
    @yield('content')

    <!--footer section start-->
  
    @include('layouts.footer')
    
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    @include('layouts.foot')
    
    <!--endbuild-->
</body>

</html>