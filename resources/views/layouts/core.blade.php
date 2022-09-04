<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adam Hayward | Software Developer {{ ($title??false) ? (' | '.$title) : '' }}</title>
 
        <link rel="icon" type="image/x-icon" href="{{ URL::to('img/logo.png')  }}">
        <link rel="stylesheet" href="{{ URL::to('css/app.css')  }}">
        <script src="{{ URL::to('js/app.js') }}"></script>
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