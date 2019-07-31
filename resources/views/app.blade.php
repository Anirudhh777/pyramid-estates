<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pyramid</title>
        <script src="https://use.fontawesome.com/79c46acb7c.js"></script>
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
         <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GMAPS_KEY') }}&libraries=places"></script>
         <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                    <a href="{{ secure_url('/about') }}"><li>About Pyramid</li></a>
                    <a href="{{ secure_url('/how-it-works') }}"><li>How it Works</li></a>
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
                   <a href="{{ secure_url('/about') }}"><li>About Pyramid</li></a>
                    <a href="{{ secure_url('/how-it-works') }}"><li>How it Works</li></a>
                    <a href="#" class="nav-contact"><li>Contact</li></a>               
                 </ul>
            </div>
        </div>
        @yield('front-page')
        <div class="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <p>022 26051514 / 26482670</p>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <p>Palatial Apartments, 21st Road 
                            <br>
                            Bandra(W), Mumbai - 400050
                        </p>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <p>support@pyramidestates.in</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
        <script>
            var onSubmit = function(response) {
                 document.getElementById("gcaptcha").value = response;
                 document.getElementById("buyform").submit();
               }

               var onSubmitSell = function(response) {
                 document.getElementById("gcaptcha").value = response;
                 document.getElementById("sellform").submit();
               }
        </script>
        <script type="text/javascript">
            function stopEnterKey(evt) {
                var evt = (evt) ? evt : ((event) ? event : null);
                var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
                if ((evt.keyCode == 13) && (node.type == "text")) { return false; }
            }
            document.onkeypress = stopEnterKey;
        </script>
    </footer>
</html>
