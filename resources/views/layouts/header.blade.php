<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href={{ asset('img/favicon.ico') }} rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href={{ asset('lib/flaticon/font/flaticon.css') }} rel="stylesheet">





    <link href={{ asset('lib/animate/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/volunteer.css') }}" rel="stylesheet">
    <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->

    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark nav-sticky ">
        <div class="container-fluid ">
            <a href="#" class="navbar-brand nav-sticky">Helpz </a>
            <button type="button" class="navbar-toggler nav-sticky" data-toggle="collapse" data-target="#home">
                <span class="navbar-toggler-icon nav-sticky"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between nav-sticky" id="navbarCollapse">
                <div class="navbar-nav ml-auto nav-sticky">
                    <a href="{{ url('/') }}" class="nav-item nav-link active nav-sticky">Home</a>
                    <a href="#off" class="nav-item nav-link nav-sticky">Our Offerings</a>
                    <a href="#ach" class="nav-item nav-link nav-sticky">Our Achievements</a>
                    <a href="#about" class="nav-item nav-link nav-sticky">About</a>
                    <a href="#contact" class="nav-item nav-link nav-sticky">Contact</a>
                    <div class="navbar-nav ml-5">
                        @if (Auth::check())
                            <a href="{{ route("profile.edit") }}" class="nav-item nav-link nav-sticky">{{ Auth::user()->name }}</a>
                            <form method="POST" class="nav-item nav-link nav-sticky" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"
                                    onclick="event.preventDefault();
                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="/login" class="nav-item nav-link nav-sticky">Login</a>
                            <a href="/register" class="nav-item nav-link nav-sticky">Regester</a>
                        @endif
                    </div>




                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
