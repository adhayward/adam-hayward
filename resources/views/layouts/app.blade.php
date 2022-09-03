<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adam Hayward | Software Developer</title>
 
        <link rel="icon" type="image/x-icon" href="{{ URL::to('img/logo.png')  }}">
        <link rel="stylesheet" href="{{ URL::to('css/app.css')  }}">
        <script src="{{ URL::to('js/app.js') }}"></script>
        @livewireStyles
    </head>
 
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <div style="background-image: url({{ URL::to('/img/bg.jpg') }})" class="bg-image"></div>
            <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand mx-auto border-bottom border-light" href="{{ URL::to('/') }}">
                        <span class="ah">Adam Hayward</span>
                        <img src="{{ URL::to('/img/logo.svg') }}" />
                        <span class="sd">Software Developer</span>
                    </a>
                </div>
            </nav>
            
            <nav class="navbar navbar-dark pt-0 mb-3 navbar-expand-lg ">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Projects
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ URL::to('projects/uniform') }}">Uniform Management System</a></li>
                                    <li><a class="dropdown-item" href="{{ URL::to('projects/booking') }}">Event Booking System</a></li>
                                    <li><a class="dropdown-item" href="{{ URL::to('projects/b2b') }}">B2B Storefront</a></li>
                                    <li><a class="dropdown-item" href="{{ URL::to('projects/order') }}">Order Management System</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ URL::to('projects/warehouse') }}">Warehouse Scanner App</a></li>
                                    <li><a class="dropdown-item" href="{{ URL::to('projects/survey') }}">Event Score/Survey</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item mx-lg-4">
                                <a class="nav-link" href="{{ URL::to('personal') }}">Personal</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer class="footer mt-auto py-1 bg-dark text-light">
            <div class="container">
                <span class="text-muted">
                    @include('common.icon', ['icon'=>'copyright']) Adam Hayward {{ date('Y') }} 
                </span>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>