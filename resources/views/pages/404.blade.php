@extends('layout.master')
@section('title', '404')
    @section('content')
    <!-- 404 - start -->
    <div class="not-found">
        <div class="illustration">
            <img src="{{ asset('assets/images/404.png') }}" alt="404">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="not-found-content">
                        <h1 class="heading heading-very-large dark-1">
                            Oops!
                        </h1>
                        <h2 class="heading heading-large dark-1">
                            We can’t seem to find the page you’re looking for.
                        </h2>
                        <h3 class="heading heading-medium"> 
                            Error Code: 404
                            <br>
                            Here are some helpful links instead:
                        </h3>
                        <div class="navigation-menu-menu">
                            <div class="navigation-menu-menu--wrapper">
                                <ul id="menu-main-menu-1" class="menu">
                                    <li class="menu-item">
                                        <a href="{{ url('/') }}">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/about') }}">

                                            <span>Pages</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/services-1') }}">

                                            <span>Services</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/projects-1') }}">

                                            <span>Projects</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/blog-grid') }}">

                                            <span>Blog</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="navigation-menu-social">
                            <h6>FOLLOW</h6>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/gfx.partner">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/gfxpartner">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/gfxpartner">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.behance.net/gfxpartner">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 - end -->

    @endsection
