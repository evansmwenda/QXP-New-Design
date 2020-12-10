@extends('layouts.home')

@section('main')

    <div class="meeting-landing-pg-container">

        {{-- first section --}}
        <div class="container landing-pg">
            <div class="row landing-pg">
                <div class="col-md-4">
                    <div class="meeting-landing-pg-desc lms">
                        <h2>Welcome to <span style="color: #f5ba00"> QXP</span> Learning Management System</h2>
                        {{-- <h6>Welcome to <span>QXP Global</span></h6> --}}
                        <h6> <span style="color: #f5ba00"> Pre-Primary | <span style="color:  #333">Primary</span> | Secondary Education</span></h6>
                        <div class="meeting-business-paragraph">
                            <p>
                                Whether a few or hundreds of students, post-secondary students can attend classes virtually from wherever they are, access learning calendars and schedules, assignments, take tests and interact with their lecturers.
                            </p>
                        </div>
                        <a href="#academy-link">
                            <button style="background-color:  #f5ba00">Learn More</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="meeting-landing-page">
                        <img src="http://127.0.0.1:8000/images/featured/Artboard – 2.png" alt="">
                    </div>
                </div>
            
            </div>
        </div>
        {{-- end of first section --}}
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 text-center">
                  <h3>Secure Communication & Collaboration all in one<br> Unified Platform</h3>
                  <br>
                  <p style="color:#060646">QXP maximizes productivity through reliable tools tailor-made for meeting and learning,<br> Anytime, Anywhere, Across Any Device</p>
               </div>
      
            </div>
            {{-- end of Row 1 --}}
            <div class="row">
               <a href="/academy_landing" class="tw-readmore">
                  <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                     <div class="features-box" id="academy1">
                        <div class="features-icon d-table">
                           <div class="features-icon-inner d-table-cell">
                              <img src="images/icons/academyIcon.svg" alt="">
                           </div>
                           <!-- End Features icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3 style="color: #f4ba00">Academy</h3>
                        <p class="plan-detail">For Pre-primary, Primary and Secondary Education
                        </p>
                        <a href="#" class="tw-readmore">Learn More
                           <i class="fa fa-angle-right"></i>
                        </a>
                        <div class="academy">
                           <div class="academyIcon pull-right">
                           <img src="{{asset('images/icons/academy.svg')}}">
                           </div>
                        </div>
                     
                     </div>
               </a>
               
                  <!-- End Single Features -->
               </div>
               <!-- End of Academy -->
               <a href="/higher_ed_landing" class="tw-readmore">
                  <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".4s">
                     <div class="features-box" id="higher1" >
                        <div class="features-icon d-table">
                           <div class="features-icon-inner d-table-cell">
                              <img src="images/icons/higherIcon.svg" alt="">
                           </div>
                           <!-- End Features icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3 style="color: #71CA52">Higher Ed</h3>
                        <p class="plan-detail">For Institutes of Higher Learning
                        </p>
                        <a href="https://higher-ed.qxp-global.com" class="tw-readmore">Learn More
                           <i class="fa fa-angle-right"></i>
                        </a>
                        <div class="academy">
                           <div class="academyIcon pull-right">
                           <img src="{{asset('images/icons/higher.svg')}}">
                           </div>
                        </div>
                     
                     </div>
                  </a>
               
                  <!-- End Single Features -->
               
               
                  <!-- End Single Features -->
               </div>
               <!-- End Meering  -->
               <a href="/business_landing" class="tw-readmore">
                  <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
                     <div class="features-box" id="business1" >
                        <div class="features-icon d-table">
                           <div class="features-icon-inner d-table-cell">
                              <img src="images/icons/businessIcon.svg" alt="">
                           </div>
                           <!-- End Features icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3 style="color: #C92519">For Business</h3>
                        <p class="plan-detail">Suited For All Business Trainings and Webinars
                        </p>
                        <a href="#" class="tw-readmore">Learn More
                           <i class="fa fa-angle-right"></i>
                        </a>
                        <div class="academy">
                           <div class="academyIcon pull-right">
                           <img src="{{asset('images/icons/business.svg')}}">
                           </div>
                        </div>
                     
                     </div>
                  </a>
               
                  <!-- End Single Features -->
               </div>
               {{-- end Business --}}
            </div>
            <!-- End Row 2 -->
         </div>
        <hr>
        <div class="container banner">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-banner">
                        <img src="http://127.0.0.1:8000/images/academy/academy-dash-desktop.png" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img-banner-desc">
                        <div class="desc-content-meeting-logo"><img src="https://qxp-global.com/images/logo/bgAsset-3-2.svg" alt=""></div>
                        <h2 style="color: #f5ba00">Connect <span class="dot-colored yellow"> .</span> People <span class="dot-colored yellow"> .</span> Together</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu risus quis varius quam quisque id diam. Dolor purus non enim praesent elementum facilisis leo.
                        </p> --}}
                    </div>
                </div>
            </div>
            <hr>
            <div class="row center">
                <div class="col-md-3 desc-content">
                    <h4 class="yellow">Enrich teaching & learning</h3>
                    <p>Expand traditional classrooms with video communications to meet the growing needs of modern learners.</p>
                </div>
                <div class="col-md-3 desc-content">
                    <h4 class="yellow">Maximize your resources</h3>
                    <p>Students can join classes virtually, from any device , boosting attendance and retention.</p>
                </div>
                <div class="col-md-3 desc-content">
                    <h4 class="yellow">Dynamic Content Sharing</h3>
                    <p>Increase student participation and learning retention with virtual and hybrid classrooms and micro learning.</p>
                </div>
            </div>
        </div>
        
        

        

        {{-- end of second section --}}

    </div>
    <div class="banner-img">
        {{-- <img src="http://127.0.0.1:8000/images/academy/academy-banner-img-smaller.png" alt="">  --}}
        {{-- <img src="http://127.0.0.1:8000/images/academy/academy-banner-img-full-width.png" alt=""> --}}
        <img src="http://127.0.0.1:8000/images/academy/TRUSTED QXP ACADEMY (1).png" alt="">
    </div>


@endsection