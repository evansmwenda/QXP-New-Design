@extends('layouts.home')

@section('main')
<section class="access-resource-section">
    <div class="access-resource-header-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="access-resource-header-content">
                        <img src="https://qxp-global.com/images/logo/logo.svg" alt=""><hr>
                        <br>
                        <h2 style="color: #000">QXP for the Deaf and Hard of Hearing</h2>
                    <h6 style="color: #060646">Use these tips to create the collaboration experience that’s right for you.</h4>
                     In a physical meeting, you’re able to see each other, take notes, talk, share content, and use a whiteboard. In a virtual meeting, you can do all those things – just a little differently.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="access-resource-content-header-img">
                        <img src="{{asset('images/featured/deaf-person-technology.jpg')}}" alt="deaf-person-technology">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="access-resource-content">
            <div class="row">
                <div class="col-md-6">
                    <h3>1.“Pin” Your Interpreter's Video</h3>
                    <p>By default, QXP displays the video of whoever is speaking and switches as others begin to talk. However, hosts can “pin” anyone’s video, so they always show regardless of who’s speaking.</p>
                    <p style="color: #060646"> <strong>When working with sign language interpreters, pin their video, so you can always see what’s being discussed.</strong> </p>
                </div>
                <div class="col-md-6">
                    <img src="http://qxp.blackbirddigilab.com/wp-content/uploads/elementor/thumbs/for-trainers-ox5crkw2fvzrqx4t1k2oqukvs3dmhrb0xyqhfclapc.jpg" title="For Trainers" alt="for trainers">
                </div>
            </div>
        </div>
        <hr>
        <div class="access-resource-content">
            <div class="row">
                <div class="col-md-6">
                    <img src="http://qxp.blackbirddigilab.com/wp-content/uploads/elementor/thumbs/unrecognizable-black-man-watching-business-webinar-6PHHUTUsd-owk5rm32q2f1hfvyodlp6amkmlhnvldr45gty7mb8w.jpg" title="For Trainers" alt="for trainers">
                </div>
                <div class="col-md-6">
                    <h3>2. Record your meetings and access them later</h3>
                    <p>Recording a meeting is a great way to refer to what was said or catch up on anything you missed. To start recording, the hosts can click the record button in the control bar.</p>
                    <p style="color: #060646;"> <strong> Now, you and other attendees can go back and watch meeting recordings so no one misses a thing.</strong></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="access-resource-content">
            <div class="row">
                <div class="col-md-6">
                    <h3>3. Enable captions</h3>
                    <p>XQP allow people in a meeting to enable closed captions so that anyone can read what is being said.</p>
                    <p style="color: #060646;"> <strong> Now, you and other attendees can listen and read meeting captions so no one misses a thing.</strong></p>
                </div>
                <div class="col-md-6">
                    <img src="http://qxp.blackbirddigilab.com/wp-content/uploads/elementor/thumbs/for-business-ox5c9wjbx1snewt59f09ct5tm8i4qo4quh2rj0stps.jpg" title="For Trainers" alt="for trainers">
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="banner-footer-cta">
        Need Help Getting Started
        <hr>
        <br>
        <button class="btn btn-warning">Get Started</button>
    </div>
</section>
@endsection