@extends('layouts.home')

@section('main')

    <div class="meeting-landing-pg-container">

        {{-- first section --}}
        <div class="container landing-pg">
            <div class="row landing-pg">
                <div class="col-md-4">
                    <div class="meeting-landing-pg-desc">
                        <h2>Welcome to QXP Meetings</h2>
                        {{-- <h6>Welcome to <span>QXP Global</span></h6> --}}
                        <h6> <span> Anyone | <span style="color: #060646">Anytime</span> | Anywhere</span></h6>
                        <div class="meeting-business-paragraph">
                            <p>
                                Working from home couldn’t be more convenient with the best online meeting software, bringing a whole new meaning to face-to-face and making every connection better.
                                Connect from anywhere with just one click.
                            </p>
                        </div>
                        <a href="#meeting-link">
                            <button>Get Started</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="meeting-landing-page">
                        {{-- <img src="http://127.0.0.1:8000/images/meeting-landing-pg/QXP-meetings-landing-desktop.png" alt=""> --}}
                        <img src="{{asset('images/meeting-landing-pg/QXP-meetings-landing-laptop.png')}}" alt="">
                    </div>
                </div>
            
            </div>
        </div>
        {{-- end of first section --}}
        <hr>
        <div class="container banner">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-banner">
                        <img src="{{asset('images/meeting-landing-pg/QXP-meetings-landing-desktop.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img-banner-desc">
                        <div class="desc-content-meeting-logo"><img src="{{asset('images/logo/bgAsset-4-2.svg')}}" alt=""></div>
                        <h2>Connect <span class="dot-colored"> .</span> People <span class="dot-colored"> .</span> Together</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu risus quis varius quam quisque id diam. Dolor purus non enim praesent elementum facilisis leo.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        {{-- second section --}}
        <div class="desc-bg-img-meeting" id="meeting-link">
            <div class="container desc-content-meeting">

                <div class="row">
                    <div class="facts" style="margin: 0px, 15px;">
                        <h3 class="blue">QXP Meeting Features</h3>
                        <p>We Have You Covered for All Your Workplace, Collaboration and Training Needs.</p>
                    </div>
                </div>
                {{-- 1st row --}}
                <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/005-video-call-2.svg')}}" alt=""></div>
                        <h4 style="color: #060646;">Join from anyplace</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/007-laptop.svg')}}" alt=""></div>
                        <h4 style="color: #060646;">Quality Web Audio</h4>
                        <p>Enjoy unparalleled High Definition Audio for a clear and natural sound.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/009-record.svg')}}" alt=""></div>
                        <h4 style="color: #060646;">High Definition Video</h4>
                        <p>Experience higher resolution, high quality video conferencing solutions.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/003-sharing.svg')}}" alt=""></div>
                        <h4 style="color: #060646;">Screen Sharing</h4>
                        <p>Enable real time collaboration and showcase designs and presentations live with multiple screen sharing.</p>
                    </div>
                </div>
                {{-- 2nd row --}}
                <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/003-video-call-1.svg')}}" alt=""></div>
                        <h4 style="color: #060646;">Transcript Recording</h4>
                        <p>Unearth important meeting highlights with media recording and automated transcribing.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/002-videoconference.svg')}}" alt=""></div>
                        <h4 style="color: #060646;">Messaging and Team Chat</h4>
                        <p>Instantly react and interact with your colleagues either publicly or in private with enabled team chat.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/022-reliability.svg')}}" alt=""></div>
                        <h4 style="color: #060646;">Security Compliant</h4>
                        <p>Safeguarding our client’s data and maintaining their privacy is paramount with end-to-end encryption.</p>
                    </div>
                    {{-- <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #060646;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div> --}}
                </div>
                {{-- 3rd row --}}
                {{-- <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #060646;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #060646;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #060646;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #060646;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                </div> --}}

            </div>
        </div>

        {{-- end of second section --}}

    </div>


@endsection