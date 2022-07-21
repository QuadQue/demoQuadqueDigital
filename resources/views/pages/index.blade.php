@extends('layout.master')
@section('title', 'Home - Quadque Digital')
@section('content')
<!-- video section - start -->
<div class="video-section top-section position-relative">
    <div class="top-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="heading heading-very-large dark-1">
                        Your ideas realized for the real world.
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="video-container">
        <video muted="" autoplay="" playsinline="" preload="auto" id="ec7cb14">
            <source src="https://www.gfxpartner.com/video/video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="artwork artwork-1">
        <img src="{{ asset('assets/images/art_1.svg') }}"  alt="artwork">

    </div>
</div>
<!-- video section - end -->

<!-- text about section - start -->
<div class="text-about-section">
    <div class="text-about-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="heading heading-very-large dark-1">
                        We’re chilled and a laidback agency.
                    </h1>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="content-heading heading heading-small light-2">
                            SKILLS
                        </h4>
                        <div class="text-list text-list-large dark-1">
                            <ul>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>Strategy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>Brand Identities</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>Print Design</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>UI/UX Design</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>Art Direction</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>Back End</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>Admin System</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="service-detailed.html">
                                        <span>Front End</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 content-second-column">
                        <h4 class="content-heading heading heading-small light-2">
                            HISTORY
                        </h4>
                        <div class="paragraph dark-1">
                            <p>We help transform your ideas into real world applications that will outperform your toughest competition and help you achieve your strategic goals in short period of time.</p>
                            <p style="height: auto;">&nbsp;</p>
                            <p>We have been creating award-winning brands, websites, digital products, mobile apps and custom software since 2009.</p>
                        </div>
                        <a class="button" href="{{ route('about') }}">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- text about section - end -->

@include('partials.projects')
@include('partials.testimonials')
@include('partials.clients')







@endsection
