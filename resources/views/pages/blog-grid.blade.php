@extends('layout.master')
@section('content')

    <!-- heading - start -->
    <div class="blog-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="heading heading-very-large dark-1">
                        Read from recent blog writings.
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- heading - end -->

    <!-- blog section - start -->
    <div class="blog-section blog-section-grid">
        <div class="blog-section-wrapper">
            <div class="blog-list blog-grid">
                <div class="container">
                    <div class="row">
                        <div class="col">
                          <ul class="filter filter-list filter-7bddf04">
                                <li><a href="#" data-filter="*" class="selected">All</a></li>
                                <li><a href="#" data-filter=".company">Company</a></li>
                                <li><a href="#" data-filter=".design">Design</a></li>
                                <li><a href="#" data-filter=".development">Development</a></li>
                                <li><a href="#" data-filter=".technology">Technology</a></li>
                          </ul>
                          <div class="filter filter-select filter-7bddf04">
                            <select>
                                <option value="*">All</option>
                                <option value=".company">Company</option>
                                <option value=".design">Design</option>
                                <option value=".development">Development</option>
                                <option value=".technology">Technology</option>
                            </select>
                          </div>
                        </div>
                    </div>
                                
                    <!-- blog list container - start -->
                    <div 
                    class="row blog-list-container blog-isotope-container blog-list-container-7bddf04 blog-list-container-grid-1" 
                    id="7bddf04">
                        <!-- single blog - start -->
                        <div 
                        class="grid-1 blog-list-item company col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_1.jpg') }}" alt="blog-1">
                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Company</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>New developments on the way and the team couldn’t be more excited.</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Doesn’t for also fowl spirit also signs all dry bring there shall to beast fish reater upon can’t…</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->

                        <!-- single blog - start -->
                        <div class="grid-1 blog-list-item development col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_2.jpg') }}" alt="blog-2">

                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Design</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>Is hand held tech shaping the way we used to do business?</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Seasons grass years bearing fruitful man. First very night set deep female said unto Face cattle that a…</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->

                        <!-- single blog - start -->
                        <div 
                        class="grid-1 blog-list-item design col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_4.jpg') }}" alt="blog-4">

                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Company</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>Meeting customer expectations and setting new goals in 2021</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Which bearing signs herb likeness blessed seas from let saw saying earth in light is our has dominion….</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->

                        <!-- single blog - start -->
                        <div  class="grid-1 blog-list-item company col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_3.jpg') }}" alt="blog-3">

                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Development</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>Web design trends that will elevate your brand presence in new year</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Were make night hath thing you’ll you night beast moving seasons over you’re face subdue Said also to…</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->

                        <!-- single blog - start -->
                        <div  class="grid-1 blog-list-item technology col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_6.jpg') }}" alt="blog-6">

                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Development</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>Web design trends that will elevate your brand presence in new year.</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Were make night hath thing you’ll you night beast moving seasons over you’re face subdue Said also to…</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->

                        <!-- single blog - start -->
                        <div 
                        class="grid-1 blog-list-item company col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_5.jpg') }}" alt="blog-5">

                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Company</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>Meeting customer expectations and setting new goals in 2021</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Which bearing signs herb likeness blessed seas from let saw saying earth in light is our has dominion….</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->

                        <!-- single blog - start -->
                        <div class="grid-1 blog-list-item design col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_8.jpg') }}" alt="blog-8">

                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Company</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>Is hand held tech shaping the way we used to do business.</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Doesn’t for also fowl spirit also signs all dry bring there shall to beast fish reater upon can’t…</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->

                        <!-- single blog - start -->
                        <div class="grid-1 blog-list-item technology col-lg-6">
                            <div class="blog-list-single">
                                <!-- thumbnail - start -->
                                <div class="blog-list-single--thumbnail">
                                    <a href="blog-detailed.html">
                                        <img src="{{ asset('assets/images/blog_thumbnail_small_img_7.jpg') }}" alt="blog-7">

                                        <div class="hover">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                    <title>arrow</title>
                                                    <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- thumbnail - end -->
                                <!-- blog content - start -->
                                <div class="blog-list-single--content">
                                    <div class="details">
                                        <h6>23 Sep. 2020</h6>
                                        <span>|</span>
                                        <h6>Technology</h6>
                                    </div>
                                    <a href="blog-detailed.html">
                                        <h2>Meeting customer expectations and setting new goals in 2021.</h2>
                                    </a>
                                    <div class="paragraph excerpt">
                                        <p>Seasons grass years bearing fruitful man. First very night set deep female said unto Face cattle that a…</p>
                                    </div>
                                    <a href="blog-detailed.html" class="button">
                                        <span>Read More</span>
                                    </a>
                                </div>
                                <!-- blog content - end -->
                            </div>
                        </div>
                        <!-- single blog - end -->
                    </div>
                    <!-- blog list container - end -->
        
                    <!-- blog pagination - start -->
                    <div class="row">
                        <div class="col">  
                            <div class="pagination-container">
                                <ul class="page-numbers">
                                    <li>
                                        <span aria-current="page" class="page-numbers current">1</span>
                                    </li>
                                    <li>
                                        <a class="page-numbers" href="#">2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- blog pagination - end -->
        
                </div>
            </div>
        </div>
    </div>
    <!-- blog section - end -->

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
            <div class="artwork artwork-4">
                <img src="{{ asset('assets/images/art_3.png') }}" alt="artwork">

            </div>
        </div>
    </div>
    <!-- cta - end -->

     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

@endsection