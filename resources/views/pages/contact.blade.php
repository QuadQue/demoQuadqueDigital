@extends('layout.master')
@section('title', 'Contact - Quadque Digital')
@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <style>
      .slope-contact-form .select-wrapper span {
            height:35px !important;
        }

    .single-image img {
        width: 100%;
        height: 800px;
       
      
    }
  </style>
@endpush
 @section('content')

    <!-- page header - start -->
    <div class="page-header position-relative">
        <div class="page-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="heading heading-very-large dark-1">
                            Let's get your free strategy session.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header-bottom">
            <div class="single-image">
                <img src="{{asset('assets/images/quadque_office.jpeg')}}" alt="contact-header">
              </div>
        </div>
        <div class="artwork artwork-3">
            <img src="{{asset('assets/images/art_1.svg')}}"  alt="artwork">
        </div>
    </div>
    <!-- page header - end -->

    <!-- contact section - start -->
    <div class="contact-section">
        <div class="contact-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="contact-form-wrapper">
		
                            <div class="nav-pills-wrapper">
                                <ul class="nav nav-pills contact-form-tab" role="tablist">
                                    <li class="nav-item">
                                        <a 
                                        class="nav-link active" 
                                        id="slope-cf7-id-38126ae1-tab" 
                                        data-toggle="pill" 
                                        href="#slope-cf7-id-38126ae1" 
                                        role="tab" 
                                        aria-controls="slope-cf7-id-38126ae1" 
                                        aria-selected="true">
                                            <span>Strategy Session</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a 
                                        class="nav-link" 
                                        id="slope-cf7-id-38126ae2-tab" 
                                        data-toggle="pill" 
                                        href="#slope-cf7-id-38126ae2" 
                                        role="tab" 
                                        aria-controls="slope-cf7-id-38126ae2" 
                                        aria-selected="false">
                                            <span>Say Hello</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    
                            <div class="form-wrapper tab-content">
                                      @if(Session::has('success'))
                                         <p class="text-success mb-5">{{Session::get('success')}}</p>
                                    @endif
                                    
                                    
                                    
                                <div 
                                class="contact-form slope-cf7-38126ae1 tab-pane fade active show" 
                                id="slope-cf7-id-38126ae1" 
                                role="tabpanel" 
                                aria-labelledby="slope-cf7-id-38126ae1-tab">
                                  
                                    <div>
                                        <form action="{{route('store.contact.info')}}" method="POST">
                                            @csrf
                                            
                                            <div class="slope-contact-form">
                                                <div class="select-wrapper">
                                                    <div class="form-group">
                                                        <label>Select type of your project</label>
                                                        <span class="source-select">
                                                            <select class="form-control" id="project" name="project_name">
                                                                <option value="">Select an option</option>
                                                                <option value="Strategy">Strategy</option>
                                                                <option value="Brand Identities">Brand Identities</option>
                                                                <option value="Print Design">Print Design</option>
                                                                <option value="UI/UX Design">UI/UX Design</option>
                                                                <option value="Art Direction">Art Direction</option>
                                                                <option value="Back End">Back End</option>
                                                                <option value="Admin System">Admin System</option>
                                                                <option value="Front End">Front End</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <label>How did you find us?</label>
                                                        <span class="source-select">
                                                            <select class="form-control" id="finding-source" name="finding_source">
                                                                <option value="">Select an option</option>
                                                                <option value="Strategy">Google</option>
                                                                <option value="Brand Identities">Facebook</option>
                                                                <option value="Print Design">Other</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="fields-wrapper">
                                                    <div class="input-contact">
                                                        <span class="wpcf7-form-control-wrap name-field"><input type="text" name="name_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name *"></span>
                                                        <span class="wpcf7-form-control-wrap company-field"><input type="text" name="company_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your company *"></span>
                                                        <span class="wpcf7-form-control-wrap email-field"><input type="email" name="email_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email address *">
                                                          @error('email_field')
                                                                  <p class="text-warning mb-2">{{$message}}</p>
                                                          @enderror
                                                        </span>
                                                        
                                                        <span class="wpcf7-form-control-wrap number-field"><input type="tel" name="number_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone"></span>
                                                    </div>
                                                    <div class="textarea-contact">
                                                        <span class="wpcf7-form-control-wrap message-field"><textarea name="message_field" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tell us about the project *"></textarea></span>
                                                    </div>
                                                </div>
                                                <div class="submit-contact">
                                                    <input type="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>	
                                            
                                <div 
                                class="contact-form slope-cf7-38126ae2 tab-pane fade" 
                                id="slope-cf7-id-38126ae2" 
                                role="tabpanel" 
                                aria-labelledby="slope-cf7-id-38126ae2-tab">
                                    <div>
                                        <form  action="{{route('store.contact.info')}}" method="POST">
                                            @csrf
                                            <div class="slope-contact-form">
                                                <div class="fields-wrapper">
                                                    <div class="input-contact">
                                                        <span class="wpcf7-form-control-wrap name-field"><input type="text" name="name_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name *"></span>
                                                        <span class="wpcf7-form-control-wrap company-field"><input type="text" name="company_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your company *"></span>
                                                        <span class="wpcf7-form-control-wrap email-field"><input type="email" name="email_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email address *"></span>
                                                        <span class="wpcf7-form-control-wrap number-field"><input type="tel" name="number_field" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone"></span>
                                                    </div>
                                                    <div class="textarea-contact">
                                                        <span class="wpcf7-form-control-wrap message-field"><textarea name="message_field" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Write your message *"></textarea></span>
                                                    </div>
                                                </div>
                                                <div class="submit-contact" >
                                                    <input type="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"> </span>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>	

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section - end -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
           //select2  for project select field
            $('#project').select2();
            
            //select2  for project select field
            $('#finding-source').select2();
    </script>
@endsection