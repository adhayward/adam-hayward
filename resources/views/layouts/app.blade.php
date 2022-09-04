@extends('layouts.core', ['title'=>$title ?? null])
@section('body')
        <main class="flex-shrink-0">
            <nav class="navbar navbar-dark navbar-expand-sm">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand mx-auto border-bottom border-light" href="{{ URL::to('/') }}">
                        <span class="ah d-none d-sm-inline">Adam Hayward</span>
                        <img src="{{ URL::to('/img/logo.svg') }}" />
                        <span class="sd d-none w-100 w-md-auto d-md-inline">Software Developer</span>
                    </a>
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
        
            @if (isset($title)) 
                <div class="container">
                    <div class="card mb-4">   
                        @if ($title)                      
                            <div class="card-header border-0 pb-0">
                                <h4 class="mb-0 border-bottom border-light">{{$title}}</h4>
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            @else
                <div class="container">
                    @yield('content')
                </div>
            @endif
        </main>
        
@endsection('content')