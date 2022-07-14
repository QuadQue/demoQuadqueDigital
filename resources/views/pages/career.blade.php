@extends('layout.master')
@section('title', 'Career - Quadque Digital')
@push('styles')
      <style>

        .career_gallery
            {
               margin: 80px 0; 
            }

            .career_gallery a img{
                   cursor:pointer;
                   border: 3px solid #dee2e6;

            }
            .career_gallery a img:hover{

                  width:115%;

            }
                
      </style>
@endpush

@section('content')


            <!-- page header - start -->
            <div class=" container page-header mb-5">

                <div class="row d-flex justify-content-center">
                    
                        <h1 class="page-title">Current Job Openings</h1>
                    <p class="text-center paragraph ">Quadque is an equal opportunity employer committed to creating a diverse workforce. We provide equal employment opportunities (EEO) to all employees and applicants for employment without regard to race, color, religion, gender, sexual orientation, gender identity, national origin, age, disability, genetic information, marital status, service member status, amnesty or status as a covered veteran, or any other protected classification under applicable federal, state, and local laws. Come build your future with Quadque !</p>

                
                </div>
            </div>
            <!-- page header - end -->

            <!-- Career galaery  start -->
            <div class=" container ">
                    <div class="row  career_gallery">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('assets/images/career_images/1.copy-writer-post-23-01-2022.png') }}" style="width:100%">

                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="{{ asset('assets/images/career_images/admin-ajax-_2_.jpg') }}" style="width:100%">

                                </a>
                            </div>
                            <div class="col-md-4">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/admin-ajax-_1_-1.jpg') }}" style="width:100%">
                                 </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/Digital-Marketing-Specialist.jpg') }}" style="width:100%">

                                 </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/IMG-20220208-WA0007.jpg') }}" style="width:100%">


                                 </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/CopyWriter_09.12.2021.jpg') }}" style="width:100%">


                                 </a>
                            </div>
                        
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/IMG-20220208-WA0009.jpg') }}" style="width:100%">


                                 </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/CopyWriter_09.12.2021 (1).jpg') }}" style="width:100%">



                                 </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/UI-UX.jpg') }}" style="width:100%">



                                 </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/IMG-20220208-WA0009.jpg') }}" style="width:100%">




                                 </a>
                            </div>
                            <div class="col-md-4 mt-3">
                                 <a href="#">
                                     <img src="{{ asset('assets/images/career_images/Wordpress-Developer.jpg') }}" style="width:100%">




                                 </a>
                            </div>
                        
                        

                    </div>
            </div>
            <!-- Career galaery  end -->



@endsection
