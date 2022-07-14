<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @stack('styles')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/logo/favicon.ico')}}">
    <!-- page css -->
    <link href="{{asset('admin/assets/vendors/apexcharts/dist/apexcharts.css')}}" rel="stylesheet">
    <!-- Core css -->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet">


</head>

<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <div class="header-text-dark header-nav layout-vertical">
                <div class="header-nav-wrap">
                    <div class="header-nav-left">
                        <div class="header-nav-item desktop-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                        <div class="header-nav-item mobile-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-right">
                        <div class="header-nav-item">
                            <div class="header-nav-item-select">
                                <div class="toggle-wrapper" data-bs-toggle="modal" data-bs-target="#quick-view">
                                    <i class="nav-icon feather icon-settings"></i>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav vertical-menu nav-menu-light scrollable">
                <div class="nav-logo">
                    <div class="w-100 logo">
                        <img class="img-fluid" src="{{asset('assets/images/quadque_digital_final_logo_v1.0_1_300x80.png')}}" style="max-height: 50px;" alt="logo">
                    </div>
                    <div class="mobile-close">
                        <i class="icon-arrow-left feather"></i>
                    </div>
                 </div>
                 <ul class="nav-menu">
                    <li class="nav-menu-item router-link-active">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="feather icon-home"></i>
                            <span class="nav-menu-item-title">Admin Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-menu-item router-link-active">
                        <a href="{{route('homepage')}}">
                            <i class="feather icon-home"></i>
                            <span class="nav-menu-item-title">Home Page</span>
                        </a>
                    </li>
                   
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-box"></i>
                            <span>Page</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                                
                        
                                <li class="nav-menu-item">
                                    <a href="{{route('admin.tag')}}">
                                     <i class="feather icon-layout"></i>
                                        <span class="nav-menu-item-title">Tag</span>
                                    </a>
                                </li>
                                <li class="nav-menu-item">
                                    <a href="{{route('admin.category')}}">
                                        <i class="feather icon-layout"></i>
                                        <span class="nav-menu-item-title">Category</span>
                                    </a>
                                </li>
                                <li class="nav-menu-item">
                                    <a href="{{route('admin.blog')}}">
                                        <i class="feather icon-layout"></i>
                                        <span class="nav-menu-item-title">Blog</span>
                                    </a>
                                </li>
                        </ul>
                    </li>
                     <li class="nav-menu-item router-link-active">
                        <a href="{{ url('/admin/logout') }}">
                            <i class="feather icon-log-out"></i>
                            <span class="nav-menu-item-title">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content">
                <div class="main">
                    @yield('content')
                  
                </div>
                <!-- Footer START -->
                <div class="footer">
                    <div class="footer-content">
                        <p class="mb-0">Copyright © 2022 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray me-3">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content END -->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog right">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title pull-left">Quick View</h4>
                            <button type="button" class="close pull-right" data-bs-dismiss="modal">
                                <span>×</span>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="{{asset('admin/assets/js/vendors.min.js')}}"></script>
    <!-- page js -->

    <!-- Core JS -->
    <script src="{{asset('admin/assets/js/app.min.js')}}"></script>

</body>

</html>