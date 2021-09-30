<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Domain Brand</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon
         ============================================ -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
      <!-- master CSS
         ============================================ -->
      <link rel="stylesheet" href="{{asset('master.css')}}">
      <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
      <!-- Color Css Files Start -->
      <link rel="stylesheet" type="text/css" href="{{asset('table-vendor/bootstrap/css/bootstrap.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('fonts/table-fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('table-vendor/animate/animate.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('table-vendor/select2/select2.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('table-vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/table-util.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/table-main.css')}}">
   </head>
   <body>
     <header>
        <!-- Start main menu area -->
        <div class="main-menu-area" id="sticker">
           <div class="container">
              <div class="row">
                 <div class="col-sm-3 col-xs-12">
                    <div class="logo">
                       <a href="index.html">
                       <img src="img/logo.png" alt="" style="height: 90px;">
                       </a>
                    </div>
                 </div>
                 <div class="col-sm-9 col-xs-12">
                    <div class="main-menu">
                       <nav>
                         <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="add-coin">Add coin</a></li>
                            <li><a href="promote">Promote</a></li>
                            <li><a href="newsletter">Newsletter</a></li>
                            <li><a href="dyor">DYOR</a></li>
                         </ul>
                       </nav>
                    </div>
                    <div class="donate-button ptb-32">
                       <a class="waves-effect waves-light" href="register">Login / Sign up</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- End main menu area -->
        <!-- Start mobile menu -->
        <div class="mobile-menu-area">
           <div class="container">
              <div class="row">
                 <div class="mobile-menu">
                    <nav id="dropdown">
                       <ul class="nav">
                          <li><a class="home" href="#">Home</a></li>
                          <li><a href="about.html">Add Coin</a></li>
                          <li><a href="#">Promote</a></li>
                          <li><a href="#">DYOR</a></li>
                       </ul>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
        <!-- End mobile menu -->
     </header>

     @yield('content')

      <!-- End footer -->
      </div>
      <!-- End main area -->
      <!-- Color Switcher -->
      <!-- Color Switcher end -->
      <!-- jquery-1.12.0.min js
         ============================================ -->
      <script src="js/vendor/jquery-1.12.0.min.js"></script>
      <!-- bootstrap js
         ============================================ -->
      <script src="js/bootstrap.min.js"></script>
      <!-- owl.carousel.min js
         ============================================ -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- jquery.nivo.slider.pack js
         ============================================ -->
      <script src="js/jquery.nivo.slider.pack.js"></script>
      <!-- jquery.mixitup.min js
         ============================================ -->
      <script src="js/jquery.mixitup.min.js"></script>
      <!-- jquery.magnific-popup.min js
         ============================================ -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- jquery.meanmenu js
         ============================================ -->
      <script src="js/jquery.meanmenu.js"></script>
      <!-- jquery.syotimer.min js
         ============================================ -->
      <script src="js/jquery.syotimer.min.js"></script>
      <!-- wow js
         ============================================ -->
      <script src="js/wow.js"></script>
      <!-- jquery.scrollUp.min js
         ============================================ -->
      <script src="js/jquery.scrollUp.min.js"></script>
      <!-- jquery.ajaxchimp.min js
         ============================================ -->
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <!-- plugins js
         ============================================ -->
      <script src="js/plugins.js"></script>
      <script>
         new WOW().init();
      </script>
      <!-- styleswitch js
         ============================================ -->
      <script src="js/styleswitch.js  "></script>
      <script src="js/button.js  "></script>
      <!-- main js
         ============================================ -->
      <script src="js/main.js"></script>
      <script src="js/table-main.js"></script>
      <!--===============================================================================================-->
      <script src="table-vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="table-vendor/bootstrap/js/popper.js"></script>
      <script src="table-vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="table-vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
   </body>
</html>
