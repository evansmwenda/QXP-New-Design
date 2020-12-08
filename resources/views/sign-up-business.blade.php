@extends('layouts.home')

@section('main')

<div class="sign-up-regestration-business">
    <div class="container">
        <div class="row">
            <div class="col-md-4 sign-up-cta">
                <h2>7-day FREE Trial! QXP High-Definition Video Conferencing</h2>
                <br>
                Subscribe to QXP Business and get unlimited access for 7 days.
            </div>
            <div class="col-md-8">
                <div class="sign-up-container-business">
                    <img src="https://qxp-global.com/images/logo/bgAsset-1-1.svg" alt=""><hr>
                    {{-- QXP Business Sign Up --}}
                    <form action="">
                        <table style="width:100%;border:0;" cellpadding="8" cellspacing="0">
                           
                            <tr> 
                                <td>
                                    First Name<span style="color: #fd6c03"> *</span><input name="Name" type="text" maxlength="60" style="width:100%;" />
                                </td>
                                <td>
                                    Last Name<span style="color:  #fd6c03"> *</span> <input name="Name" type="text" maxlength="60" style="width:100%;" />
                                </td>
                            </tr>
        
                            <tr>
                                <td>
                                    Business Email<span style="color:  #fd6c03"> *</span><input name="FromEmailAddress" type="text" maxlength="90" style="width:100%;" />
                                </td>
                                <td>
                                    Business Phone<span style="color:  #fd6c03"> *</span><input name="PhoneNumber" type="text" maxlength="43" style="width:100%;" />
                                </td>
                            </tr>
        
                           <tr>
                                <td>
                                    Company Name<span style="color:  #fd6c03"> *</span><input name="Name" type="text" maxlength="60" style="width:100%;" />
                                </td>
                                <td>
                                    Company Size<span style="color: #fd6c03"> *</span><input name="Name" type="text" maxlength="60" style="width:100%;" />
                                </td>
                            </tr> 
                            <tr>
                                <td>Your Country <span style="color:  #fd6c03"> *
                                    <select name = "dropdown" style="width:100%;">
                                        <option value = "select language" selected>Country</option>
                                        <option value = "Kenya" selected>Kenya</option>
                                        <option value = "America">America</option>
                                        <option value = "Uganda">Uganda</option>
                                        <option value = "China" selected>China</option>
                                        <option value = "German" selected>Germany</option>
                                     </select>
                                </td>
                            </tr>
                                
                            
                            <tr> 
                                <td>
                                    {{-- <input name="skip_Submit" type="submit" value="Submit" /> --}}
                                    <button class="contact-us-btn" style="width: 100%">Send</button>
                                </td> 
                            </tr>
                        </table>
                            
                    </form>
                </div>
                
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 reg-business-content">
                <h4>Limitless Access</h4>
                <p>Get unlimited access to all our resources and have seamless video meetings for 7 day trial period</p>
            </div>
            <div class="col-md-4 reg-business-content">
                <h4>Complete Product Features</h4>
                <p>Make every meeting a great one with clear audio and video, screen sharing, media recording and scheduling.</p>
            </div>
            <div class="col-md-4 reg-business-content">
                <h4>Join From Anywhere</h4>
                <p>Start, join and collaborate from any device, anytime anywhere</p>
            </div>
        </div>
        <hr>
    </div>
</div>


@endsection