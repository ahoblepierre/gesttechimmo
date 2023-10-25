<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/notechhtml/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 19:19:43 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GestImmo Tech | {{$title??''}}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="client/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="client/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="client/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="client/images/favicons/site.html" />
    <meta name="description" content="Notech HTML Template For It Solution" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{asset('client/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/notech-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendors/notech-two-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('client/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('client/css/notech.css')}}" />
    <link rel="stylesheet" href="{{asset('client/css/notech-responsive.css')}}" />


    <!-- modes css -->
    <link rel="stylesheet" id="jssMode" href="{{asset('client/css/notech-light.css')}}">


    <!-- toolbar css -->
    <link rel="stylesheet" href="{{asset('client/vendors/toolbar/css/toolbar.css')}}">


</head>

<body>


    <!-- style switcher -->
    {{-- <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Layout Options</h3>
        <div class="layout-feature" id="colorMode">
            <a href="#" class="dark-switcher" data-theme="notech-dark">Dark</a>
            <a href="#" class="light-switcher" data-theme="notech-light">Light</a>
            <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
        </div><!-- /.language-feature -->
    </div> --}}
    <!-- end style switcher -->


    <div class="preloader">
        <img class="preloader__image" width="60" src="client/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">


        @include("client.layout.menu")

        @yield('contenu')




       @include("client.layout.footer")


    </div>
    <!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="client/images/resources/footer-logo.png"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@notech.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">cherche ici</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Cherche ici ..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('client/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('client/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('client/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('client/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('client/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('client/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('client/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('client/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('client/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('client/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('client/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('client/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('client/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('client/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('client/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('client/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('client/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('client/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('client/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('client/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('client/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('client/vendors/timepicker/timePicker.js')}}"></script>




    <!-- template js -->
    <script src="{{asset('client/js/notech.js')}}"></script>


    <!-- toolbar js -->
    <script src="{{asset('client/vendors/toolbar/js/js.cookie.min.js')}}"></script>
    <script src="{{asset('client/vendors/toolbar/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('client/vendors/toolbar/js/toolbar.js')}}"></script>


</body>


<!-- Mirrored from layerdrops.com/notechhtml/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 19:22:12 GMT -->
</html>