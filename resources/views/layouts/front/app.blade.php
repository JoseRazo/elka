<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Elka.services | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta_site')
   
    <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-png" />
    <meta name="author" content="José Razo Prieto">
    <meta name="Language" content="es_ES" />
    <meta name="copyright" content="Elka.services" />
    <meta name="distribution" content="global" />
    <meta name="geo.region" content="MX-GUA" />
    <meta name="geo.placename" content="Silao, Silao de la Victoria, México" />
    <meta name="geo.position" content="20.943727;-101.427043" />
    <meta name="ICBM" content="20.943727, -101.427043" />
    <meta itemprop="latitude" content="20.943727" />
    <meta itemprop="longitude" content="-101.427043" />
    <meta name="revisit" content="4 days" />
    <meta name="revisit-after" content="4 days" />
    <meta name="Robots" content="all" />
    <meta name="robots" content="index, follow, archive" />
    @yield('meta_og')
    
    <!-- CSS
  ================================================== -->
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/revo-slider/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/revo-slider/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/revo-slider/css/navigation.css') }}">
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset('/plugins/lightbox2/dist/css/lightbox.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/slick-carousel/slick/slick-theme.css') }}">
     <!-- toastr notifications Stylesheet -->
    <link href="{{ asset('plugins/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body id="body">
    @include('layouts.front.preloader')
    @include('layouts.front.header')
    @yield('content')
    @include('layouts.front.footer')

    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
    <!-- slick Carousel -->
    <script src="{{ asset('/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Portfolio Filtering -->
    <script src="{{ asset('/plugins/mixitup/dist/mixitup.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ asset('/plugins/smooth-scroll/dist/js/smooth-scroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/plugins/revo-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/plugins/revo-slider/js/jquery.themepunch.revolution.min.js') }}">
    </script>
    <!-- toastr notifications js -->
    <script src="{{ asset('plugins/toastr/js/toastr.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('/js/script.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
    (Load Extensions only on Local File Systems ! 
    The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/plugins/revo-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script>
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function() {

        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({

            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',

            /* basic navigation arrows and bullets */
            navigation: {

                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: false,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{title}</span>'
                }
            }
        });
    });
    </script>

    @yield('scripts')
</body>

</html>