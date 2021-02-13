<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Sweetalert2 -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{('/')}}">Clean Blog</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/support') }}">Contact</a>
                    </li>
                    @if (Route::has('login'))
                    <li class="nav-item">
                        @auth
                            <a href="{{ url('/all_post') }}" class="nav-link">Dashboard</a>
                            <!-- Admin 
                            <a >{{ Auth::user()->name }}</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();  this.closest('form').submit();">{{ __('Logout') }} </a>
                            </form>
                            -->
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>    
                        @endif
                        @endauth
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
