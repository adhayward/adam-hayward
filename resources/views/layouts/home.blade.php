@extends('layouts.core', ['title'=>$title ?? null])
@section('body')
    <main class="d-flex flex-column flex-grow-1">
        <nav class="navbar navbar-dark navbar-expand-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        
        <nav class="navbar navbar-dark pt-0 mb-3 navbar-expand-sm ">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-sm-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('personal') }}">About Me</a>
                        </li>

                        <li class="nav-item dropdown mx-sm-4">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                My Projects
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ URL::to('projects/uniform') }}">Uniform Management System</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('projects/booking') }}">Event Booking System</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('projects/b2b') }}">B2B Storefront</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('projects/order') }}">Order Management System</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ URL::to('projects/warehouse') }}">Warehouse Scanner App</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('projects/survey') }}">Event Scoreboard/Survey</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="container flex-grow-1 d-flex flex-column justify-content-center">
            @yield('content')
        </div>
    </main>
@endsection('content')