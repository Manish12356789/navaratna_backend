<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"
    />
    <link rel="shortcut icon" href="{{asset('user/images/fav_icon.png')}}" type="image/x-icon">  
    <title>Navaratna Ayur | @yield('title')</title>
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="./assets/css/bootstrap.min.css"
    /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="./assets/css/aos.css" />

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('user/css/services.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/main.css')}}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('user/css/header.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/gallery.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/contact.css')}}" /> --}}

    <!-- <link rel="stylesheet" type="text/css" href="./assets/vendor/owl-carousel/owl.carousel.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="./assets/vendor/owl-carousel/owl.theme.css" /> -->

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- <link rel="stylesheet" type="text/css" href="./assets/fonts/css/all.css" /> -->
  </head>
  <body>
    <div class="wrapper container-fuild">
        @include('layouts.header')
            @yield('content')
        @include('layouts.footer')
    </div>

    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <!-- <script src="./assets/vendor/owl-carousel/owl.carousel.min.js"></script> -->
    <!-- <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="{{asset('user/js/jquery.slimmenu.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>
    <!-- owl.carousel -->

    <script src="{{asset('user/js/aos.js')}}"></script>
  </body>
</html>
