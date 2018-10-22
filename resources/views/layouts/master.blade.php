<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin | Dewita </title>
    <link rel="icon" href="{{asset('images/logo.jpeg')}}">
    <link href=" {{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href=" {{asset('vendors/font-awesome/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet">
    <link href=" {{asset('build/css/custom.min.css')}} " rel="stylesheet">
    @yield('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('layouts.navigation')
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
      </div>
      
    </div>
    <script src=" {{asset('vendors/jquery/dist/jquery.min.js')}} "></script>
    <script src=" {{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}} "></script>
    <script src=" {{asset('build/js/custom.min.js')}} "></script>
    <script src="js/sweetalert.min.js"></script>
    @include('sweet::alert')
    @yield('js')
  </body>
</html>
