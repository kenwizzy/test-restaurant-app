<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title> E-Commerce </title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/notiflix@3.0.0/dist/notiflix-aio-3.0.0.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #006400;">
        <div class="container">
          <a class="navbar-brand" href="{{route('/')}}">RoboEat</a>
          <button class="navbar-toggler collapsed navbar-brand" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100">
              <li class="nav-item">
                <a class="nav-link {{Route::currentRouteNamed('/')? 'active': ''}}" aria-current="page" href="{{route('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Route::currentRouteNamed('/aboutus')? 'active': ''}}" href="{{route('/aboutus')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Route::currentRouteNamed('/contactus')? 'active': ''}}" href="{{route('/contactus')}}">Contact Us</a>
              </li>
              <li class="nav-item call">
                <a class="nav-link phone" href="#"><i class="fa fa-phone"></i>Call To Place Order</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="container col-lg-12">
        <img src="./images/restaurant-banner.jpg" width="100%" height="40%" class="img-responsive">
      </section><br>
