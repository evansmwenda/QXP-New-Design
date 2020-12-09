@extends('layouts.home')

@section('main')
@if(Session::has("flash_message_error")) 
<div class="alert alert-error alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{!! session('flash_message_error') !!}</strong>
</div> 
@endif 


@if(Session::has("flash_message_success")) 
<div class="alert progress-bar-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong style="color:white;">{!! session('flash_message_success') !!}</strong>
</div> 
@endif
<div class="container">
    <div class="blog-post-container">
        <div class="row">
            <div class="col-md-12">
                    <h2>Have a comment or question for us?</h2>
                    <h6>Get in touch with us here, and our team will get back to you soon.</h6>
            </div>
        </div>
    </div>
    
    <div class="news-features-content">
        <div class="row">

            <div class="col-md-6">
                <div class="contact-us-another">
                    <form action="/contactpost" method="post">
                        @csrf
                        <h4 style="color: #060646">Contact QXP Support</h4>
                        <table style="width:100%;max-width:550px;border:0;" cellpadding="8" cellspacing="0">
                           
                            <tr>
                                <td>
                                    Full Name<span style="color: red"> *<input name="name" placeholder="Full Name" required type="text" maxlength="60" style="width:100%;" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Email<span style="color: red"> *<input name="email" placeholder="Email Address" required type="email" maxlength="90" style="width:100%;" />
                                </td> 
                            </tr>
 
                           <tr>
                                <td>
                                    Company Name<span style="color: red"> <input name="company"  placeholder="Company Name" type="text" maxlength="60" style="width:100%;" />
                                </td>
                            </tr>   
                            
                            <tr>
                                <td>
                                    Phone number<span style="color: red"> *<input name="number" placeholder="Phone Number" required type="number" maxlength="43" style="width:100%;" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Subject<span style="color: red"> *<input name="subject" placeholder="Subject" type="text" maxlength="60" style="width:100%;" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description<span style="color: red"> *<textarea name="message" rows="7" cols="40" style="width:100%;"></textarea>
                                </td>
                            </tr>

                            {{-- <tr>
                                <td>
                                    <label for="Language">Your Language <span style="color: red"> *</span>:</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name = "dropdown" style="width:100%;">
                                        <option value = "select language" selected>Select your Language</option>
                                        <option value = "English" selected>English</option>
                                        <option value = "Kiswahili">Kiswahili</option>
                                        <option value = "Spanish">Spanish</option>
                                        <option value = "Chinese" selected>Chinese</option>
                                        <option value = "German" selected>German</option>
                                     </select>
                                </td>
                            </tr> --}}
                            
                            <tr> 
                                <td>
                                    {{-- <input name="skip_Submit" type="submit" value="Submit" /> --}}
                                    <button class="contact-us-btn">Send</button>
                                </td> 
                            </tr>
                        </table>
                            
                    </form>
                </div>
            </div>
    
                <div class="col-md-6">
                   <div class="contact-us-content">
                        <h6 style="color: #060646; text-align:left;">Answers to some of the frequently asked questions</h6>
                       <ul>
                           <li data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-angle-right"></span>Getting Started with XQP</li>
                            <div class="collapse" id="collapseExample">
                                <p>With everyone moving online and relying heavily on conferencing to carry out meetings, QXP is an easy, simple and flexible conferencing solution that cuts down the hassle associated with conferencing and makes it easier on you. You can access QXP Global here http://qxp-global.com/</p>
                            </div>
                            <hr>

                            <li data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2"><span class="fa fa-angle-right"></span>How do I sign up for QXP</li>
                                <div class="collapse" id="collapseExample2">
                                    <p>You can sign up for a free QXP account here; http://qxp-global.com/user/register</p>
                                </div>
                            <hr>

                            <li data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"><span class="fa fa-angle-right"></span>How do I reset my password?</li>
                                <div class="collapse" id="collapseExample3">
                                    <p> You can reset your password here.</p>
                                </div>
                            <hr>

                            <li data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4"><span class="fa fa-angle-right"></span>Where do I find my meeting/class recording?</li>
                                <div class="collapse" id="collapseExample4">
                                    <p> Recordings are saved on the recording portal on the cloud. You will also receive a link to the recording once the meeting is over.</p>
                                </div>
                            <hr>

                            <li data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5"><span class="fa fa-angle-right"></span>What is my user role?</li>
                                <div class="collapse" id="collapseExample5">
                                    <p> You can find all your account details on the user panel. Your subscriptions, role and all information related to your profile are found here.</p>
                                </div>
                        </ul>

                        <div class="contact-us-content support-no">
                            <h5 style="color: #060646">Need to talk to Support?</h5>
                            <h6 style="text-align: left;">Contact us through </h6>
                            <div><i class="fa fa-phone " ></i>(+254) 700 77 99 77 </div> <br>
                            <div><i class="fa fa-envelope" aria-hidden="true"></i>info@qxp-global.com </div>
                        </div>
                    </div>

                </div>
        
        </div>
    </div>

</div>

@endsection