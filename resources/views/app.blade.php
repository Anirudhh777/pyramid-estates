<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="{{ secure_asset('assets/images/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ secure_asset('assets/images/favicon-16x16.png') }}" sizes="16x16" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pyramid</title>
        <meta name="description" content="Pyramid Estates is a real estate division of Gorwani Builders, which has experience of developing more than 1.5 lakh square feet across Mumbai.">
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
         <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
         <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145444633-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-145444633-1');
        </script>
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
                        <p>
                            <i class="fa fa-phone"></i><br>
                            <a href="#" class="phoneone">022 26051514</a> / <a href="#" class="phonetwo">022 26482670</a> 
                        </p>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <p> 
                            <i class="fa fa-address-card"></i><br>
                            <a href="https://goo.gl/maps/9RiuWNpcw1XkoUUe6" target="_blank">
                                Palatial Apartments, 21st Road 
                                <br>
                                Bandra(W), Mumbai - 400050
                            </a>
                        </p>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <p> 
                             <i class="fa fa-envelope"></i><br>
                            <a href="mailto:support@pyramidestates.in">support@pyramidestates.in</a>
                        </p>
                    </div>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/pyramidestates.in" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/pyramidestates.in" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/pyramidestates/" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
      
        <div class="copyright">
            <div class="container text-center ">
                 <p><i class="fa fa-copyright"></i> Copyright <a href="https://www.brimstonecreative.com" target="_blank">www.brimstonecreative.com</a></p>
            </div>
        </div>
    </body>
    <footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
        <script>
            // var onSubmit = function(response) {
            //      document.getElementById("gcaptcha").value = response;
            //      document.getElementById("buyform").submit();
            //    }

            //    var onSubmitSell = function(response) {
            //      document.getElementById("gcaptcha").value = response;
            //      document.getElementById("sellform").submit();
            //    }
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
