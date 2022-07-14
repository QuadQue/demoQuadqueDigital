    <!-- navigation - start -->
    <div class="navigation-wrapper">
        <div class="placeholder"></div>
        <nav class="navigation enabled-sticky">
            <div class="navigation-bar">
                <div class="logo">
                    <a href="{{ url('/home') }}" class="custom-logo-link" rel="home" aria-current="page" target="_blank">
                        <img  src="{{ asset('assets/images/quadque_digital_final_logo_v1.0_1_300x80.png') }}" class="custom-logo" alt="Slope"></a>


                </div>
                <div class="hamburger ">
                    <a href="#">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </a>
                </div>
            </div>
            <div class="navigation-menu">
                <div class="navigation-menu-image">
                    <img width="683" height="1037" src="assets/images/navigation_menu_image.png" alt="navigation image">
                </div>
                <div class="navigation-menu-menu">
                    <div class="navigation-menu-menu--wrapper">
                        <ul class="menu">
                            <li class="menu-item menu-item-has-children">
                                <a href="{{ url('/home') }}">Home</a>
                               
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/about') }}">About us</a>
                            </li>
                             <li class="menu-item menu-item-has-children">
                                 <a href="javascript:void(0)">Services</a>
                                 <ul class="sub-menu">
                                     <li class="menu-item">
                                         <a href="{{ url('/social-media-marketing') }}">Social Media Marketing</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/search-engine-optimization') }}">Search Engine Optimization</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/writing-solutions') }}">Writing Solutions</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/online-advertising') }}">Online Advertising</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/service-detailed') }}">Content Marketing</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/service-detailed') }}">Programming & Tech</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/service-detailed') }}">Design & Photography</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/service-detailed') }}">Video & Animations</a>
                                     </li>
                                     <li class="menu-item">
                                         <a href="{{ url('/service-detailed') }}">Event Management</a>
                                     </li>
                                 </ul>
                             </li>
                           
                            <li class="menu-item menu-item-has-children">
                                <a href="javascript:void(0)">Projects</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="{{ url('/projects-1') }}">Projects Style 1</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/projects-2') }}">Projects Style 2</a>

                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('project-detailed') }}">Project Detailed</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="{{ url('blog-list') }}">Blog</a>

                                
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Career</a>

                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Case Studies</a>

                            </li>
                            
                            <li class="menu-item">
                                <a href="{{ url('/contact') }}">Contact</a>
                            </li>
                            
                         
                        </ul>
                    </div>
                    <div class="navigation-menu-social">
                        <h6 class="mt-5">FOLLOW</h6>
                        <ul>
                            <li> 
                                          <a href="https://www.facebook.com/QuadqueDigital22"  target="_blank">
                                              <i class="fab fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://twitter.com/DQuadque"  target="_blank">
                                              <i class="fab fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.linkedin.com/services/page/b682423165625b9144/"  target="_blank">
                                              <i class="fab fa-linkedin"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.instagram.com/quadque.digital22/"  target="_blank">
                                              <i class="fab fa-instagram"></i>
                                          </a>
                                      </li>
                            @if(Auth::check())
                             
                             <li>
                                 <a href="{{ url('/admin/dashboard') }}" style="font-size: 2.4rem;color: #818181;">

                                     Dashboard
                                 </a>
                             </li>

                            @endif
                           
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navigation - end -->
