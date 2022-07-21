@extends('layout.master')
@section('title', 'About - Quadque Digital')
@push('styles')
        <style>
            .text-image-image .icon {
                    position: absolute;
                    bottom: 0;
                    padding:0!important;
    
            }
            .team-content{
                margin-top:200px
            }

        </style>
@endpush
@section('content')

    <!-- page header - start -->
    <div class="page-header position-relative">
        <div class="page-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="heading heading-very-large dark-1">
                            About us
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
        <div class="page-header-bottom">
            <div class="single-image">
                <img src="{{ asset('assets/images/employee_images/280100009_430853565708382_284535374749364603_n.jpg') }}" alt="about-header">

            </div>
        </div>
        <div class="artwork artwork-3">
            <img src="{{asset('assets/images/art_1.svg')}}"  alt="artwork">
        </div>
    </div>
    <!-- page header - end -->

    <!-- about text section - start -->
    <div class="about-text-section">
        <div class="about-text-section-wrapper bg-black text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text-section-inner" style="padding-top: 10px;">
                            <img src="{{ asset('assets/images/QUADQUE.png') }}" alt="about-logo" style="width:80px; height:73px">
                            <h2 class="heading heading-large light-1">
                                To deliver our expertise flexibly and with maximum impact, we have developed three different ways of working. Each is adaptable to your core needs, processes and culture of your business.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about text section - end -->

    <!-- text image - start -->
    <div class="text-image">
        <div class="text-image-wrapper">
            <div class="text-image-content">
                <div class="text-image-content-inner">
                    <h3 class="heading heading-large dark-1">
                        Rethink
                    </h3>
                    <div class="paragraph dark-1">
                        <p>Over meat there under upon fish darkness void beast the above his greater deep don't midst don't good. Kind deep female signs said darkness seas very gathering isn't multiply fruitful.</p>
                        <p style="height: auto;">&nbsp;</p>
                        <p>Light fourth one female the stars from make saw years you'll light in them fourth likeness fruitful said herb creeping hath in.</p>
                    </div>
                </div>
            </div>
            <div class="text-image-image">
                <img src="assets/images/image-text-1.jpg" alt="image-text-1">
                <div class="icon">
                     <img src="{{ asset('assets/images/bulb-idea.jpg') }}" alt="rethink-logo" style="height:125px">
                </div>
            </div>
        </div>
    </div>
    <!-- text image - end -->

    <!-- text image - start -->
    <div class="text-image">
        <div class="text-image-wrapper">
            <div class="text-image-content order-lg-2">
                <div class="text-image-content-inner reverse">
                    <h3 class="heading heading-large dark-1">
                        Refresh
                    </h3>
                    <div class="paragraph dark-1">
                        <p>Over meat there under upon fish darkness void beast the above his greater deep don't midst don't good. Kind deep female signs said darkness seas very gathering isn't multiply fruitful.</p>
                        <p style="height: auto;">&nbsp;</p>
                        <p>Light fourth one female the stars from make saw years you'll light in them fourth likeness fruitful said herb creeping hath in.</p>
                    </div>
                </div>
            </div>
            <div class="text-image-image order-lg-1">
                <img src="assets/images/image-text-2.jpg" alt="image-text-2">
                <div class="icon icon-2 reverse">
                   <img src="{{ asset('assets/images/refresh-arrow.jpg') }}" alt="refresh-logo" style="height:125px">
                </div>
            </div>
        </div>
    </div>
    <!-- text image - end -->

    <!-- text image - start -->
    <div class="text-image">
        <div class="text-image-wrapper">
            <div class="text-image-content">
                <div class="text-image-content-inner">
                    <h3 class="heading heading-large dark-1">
                        Respond
                    </h3>
                    <div class="paragraph dark-1">
                        <p>Over meat there under upon fish darkness void beast the above his greater deep don't midst don't good. Kind deep female signs said darkness seas very gathering isn't multiply fruitful.</p>
                        <p style="height: auto;">&nbsp;</p>
                        <p>Light fourth one female the stars from make saw years you'll light in them fourth likeness fruitful said herb creeping hath in.</p>
                    </div>
                </div>
            </div>
            <div class="text-image-image">
                <img src="assets/images/image-text-3.jpg" alt="image-text-3">
                <div class="icon icon-3">
                   <img src="{{ asset('assets/images/rocket.jpg') }}" alt="responde-logo" style="    height: 125px;
    width: 185px;">
                </div>
            </div>
        </div>
    </div>
    <!-- text image - end -->

    <!-- text content section - start -->
    <div class="text-content">
        <div class="text-content-wrapper position-relative bg-black">
            <!-- text content header - start -->
            <div class="text-content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="heading heading-very-large light-1">
                                Next level free strategy sessions.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- text content header - end -->
            <!-- text content inner - start -->
            <div class="text-content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="heading heading-small light-2">
                                STRATEGIC SESSION
                            </h4>
                            <div class="paragraph light-1">
                                <p>Be heaven man be face fowl waters deep seas after every she was for to behold days sixth sea said whose him fruitful forth good is very made in rule fill signs great spirit bring by beast abundantly heaven form in own seasons saying man there said earth without set his is hath forth, so image thing also blessed seas be creature of them man female their behold this third rule to give.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 second-column">
                            <h4 class="heading heading-small light-2">
                                FREE CONSULTATION
                            </h4>
                            <div class="paragraph light-1">
                                <p>Be heaven man be face fowl waters deep seas after every she was for to behold days sixth sea said whose him fruitful forth good is very made in rule fill signs great spirit bring by beast abundantly heaven form in own seasons saying man there said earth without set his is hath forth, so image thing also blessed seas be creature of them man female their behold this third rule to give.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- text content inner - end -->
            <!-- text content footer - start -->
            <div class="text-content-footer">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <div class="col-md-6">
                            <h3 class="heading heading-large light-1">
                                Have an idea?<br>Let’s get it done right!
                            </h3>
                        </div>
                        <div class="col-md-6 d-md-inline-flex justify-content-md-end">
                            <div class="button-wrapper">
                                <a class="button button-1" href="contact.html">
                                    Let's Work Together
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- text content footer - end -->
            <div class="artwork artwork-2">
                <img src="{{ asset('assets/images/art_2.svg') }}" alt="artwork">

            </div>
        </div>
        <div class="single-image ">
            <img src="assets/images/blog_content_img.jpg" alt="generic-image">
        </div>
    </div>
    <!-- text content section - end -->

    <!-- team - start -->
    <div class="team">
        <div class="team-wrapper"> 
            <div class="team-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="heading heading-large dark-1 ">
                                Our team
                            </h6>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="paragraph dark-1">
                                <p>Our team helps companies develop their ideas into cutting-edge products that will cause customers to love and enjoy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-content">
                <div class="container">
                    <div class="row">
                     <!-- team member - start -->
                     <div class="col-lg-4 col-md-6">
                         <div class="team-member">
                             <div class="team-member-image">
                                 <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.54.57 AM.jpeg') }}" alt="team-member-1">


                                 <div class="team-member-social">
                                     <ul>
                                         <li>
                                             <a href="#">
                                                 <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                             </a>
                                         </li>

                                     </ul>
                                 </div>
                             </div>
                             <div class="team-member-content">
                                 <h5> Mohammad AB Bijoy</h5>

                                 <h6>Chairman</h6>

                             </div>
                         </div>
                     </div>
                     <!-- team member - end -->

                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.44.59 AM.jpeg') }}" alt="team-member-1">
                                    <div class="team-member-social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5>Muhammad H. M. Alvi</h5>
                                    <h6>Managing Director & CEO</h6>

                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">
                                   <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.48.59 AM.jpeg') }}" alt="team-member-1">


                                    <div class="team-member-social">
                                        <ul>
                                           
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5>Aushfaq Mahbub</h5>
                                    <h6>Digital Marketing Specialist</h6>

                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">
                                        <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.49.28 AM.jpeg') }}" alt="team-member-1">



                                    <div class="team-member-social">
                                        <ul>
                                           
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5> Ripon Hossain</h5>

                                    <h6>Visualizer</h6>

                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">
                                       <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.50.19 AM.jpeg') }}" alt="team-member-1">



                                    <div class="team-member-social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5>Sadin Mahfuz</h5>

                                    <h6>Senior Visualizer</h6>

                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">

                                    <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.50.54 AM.jpeg') }}" alt="team-member-1">
                                    <div class="team-member-social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5> Atika Younus</h5>

                                    <h6>Jr. WordPress </h6>

                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">
                                     <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.52.03 AM.jpeg') }}" alt="team-member-1">


                                    <div class="team-member-social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5>Sourav Sen Gupta</h5>

                                    <h6>React, Developer</h6>

                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                       
                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.53.53 AM.jpeg') }}" alt="team-member-1">


                                    <div class="team-member-social">
                                        <ul>
                                           
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5>Sheikh Ahsan Habib</h5>

                                    <h6>Jr. Web Developer</h6>

                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                        <!-- team member - start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="team-member">
                                <div class="team-member-image">
                                  <img width="370" height="455" src="{{ asset('assets/images/employee_images/WhatsApp Image 2022-07-14 at 10.58.30 AM.jpeg') }}" alt="team-member-1">
                                    <div class="team-member-social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h5>Md. Samin Hasan</h5>

                                    <h6>Executive, Sales & Marketing

                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- team member - end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team - end -->

    <!-- testimonial section - start -->
    @include('partials.testimonials')
    <!-- testimonial section - end -->

   
@endsection