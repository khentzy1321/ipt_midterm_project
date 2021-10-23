<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('.\css\style.css')}}">  
    </head>
    <body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">

   
    <a class="navbar-brand text-white font" href="#">IPT Midterm Project</a>

    <div class="collapse navbar-collapse d-flex align-items-center justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{url('/users')}}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{url('/accounts')}}">Accounts</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>


<div class="container d-flex align-items-center justify-content-center">
@yield('content')
</div>
    </body>
</html>
