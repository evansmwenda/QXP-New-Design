@extends('layouts.home')

@section('main')

    <div class="meeting-landing-pg-container">

        {{-- first section --}}
        <div class="container landing-pg">
            <div class="row landing-pg">
                <div class="col-md-4">
                    <div class="meeting-landing-pg-desc business">
                        <h2>Welcome to <span style="color: #f5ba00"> QXP</span> Academy</h2>
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
                        {{-- <img src="http://127.0.0.1:8000/images/meeting-landing-pg/QXP-meetings-landing-desktop.png" alt=""> --}}
                        <img src="{{asset('images/academy/academy-dash-laptop.png')}}" alt="">
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
                        
                        <img src="{{asset('images/academy/academy-dash-desktop.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img-banner-desc">
                        <div class="desc-content-meeting-logo"><img src="{{asset('images/logo/bgAsset-3-2.svg')}}" alt=""></div>
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
        
        {{-- second section --}}
        <div class="desc-bg-img-academy" id="academy-link">
            <div class="container desc-content-meeting">

                <div class="row">
                    <div class="facts" style="margin: 0px, 15px;">
                        <h3 class="yellow">QXP Meeting Features</h3>
                        <p>We Have You Covered for All Your Workplace, Collaboration and Training Needs.</p>
                    </div>
                </div>
                {{-- 1st row --}}
                <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/019-instructor.svg')}}" alt=""></div>
                        <h4 style="color:  #f5ba00;">Join from anyplace</h4>
                        <p>HD video and audio provide exceptional clarity and quality to virtual and hybrid classes.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                    <div><img src="{{asset('images/icons/013-video-conference-5.svg')}}" alt=""></div>
                        <h4 style="color: #f5ba00;">Quality Web Audio</h4>
                        <p>Students easily access learning anytime, anywhere, on Any device or strength of connection.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/011-video-conference-3.svg')}}" alt=""></div>
                        <h4 style="color:  #f5ba00;">High Definition Video</h4>
                        <p>Simple user management and single sign on make video a seamless component of the learning experience.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/012-video-conference-4.svg')}}" alt=""></div>
                        <h4 style="color: #f5ba00;">Screen Sharing</h4>
                        <p>Session recording and automatic transcription allow students to learn at their own pace.</p>
                    </div>
                </div>
                {{-- 2nd row --}}
                {{-- <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/018-presentation.svg" alt=""></div>
                        <h4 style="color:  #f5ba00;">Transcript Recording</h4>
                        <p>Unearth important meeting highlights with media recording and automated transcribing.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/021-training.svg" alt=""></div>
                        <h4 style="color:  #f5ba00;">Messaging and Team Chat</h4>
                        <p>Instantly react and interact with your colleagues either publicly or in private with enabled team chat.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="http://127.0.0.1:8000/images/icons/015-online-meeting.svg" alt=""></div>
                        <h4 style="color: #f5ba00;">Security Compliant</h4>
                        <p>Safeguarding our client’s data and maintaining their privacy is paramount with end-to-end encryption.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                </div> --}}
                {{-- 3rd row --}}
                {{-- <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="https://higher-ed.qxp-global.com/images/icons/019-instructor.svg" alt=""></div>
                        <h4 style="color: #c92519;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                </div> --}}

            </div>
        </div>

        {{-- end of second section --}}

    </div>


@endsection