@extends('layouts.home')

@section('main')
{{-- <div class="search-bar">
   <i class="fa fa-close"></i>
   <form class="search-bar-fixed" action="#">
      <input type="text" placeholder="search...">
      <button type="submit"><i class="fa fa-search"></i></button>
   </form>
</div> --}}
<!--End Search bar -->

<div class="offcanvas-menu">
   <div class="offcanvas-menu-overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="offcanvas-wrapper">
               <div class="offcanvas-inner">
                  <a href="index.html" class="logo">
                     <img src="images/logo.png" alt="">
                  </a>
                  <p>Start working with an company that can provide everything you need to generate awareness, drive traffic,
                     connect with customers, and increase sales montes, nascetur ridiculus mus</p>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="contact-us">
                           <div class="contact-icon">
                              <i class="icon icon-map2"></i>
                           </div>
                           <!-- End contact Icon -->
                           <div class="contact-info">
                              <h3>New York, USA</h3>
                              <p>1010 Grand Avenue</p>
                           </div>
                           <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                     </div>
                     <!-- End Col -->
                     <div class="col-md-12">
                        <div class="contact-us">
                           <div class="contact-icon">
                              <i class="icon icon-phone3"></i>
                           </div>
                           <!-- End contact Icon -->
                           <div class="contact-info">
                              <h3>009-215-5596</h3>
                              <p>Give us a call</p>
                           </div>
                           <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                     </div>
                     <!-- End Col -->
                     <div class="col-md-12">
                        <div class="contact-us">
                           <div class="contact-icon">
                              <i class="icon icon-envelope2"></i>
                           </div>
                           <!-- End contact Icon -->
                           <div class="contact-info">
                              <h3>mail@example.com</h3>
                              <p>24/7 online support</p>
                           </div>
                           <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                     </div>
                     <!-- End Col -->
                  </div>
                  <!-- End Contact Row -->
                  <div class="footer-social-link">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="menu-subscribe">
                     <h3>
                        Subscribe
                        <span class="noanimate-border"></span>
                     </h3>
                     <form action="#">
                        <div class="form-row">
                           <div class="col tw-footer-form">
                              <input type="email" class="form-control" placeholder="Email Address">
                              <button type="submit"><i class="fa fa-send"></i></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- Offcanvas inner end -->
               <button class="menu-close-btn"><i class="fa fa-close"></i></button>
            </div>
            <!-- Offcanvas wrapper end -->
         </div>
         <!-- Col End -->
      </div>
      <!-- Row End -->
   </div>
   <!-- Container End -->
</div>
<!-- Off canvas menu End -->

<div class="tw-top-bar">
   
      <div class="row">
         <div class="col-md-2 text-left leftContainer">
            <div class="row">
               <div class="col-md-3 top-social-links">
                  <a href="#"><i class="fa fa-facebook "></i></a>                
               </div>
               <div class="col-md-3 top-social-links">
                  <a href="#"><i class="fa fa-linkedin "></i></a>                
               </div>
               <div class="col-md-3 top-social-links">
                  <a href="#"><i class="fa fa-twitter "></i></a>                
               </div>
               <div class="col-md-3 top-social-links">
                  <a href="#"><i class="fa fa-youtube "></i></a>                
               </div>
            </div>

            </div>
         
         <!-- Col End -->
         <div class="col-md-8 ml-auto text-right">
            <div class="top-contact-info">
               <span><i class="fa fa-user"></i>Login</span>
               <span><i class="fa fa-envelope"></i>info@qxpglobal.com</span>
            </div>
         </div>
         <!-- Col End -->
      </div>
      <!-- Row End -->
  
   <!-- Container End -->
</div>
<!-- Top Bar end -->


<!-- header======================-->
<header>
   <div class="tw-head">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand tw-nav-brand" href="#">
               <img src="images/logo/logo.svg" alt="Qxp" height="61" width="168">
            </a>
            <!-- End of Navbar Brand -->
            <!-- End of Navbar toggler -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item dropdown active">
                     <a class="nav-link" href="#" data-toggle="dropdown">
                        Home
                        <span class="tw-indicator"></span>
                     </a>

                     <!-- End of Dropdown menu -->
                  </li>
                  <li class="nav-item dropdown tw-megamenu-wrapper">
                     <a class="nav-link" href="#" data-toggle="dropdown">
                        Products & Solutions
                        <span class="tw-indicator">
                           <i class="fa fa-angle-down"></i>
                        </span>
                     </a>
                     <div id="tw-megamenu" class="dropdown-menu tw-mega-menu">
                        <div class="row">
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Standard Pricing</h3>
                                 </li>
                                 <li><a href="pricing.html">SEO Pricing</a></li>
                                 <li><a href="#">Ecommerce SEO</a></li>
                                 <li><a href="#">Enterprise SEO</a></li>
                                 <li><a href="#">Local SEO</a></li>
                                 <li><a href="#">SEO Audits</a></li>
                                 <li><a href="#">PPC Management</a></li>
                                 <li><a href="#">SEO Link Buildings</a></li>
                              </ul>
                              <!-- End UL -->
                           </div>
                           <!-- End Col -->
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Elements One</h3>
                                 </li>
                                 <li><a href="pricing.html">Addon list 1</a></li>
                                 <li><a href="#">Addon list 2</a></li>
                                 <li><a href="#">Addon list 3</a></li>
                                 <li><a href="#">Addon list 4</a></li>
                                 <li><a href="#">Addon list 5</a></li>
                                 <li><a href="#">Addon list 6</a></li>
                              </ul>
                              <!-- End UL -->
                           </div>
                           <!-- End Col -->
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Elements Two</h3>
                                 </li>
                                 <li><a href="#">Addon list 7</a></li>
                                 <li><a href="#">Addon list 8</a></li>
                                 <li><a href="#">Addon list 9</a></li>
                                 <li><a href="#">Addon list 10</a></li>
                              </ul>
                              <!-- End Ul -->
                           </div>
                           <!-- End Col -->
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Site review</h3>
                                 </li>
                                 <li>
                                    <p>Start working with the best company that provide you everything you need.</p>
                                 </li>
                              </ul>
                              <!-- End UL -->
                           </div>
                           <!-- End Col -->
                        </div>
                        <!-- End Row -->
                     </div>
                     <!-- End of Mega menu -->
                  </li>
                  <!-- End Dropdown -->
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#" data-toggle="dropdown">
                        Features
                        <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                     </a>
                     <ul class="dropdown-menu tw-dropdown-menu">
                        <li><a href="service.html">Service All</a></li>
                        <li><a href="single-service.html">Service Single</a></li>
                     </ul>
                     <!-- End of Dropdown menu -->
                  </li>
                  <!-- End Dropdown -->
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#" data-toggle="dropdown">
                        Pricing & Plans
                        <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                     </a>
                     <ul class="dropdown-menu tw-dropdown-menu">
                        <li><a href="case-studies.html">Projects All</a></li>
                        <li><a href="single-case.html">Project Single</a></li>
                     </ul>
                     <!-- End of Dropdown menu -->
                  </li>
                  <!-- End Dropdown -->
                  <li class="nav-item dropdown tw-megamenu-wrapper">
                     <a class="nav-link" href="#" data-toggle="dropdown">
                        Why QXP
                        <span class="tw-indicator">
                           <i class="fa fa-angle-down"></i>
                        </span>
                     </a>
                     <div id="tw-megamenu" class="dropdown-menu tw-mega-menu">
                        <div class="row">
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Standard Pricing</h3>
                                 </li>
                                 <li><a href="pricing.html">SEO Pricing</a></li>
                                 <li><a href="#">Ecommerce SEO</a></li>
                                 <li><a href="#">Enterprise SEO</a></li>
                                 <li><a href="#">Local SEO</a></li>
                                 <li><a href="#">SEO Audits</a></li>
                                 <li><a href="#">PPC Management</a></li>
                                 <li><a href="#">SEO Link Buildings</a></li>
                              </ul>
                              <!-- End UL -->
                           </div>
                           <!-- End Col -->
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Elements One</h3>
                                 </li>
                                 <li><a href="pricing.html">Addon list 1</a></li>
                                 <li><a href="#">Addon list 2</a></li>
                                 <li><a href="#">Addon list 3</a></li>
                                 <li><a href="#">Addon list 4</a></li>
                                 <li><a href="#">Addon list 5</a></li>
                                 <li><a href="#">Addon list 6</a></li>
                              </ul>
                              <!-- End UL -->
                           </div>
                           <!-- End Col -->
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Elements Two</h3>
                                 </li>
                                 <li><a href="#">Addon list 7</a></li>
                                 <li><a href="#">Addon list 8</a></li>
                                 <li><a href="#">Addon list 9</a></li>
                                 <li><a href="#">Addon list 10</a></li>
                              </ul>
                              <!-- End Ul -->
                           </div>
                           <!-- End Col -->
                           <div class="col-md-12 col-lg-3 no-padding">
                              <ul>
                                 <li class="tw-megamenu-title">
                                    <h3>Site review</h3>
                                 </li>
                                 <li>
                                    <p>Start working with the best company that provide you everything you need.</p>
                                 </li>
                              </ul>
                              <!-- End UL -->
                           </div>
                           <!-- End Col -->
                        </div>
                        <!-- End Row -->
                     </div>
                     <!-- End of Mega menu -->
                  </li>
                  <!-- End MegaMenu -->
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#" data-toggle="dropdown">
                        Resources
                        <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                     </a>
                     <ul class="dropdown-menu tw-dropdown-menu">
                        <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                        <li><a href="news-single.html">News Single</a></li>
                     </ul>
                     <!-- End of Dropdown menu -->
                  </li>
                  <!-- End Dropdown -->
                  
               </ul>
               <!-- End Navbar Nav -->
               <button class="btn btn-warning">Contact Us</button>
            </div>
            <!-- End of navbar collapse -->
            
                 
            
            <!-- End off canvas menu -->
         </nav>
         <!-- End of Nav -->
      </div>
      <!-- End of Container -->
   </div>
   <!-- End tw head -->
</header>
<!-- End of Header area=-->


<!-- Start hero slider/ Owl Carousel Slider -->
<div class="tw-hero-slider owl-carousel">

   {{-- <div class="slider-1 slider-map-pattern">
      <!-- Slider arrow end -->
      <div class="slider-wrapper d-table">
         <div class="slider-inner d-table-cell">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-12">
                     <img src="{{asset('images/sliders/slider1.jpg')}}" alt="" class="slider-img img-fluid">
                  </div>
                  <!-- Col End -->
               </div>
               <!-- Row End -->
               <div class="row justify-content-center text-center">
                  <div class="col-md-10">
                     <h1 class="tw-slider-subtitle">Search Engine Optimization</h1>
                     <h4 class="tw-slider-title">Digital Marketing
                        <span>Solution</span>
                     </h4>
                     <a href="#" class="btn btn-primary">Submit Now</a>
                  </div>
                  <!-- End Col -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Container End -->
         </div>
         <!-- Slider Inner End -->
      </div>
      <!-- Slider Wrapper End -->
   </div> --}}
   <!-- Slider 1 end -->


  <div class="slider-2">
      {{-- <div class="slider-arrow">
         <img src="images/pattern_arrow2.png" alt="sliderArrow1">
         <img src="images/pattern_arrow1.png" alt="sliderArrow2">
         <img src="images/pattern_arrow3.png" alt="sliderArrow3">
      </div> --}}
      <div class="slider-wrapper d-table">
         <div class="slider-inner d-table-cell">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <div class="slider-content">
                        <h1>CONNECT,<br>
                           COLLABORATE &<br>
                           LEARN.
                        </h1>
                        <p>Experience Real-time sharing and Engagement through video, calls, messaging, chat, slides and screens.</p>
                        <a href="#" class="btn btn-warning">SIGN UP, ITS FREE</a>
                         <a href="#" class="btn btn-primary">SEE PRICING</a>
                     </div>
                  </div>
                  <!-- Col end -->
                  <div class="col-md-6">
                  
                  </div>
                  <!-- col end -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Container End -->
         </div>
         <!-- Slider Inner End -->
      </div>
      <!-- Slider Wrapper End -->
   </div>
   <!-- Slider 2 end -->


   {{-- <div class="slider-3">
      <div class="slider-arrow">
         <img src="images/pattern_arrow2.png" alt="sliderArrow1">
         <img src="images/pattern_arrow1.png" alt="sliderArrow2">
         <img src="images/pattern_arrow3.png" alt="sliderArrow3">
      </div>
      <div class="slider-wrapper d-table">
         <div class="slider-inner d-table-cell">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <img src="{{asset('images/sliders/slider1.jpg')}}" alt="" class="img-fluid slider-img">
                  </div>
                  <!-- Col end -->

                  <div class="col-md-6">
                     <div class="slider-content">
                        <h1>We serve best
                           <span>Local SEO</span> service </h1>
                        <p>Start working with an company that provide everything you need to generate awareness, drive traffic,
                           connect with customers, and increase sales montes</p>
                        <a href="#" class="btn btn-dark">Free Analysis</a>
                     </div>
                     <!-- End Slider Content -->
                  </div>
                  <!-- col end -->
               </div>
               <!-- Row End -->
            </div>
            <!-- COntainer End -->
         </div>
         <!-- Slider Inner End -->
      </div>
      <!-- Slider Wrapper End -->
   </div>  --}}
   <!-- Slider 3 end -->
</div>
<!-- End Carousel -->


<section id="tw-features" class="tw-features-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h3>Secure Communication & Collaboration all in one<br> Unified Platform</h3>
            <br>
            <p style="color:#060646">QXP maximizes productivity through reliable tools tailor-made for meeting and learning,<br> Anytime, Anywhere, Across Any Device</p>
         </div>

      </div>
      {{-- end of Row 1 --}}
      <div class="row">
         <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            <div class="features-box">
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/icons/academyIcon.svg" alt="">
                  </div>
                  <!-- End Features icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3 style="color: #f4ba00">Academy</h3>
               <p>For Pre-primary, Primary and Secondary Education
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
            <!-- End Single Features -->
         </div>
         <!-- End of Academy -->
         <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".4s">
            <div class="features-box">
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/feature2.png" alt="">
                  </div>
                  <!-- End Features Icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3>SEO Optimization</h3>
               <p>Start working with an company that provide everything you need to any create awareness drive
               </p>
               <a href="#" class="tw-readmore">Read More
                  <i class="fa fa-angle-right"></i>
               </a>
               
            </div>
            <!-- End Single Features -->
         
         </div>
         <!-- End of higher ed -->
         <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
            <div class="features-box">
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/feature3.png" alt="">
                  </div>
                  <!-- End Features Icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3>SEO Management</h3>
               <p>Start working with an company that provide everything you need to any create awareness drive
               </p>
               <a href="#" class="tw-readmore">Read More
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
            <!-- End Single Features -->
         </div>
         <!-- End Meering  -->
         <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
            <div class="features-box">
               <div class="features-icon d-table">
                  <div class="features-icon-inner d-table-cell">
                     <img src="images/feature3.png" alt="">
                  </div>
                  <!-- End Features Icon inner -->
               </div>
               <!-- End Features Icon -->
               <h3>SEO Management</h3>
               <p>Start working with an company that provide everything you need to any create awareness drive
               </p>
               <a href="#" class="tw-readmore">Read More
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
            <!-- End Single Features -->
         </div>
         {{-- end Business --}}
      </div>
      <!-- End Row 2 -->
   </div>
</section>
<!-- End Features section -->



<section id="tw-intro" class="tw-intro-area">
   <div class="row">
      <div class="container text-center">
         <h3>Why QXP?</h3>
         <hr>
      </div>
   </div>
   <!-- End Ellipse Pattern -->
   <div class="container">
      <div class="row">
         <div class="tw-ellipse-pattern col-lg-6">
            <div class="container">
               <div class="row">
                 <div class="col-md-1">
                 <img src="{{asset('images/icons/lgIcon.svg')}}">
                 </div>
                 <div class="col-md-11">
                  <h3>Integrated Platform</h3>
                  <p>One unified platform for all your communication & collaboration needs.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Reliable and Secure</h3>
                   <p>Our platform provides video, voice, messaging and screen securely. Safeguarding customer data and privacy is paramount in our operations and processes.</p>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Integrated Platform</h3>
                   <p>Our platform provides video, voice, messaging and screen securely. Safeguarding customer data and privacy is paramount in our operations and processes.</p>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Light on Connectivity
                  </h3>
                   <p>QXP allows users with strong or weak internet connectivity to share and engage , anytime, anywhere, across any device.</p>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                  <img src="{{asset('images/icons/lgIcon.svg')}}">
                  </div>
                  <div class="col-md-11">
                   <h3>Global Coverage, Yet Local Experience
                  </h3>
                   <p>QXP offers unmetered calling across the globe with superior voice quality and uptime. Users can also pay in their prefered currency.</p>
                   </div>
                </div>
            </div>
         </div>
     
         <div class="col-lg-6 ml-auto col-md-12 wow fadeInRight" data-wow-duration="1s">
         <img src="{{asset('images/featured/Asset1.png')}}" width="600">
         </div>
         <!-- End Col -->
      </div>
   </div>
   <!-- End Container -->
</section>
<!-- Intro section End -->


<section id="tw-facts" class="tw-facts">
   <div class="container"> 
      <div class="row">
         <div class="facts">
         <h3>QXP Features</h3>
         <p>We Have You Covered for All Your Workplace, Collaboration and Training Needs.</p>
         </div>
      </div>   
      <br>  
      <!-- Row End -->
      <div class="row">
         <div class="col-md-4"> 
               <div class="facts-img">
                  <img src="{{asset('images/icons/005-video-call-2.svg')}}" width="50" height="60">           
                  <span>Video & Audio Conferencing</span>
               </div>
               <br>
               <div class="facts-img">
                  <img src="{{asset('images/icons/001-mobile.svg')}}" width="50" height="60">           
                  <span>Easy-to-Use Mobile App</span>
               </div>
               <br>
               <div class="facts-img">
                  <img src="{{asset('images/icons/002-videoconference.svg')}}" width="50" height="60">           
                  <span>Breakout Rooms</span>
               </div>
               <br>
               <div class="facts-img">
                  <img src="{{asset('images/icons/003-video-call-1.svg')}}" width="50" height="60">           
                  <span>Comprehensive Recording</span>
               </div>
         </div>
         <div class="col-md-4"> 
            <div class="facts-img">
               <img src="{{asset('images/icons/012-online-learning.svg')}}" width="50" height="60">           
               <span>Learning Management System</span>
            </div>
            <br>
            <div class="facts-img">
               <img src="{{asset('images/icons/003-sharing.svg')}}" width="50" height="60">           
               <span>Screen Sharing</span>
            </div>
            <br>
            <div class="facts-img">
               <img src="{{asset('images/icons/007-poll.svg')}}" width="50" height="60">           
               <span>Polling & Audience Evaluation</span>
            </div>
            <br>
            <div class="facts-img">
               <img src="{{asset('images/icons/011-report.svg')}}" width="50" height="60">           
               <span>Detailed Analytics & Reporting</span>
            </div>
         </div>
         <div class="col-md-4"> 
            <div class="facts-img">
               <img src="{{asset('images/icons/010-user-interface.svg')}}" width="50" height="60">           
               <span>Simple, Intuitive User Interface</span>
            </div>
            <br>
            <div class="facts-img">
               <img src="{{asset('images/icons/009-record.svg')}}" width="50" height="60">           
               <span>Live Video Streaming</span>
            </div>
            <br>
            <div class="facts-img">
               <img src="{{asset('images/icons/022-reliability.svg')}}" width="50" height="60">           
               <span>Support & Security</span>
            </div>
            <br>
            <div class="facts-img">
               <img src="{{asset('images/icons/013-board.svg')}}" width="50" height="60">           
               <span>Multi User White Board</span>
            </div>
      </div>

      </div>
   </div>
   <!-- Container End -->
</section>

<!-- End Tw Client -->
@endsection