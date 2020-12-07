@extends('layouts.home')

@section('main')

    <div class="meeting-landing-pg-container">

        {{-- first section --}}
        <div class="container landing-pg">
            <div class="row landing-pg">
                <div class="col-md-4">
                    <div class="meeting-landing-pg-desc business">
                        <h2>Welcome to <span style="color: #70c952"> QXP</span> Higher-Ed</h2>
                        {{-- <h6>Welcome to <span>QXP Global</span></h6> --}}
                        <h6> <span style="color: #333"> Immersively | <span style="color:   #70c952">Engaging</span> | Tertiary Education</span></h6>
                        <div class="meeting-business-paragraph">
                            <p>
                                Whether a few or hundreds of students, post-secondary students can attend classes virtually from wherever they are, access learning calendars and schedules, assignments, take tests and interact with their lecturers.
                            </p>
                        </div>
                        <a href="https://higher-ed.qxp-global.com/register">
                            <button style="background-color:   #70c952">Get Started</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="meeting-landing-page">
                        {{-- <img src="http://127.0.0.1:8000/images/meeting-landing-pg/QXP-meetings-landing-desktop.png" alt=""> --}}
                        <img src="{{asset('images/higher-ed/higher-ed-dash-laptop.png')}}" alt="">
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
                        <img src="{{asset('images/higher-ed/higher-ed-dash-desktop.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="img-banner-desc">
                        <div class="desc-content-meeting-logo"><img src="{{asset('images/logo/bgAsset-2-2.svg')}}" alt=""></div>
                        <h2 style="color: #70c952">Connect <span class="dot-colored green"> .</span> People <span class="dot-colored green"> .</span> Together</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu risus quis varius quam quisque id diam. Dolor purus non enim praesent elementum facilisis leo.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        {{-- second section --}}
        <div class="desc-bg-img-higher-ed" id="higher-ed-link">
            <div class="container desc-content-meeting">

                <div class="row">
                    <div class="facts" style="margin: 0px, 15px;">
                        <h3 class="green">QXP Meeting Features</h3>
                        <p>We Have You Covered for All Your Workplace, Collaboration and Training Needs.</p>
                    </div>
                </div>
                {{-- 1st row --}}
                <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                    <div><img src="{{asset('images/icons/019-instructor.svg')}}" alt=""></div>
                        <h4 style="color:  #70c952;">Large Lecture Support</h4>
                        <p>QXP enables scores of students to attend virtual classes and interact with lecturers.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/013-video-conference-5.svg')}}" alt=""></div>
                        <h4 style="color: #70c952;">Full HD Video & Clear Audio</h4>
                        <p>Students can see class content live hear and engage with each other.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                    <div><img src="{{asset('images/icons/011-video-conference-3.svg')}}" alt=""></div>
                        <h4 style="color:  #70c952;">Dynamic Content Sharing</h4>
                        <p>With the click of button, content Can be shared for optimal learning, Discussion and feedback.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/012-video-conference-4.svg')}}" alt=""></div>
                        <h4 style="color: #70c952;">Multiple White Boards</h4>
                        <p>Lecture content can be shared using digital whiteboards to engage the class , share ideas and collaborate.</p>
                    </div>
                </div>
                {{-- 2nd row --}}
                <div class="row desc-content-meeting">
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/018-presentation.svg')}}" alt=""></div>
                        <h4 style="color:  #70c952;">Breakout Sessions</h4>
                        <p>Students easily access learning learning anytime, anywhere, on Any device or strength of connection.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/021-training.svg')}}" alt=""></div>
                        <h4 style="color:  #70c952;">Learning Management Systems</h4>
                        <p>Students easily access learning anytime, anywhere, on Any device or strength of connection.</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/015-online-meeting.svg')}}" alt=""></div>
                        <h4 style="color: #70c952;">Record & Replay</h4>
                        <p>Pace yourself, review and revise. Platform with recorded classes</p>
                    </div>
                    <div class="col-md-3 desc-content">
                        <div><img src="{{asset('images/icons/019-instructor.svg')}}" alt=""></div>
                        <h4 style="color: #70c952;">Assessment Engine & Certification</h4>
                        <p>QXP’s Higher Ed Online through different test types and certification</p>
                    </div>
                </div>
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