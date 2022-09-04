<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adam Hayward | Software Developer {{ ($title??false) ? (' | '.$title) : '' }}</title>
 
        <link rel="icon" type="image/x-icon" href="{{ URL::to('img/logo.png')  }}">
        <link rel="stylesheet" href="{{ URL::to('css/app.css')  }}">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/99a68ae818.js" crossorigin="anonymous"></script>
        @livewireStyles
    </head>
 
    <body class="d-flex flex-column">        
        @yield('body')
        <footer class="footer mt-auto py-1 bg-dark text-light">
            <div class="container-fluid">
                <small class="text-muted">
                    @include('common.icon', ['icon'=>'copyright']) Adam Hayward {{ date('Y') }} 
                </small>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>