<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/QUADQUE_DIGITAL_FINAL_LOGO.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/QUADQUE_DIGITAL_FINAL_LOGO.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.webmanifest') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/OverlayScrollbars.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
     <style>
         .logo{
         margin-top:5px;
         margin-left:5px;
         }

        .logo img, .footer--logo img, .preloader img{
                height: 50px !important;
                width:200px !important;

        }
        .navigation-menu{
            top: -20px !important;
        }
       .fa-facebook:hover{
           color:#1096F5;
       }
       .fa-twitter:hover{
           color:#1DA1F2;
       }
       
       .fa-linkedin:hover{
           color:#0077B5;
       }
       .fa-instagram:hover{
           color:#B930AF;
       }
       
      .testimonial-image{
          margin-right:60px;
      }
     .artwork-2 {
        bottom: -14.5rem !important;
       
     }
    .single-image img{
    height:1000px;
    }

    .testimonial-slide .testimonial-content div {
    color: #000;
    font-size: 16px !important;
    font-weight: 500 !important;
    line-height: 30px !important;

    }

    .client-slider .client-slide img {
    opacity: 1;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    }
    .button {
        color:#fff;
    }
    .button:hover{
        color:#fff;
    }

    .button-1:hover{
        color:#000;
    }

      
    .artwork img{

         width:500px;
         height:500px;
    }
       
    </style>
    
    @stack('styles')

</head>
<body>



    <!-- preloader - start -->
    <div class="preloader">
        <div id="pulse-wrapper">
            <div id="pulse">
                <span></span>
                <span></span>
            </div>
        </div>
        <img src="{{ asset('assets/images/quadque_digital_final_logo_v1.0_1_300x80.png') }}" alt="slope-logo">

    </div>
    <!-- preloader - end -->
    <div class="container-fluid">

            @include('partials.nav')

            @yield('content')

            @include('partials.footer')


    </div>




    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
