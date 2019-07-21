<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pyramid</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <script src="{{ secure_asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
        <script src="{{ secure_asset('js/main.js') }}"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
         <script src="{{ secure_asset('js/jquery-ui-touch-.min.js') }}"></script>

    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-logo">
                    <a href="{{ secure_url('/') }}">
                    <img src="{{ secure_asset('assets/images/logo.png') }}">
                    </a>
                </div>
                <ul class="menu-items">
                    <a href="{{ secure_url('/') }}" class="nav-home"><li>Home</li></a>
                    <a href="#" class="nav-about"><li>About Pyramid</li></a>
                    <a href="#"><li>How it Works</li></a>
                    <a href="#" class="nav-contact"><li>Contact</li></a>
                </ul>
                <div id="nav-icon3">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                 <img class="responsivex" src="{{ secure_asset('assets/images/responsivex.png') }}">
            </div>
        </div>
        <div class="header-responsive">
            <div class="container text-center">
                <ul>
                   <a href="{{ secure_url('/') }}" class="nav-home"><li>Home</li></a>
                    <a href="#" class="nav-about"><li>About</li></a>
                    <a href="#"><li>How it Works</li></a>
                    <a href="#" class="nav-contact"><li>Contact</li></a>               
                 </ul>
            </div>
        </div>
        @yield('front-page')
        <div class="footer">
            <div class="container text-center">
                <h1>footer links</h1>
            </div>
        </div>
    </body>
</html>
