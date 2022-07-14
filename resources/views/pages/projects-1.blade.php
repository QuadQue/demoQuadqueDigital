@extends('layout.master')
@section('title', 'Project - Quadque Digital')
@section( 'content')

    <!-- page header - start -->
    <div class="page-header position-relative">
        <div class="page-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="heading heading-very-large dark-1">
                            Projects
                        </h1>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="paragraph dark-1">
                            <p>Our team helps companies develop their ideas into cutting-edge products that will cause customers to love and enjoy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page header - end -->

    <!-- projects - start -->
        @include('partials.projects')
    <!-- projects - end -->

    <!-- testimonial section - start -->
         @include('partials.testimonials')
    <!-- testimonial section - end -->

    <!-- cta - start -->
    <div class="cta">
        <div class="cta-wrapper position-relative bg-main">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-md-6">
                        <h3 class="heading heading-large dark-1">
                            Have an idea?<br>Let’s get it done right!
                        </h3>
                    </div>
                    <div class="col-md-6 d-md-inline-flex justify-content-md-end">
                        <div class="button-wrapper">
                            <a class="button button-2" href="contact.html">
                                Let's Work Together
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          {{--   <div class="artwork artwork-4">
                  <img src="{{ asset('assets/images/art_2.svg') }}" width="582" height="669" alt="artwork-2">
            </div> --}}
        </div>
    </div>
    <!-- cta - end -->

@endsection