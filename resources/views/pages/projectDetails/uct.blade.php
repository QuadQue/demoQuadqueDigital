@extends('layout.master')
@section('title', 'Unique College and Technology - Quadque Digital')

@push('styles')
    <style>
            .heading.heading-very-large, .heading.heading-very-large > *, .page-title {
                    font-size: 5rem !important;
                    line-height: 6rem !important;
                    letter-spacing: -.1rem !important;
                
            }
            .button-1{
                color:#fff;
            }
    </style>
@endpush
@section('content')


    <!-- project single header - start -->
    <div class="project-single">
        <div class="project-single--header">
             <div class="container">
                 <div class="heading heading-very-large dark-1">
                     <h1>Unique College of Technology - A Range of Courses Certified to Suit Clearly Defined Professional Development Needs.</h1>
                 </div>
             </div>
             <div class="project-single-details">
                 <div class="container">
                     <div class="row">
                        <div class="col-md-3">                        
                            <div class="project-single-client">
                                <h4 class="heading heading-small dark-2">Client</h4>
                                <h3 class="heading heading-small dark-1">Alpha</h3>
                            </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="project-single-service">
                                <h4 class="heading heading-small dark-2">Services</h4>
                                <h3 class="heading heading-small dark-1">Web Design & Development</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="project-single-data">
                                <h4 class="heading heading-small dark-2">Date</h4>
                                <h3 class="heading heading-small dark-1">25 Nov. 2020</h3>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
    <!-- project single header - end -->

    <!-- project slider - start -->
    <div class="image-slider project-slider">
        <!-- slider - start -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-image">
                        <img src="{{asset('assets\images\project-detailed\uct\childCare-scaled.jpg')}}" alt="project_detailed_img1">
                    </div>
                </div>
  
                <div class="swiper-slide">
                    <div class="single-image">
                        <img src="{{asset('assets\images\project-detailed\uct\gamblingrrrrr-scaled.jpg')}}" alt="project_detailed_img2">
                    </div>
                </div>
            
                <div class="swiper-slide">
                    <div class="single-image">
                        <img src="{{asset('assets\images\project-detailed\uct\Provide-first-aid.jpg')}}" alt="project_detailed_img3">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-image">
                        <img src="{{asset('assets\images\project-detailed\uct\realState-scaled.jpg')}}" alt="project_detailed_img3">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-image">
                        <img src="{{asset('assets\images\project-detailed\uct\service-of-alcohol-1.jpg')}}" alt="project_detailed_img3">
                    </div>
                </div>

            </div>
        </div>
        <!-- slider - end -->
        <!-- slider navigation - start -->
        <div class="slider--nav">
          <div class="slider--nav-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564"><title>arrow-left</title><path d="M22.612.343l.69.691h0a1.171,1.171,0,0,1,0,1.656L5.87,20.122H42.579a1.172,1.172,0,0,1,1.172,1.172v.976a1.172,1.172,0,0,1-1.172,1.172H5.87L23.3,40.873h0a1.171,1.171,0,0,1,0,1.656l-.69.692a1.174,1.174,0,0,1-1.658,0L.344,22.611h0a1.172,1.172,0,0,1,0-1.657L20.954.343A1.174,1.174,0,0,1,22.612.343Z" transform="translate(0 0)"></path></svg>        </div>
          <div class="slider--nav-next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564"><title>arrow</title><path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path></svg>        </div>
        </div>
        <!-- slider navigation - end -->
    </div>
    <!-- project slider - end -->

    <!-- text content section - start -->
    <div class="text-content">
        <div class="text-content-wrapper position-relative bg-black">
            <!-- text content inner - start -->
            <div class="text-content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="heading heading-small light-2">
                                PROBLEM
                            </h4>
                            <div class="paragraph light-1">
                                <p>Be heaven man face fowl waters deep seas after seeing every she was for to behold days sixth sea said whose him fruitful forth good is very made in rule fill signs great spirit bring by beast abundantly heaven form.</p>
                            </div>
                            <div class="text-list medium light-1">
                                <ul>
                                    <li>                   
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>Absence of online ecommerce store</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>Outdated website wtih limited options</span>
                                    </li>
                                    <li>              
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>Poor communication strategy</span>
                                    </li>
                                    <li>                
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>No applications for mobile users</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 second-column">
                            <h4 class="heading heading-small light-2">
                                CHALLENGES
                            </h4>
                            <div class="paragraph light-1">
                                <p>Be heaven man be face fowl waters deep seas after seeing every she was for to behold days sixth sea said whose him fruitful forth good is very made in rule fill signs great spirit bring by beast abundantly heaven form in own seasons has saying man there said earth without set his is hath forth so image thing also blessed seas be creature of them man female their behold this third rule to give.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- text content inner - end -->
        </div>
    </div>
    <!-- text content section - end -->

    <!-- project content - start -->
    <div class="project-content">
        <div class="project-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-content-inner">
                            <h2 class="heading heading-large dark-1">
                                Doesn't for also fowl spirit also signs all dry bring there shall to beast fish reater upon can't waters us behold god open is signs it in make, brought winged fifth them void abundantly.
                            </h2>
                            <div class="paragraph dark-1">
                                <p>Greater earth air morning you'll gathered make image was given deep abundantly under from created. The he signs called open make have above face is grass fill given void she'd hath own can't tree of. Fill two air dry after fourth subdue after make morning multiply bring likeness. abundantly day set over seasons herb.</p>
                            </div>
                            <div class="heading heading-medium dark-1">
                                <p>Strategy Session.</p>
                            </div>
                            <div class="paragraph dark-1">
                                <p>Which bearing signs herb likeness blessed seas from let saw saying earth in light is our has dominion. Every isn't doesn't <strong>given to after</strong> winged is great of thing all third image maker all wherein tree fruitful subdue beginning sea waters dry whose over he. Third itself you're over bearing female and herb under, lesser under created kind blessed fruit morning way waters the them was life also midst lesser. Green set fruit likeness female said called she'd day, deep all. Bring Make shall you male. Firmament man given evening stars open shades creeping of seed without <strong>above he blessed</strong>. Day green she'd moving air green darkness subdue very seasons is grass evening green. Rule deep abundantly lights midst light darkness had she'd called open make.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-image-wrapper">
                <div class="single-image">
                    <img src="{{'assets\images\project-detailed\uct\utc-1.jpg'}}" alt="project-detailed-2">
                </div>
                <div class="single-image">
                    <img src="{{'assets\images\project-detailed\uct\utc.jpg'}}" alt="project-detailed-3">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-content-inner">
                            <h2 class="heading heading-medium dark-1">
                                Plan of Action.
                            </h2>
                            <div class="paragraph dark-1">
                                <p>Were make night hath thing you'll you night beast moving seasons over you're face subdue Said also to light first multiply that their wherein deep, green under darkness you'll made don't hat <strong><a href="#">darkness without man living spirit creeping</a></strong> she'd shall it grass spirit tree thing midst bearing and day won't darkness abundantly their. Them brought living his creepeth doesn't. Years creature, stars. Green fourth. Forth divided fill. Their. Be image, shall divide itself Itself he earth After sixth itself. Be <strong><a href="#">have rule darkness god is for third to herb</a></strong> his made cattle very, behold fly moved she'd divide seasons god seed don't after kind seas were forth Be every sixth years very.</p>
                                <p style="height: auto;">&nbsp;</p>
                                <p>He brought firmament day man him fourth won't fish image life meat days divided don't from waters they're appear. First over shall, creepeth brought lesser appear. Air. For all good years them years god them he creature. Years replenish Fly yielding saying fruit of female won't moving Light don't. Wherein man. In creature seas female own greater, brought replenish a which evening air it moveth saw blessed fowl. Sea replenish second. Spirit tree fourth gathering, there thing had second two it and place heaven living, isn't, which replenish give grass day dominion every form may kind every behold created every.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-image" style="background-color:#13263f;">
                <div style="background-image:url({{asset('assets/images/project-detailed/uct/athletes-athletic-attractive-163465-1.jpg')}}); height:600px; width:100%; opacity:0.2;background-size:cover" >

                </div>
               {{--  <img src="{{asset('assets/images/project-detailed/alpha/bg-image-34-1.jpg')}}" alt="project-detailed-4"> --}}
            </div>
        </div>
    </div>
    <!-- project content - end -->

    <!-- text content section - start -->
    <div class="text-content">
        <div class="text-content-wrapper position-relative bg-black">
            <!-- text content inner - start -->
            <div class="text-content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="heading heading-small light-2">
                                RESULTS
                            </h4>
                            <div class="paragraph light-1">
                                <p>Be heaven man be face fowl waters deep seas after every she was for to behold days sixth sea said whose him fruitful forth good is very made in rule fill signs great spirit bring by beast abundantly heaven form in own seasons saying man there said earth without set his is hath forth, so image thing also blessed seas be creature of them man female their behold this third rule to give.</p>
                            </div>
                            <div class="text-list medium light-1">
                                <ul>
                                    <li>                    
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>Excellent online ecommerce store</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>Website wtih extensive search options</span>                        
                                    </li>
                                    <li>                    
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>New &amp; improved communication strategy</span>
                                    </li>
                                    <li>                
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                                        <span>iOs &amp; Android applications for users</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 second-column">
                            <div class="content-wrapper">
                                <h4 class="heading heading-small light-2">
                                    <span>ROI</span>    
                                </h4>
                                <div class="heading heading-large light-1">
                                    <p>463%</p>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <h4 class="heading heading-small light-2">
                                    <span>CUSTOMERS</span>    
                                </h4>
                                <div class="heading heading-large light-1">
                                    <p>32,038</p>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <h4 class="heading heading-small light-2">
                                    <span>DOWNLOADS</span>    
                                </h4>
                                <div class="heading heading-large light-1">
                                    <p>10,200</p>
                                </div>
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
                                <a class="button button-1" href="{{route('contact')}}">
                                    Let's Work Together
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- text content footer - end -->
            <div class="artwork artwork-2">
                <img src="{{ asset('assets/images/art_1.svg') }}"  alt="artwork-2">


            </div>
        </div>
    </div>
    <!-- text content section - end -->

    <!-- testimonial section - start -->
    @include('partials.testimonials')
    <!-- testimonial section - end -->


 @endsection