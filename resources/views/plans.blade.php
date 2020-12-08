@extends('layouts.home')

@section('main')
    <div class="qxp-header-row">
        <h2>Our Pricing and Plans</h2>
        <p>Simple and Predictable Pricing</p>
    </div>
    <div class="container">
      <div class="row plans">
        <ul class="nav nav-tabs qxp-tab" id="myTab" role="tablist">
         
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Meetings</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Academy</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Higher Ed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="false">For Business</a>
          </li>
        </ul>
      </div>
      @if(Session::has("flash_message_error")) 
          <div class="alert alert-error alert-block" style="background: #fd7e14">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong style="color: #fff">{!! session('flash_message_error') !!}</strong>
          </div> 
      @endif 
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-md-6">
               <div class="qxp-price-Header-meeting">
                 <h3>Basic</h3>
                 <p>Personal Meeting</p>
               </div>
               <div class="price-body">
 
                <h2 style="text-align: center;color:#11BECC; font-weight:700;font-size:50px">FREE</h2>
               <br>
                <div class="text-center">
                  <a href="/login-for-meeting"><button class="qxp-btn-dark"  style="background: #11BECC">GET STARTED</button></a>
                 </div>
                <ul>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Host up to 100 participants</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Unlimited 1 to 1 meetings</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span> 40 minutes limit on group meeting</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Unlimited number of meetings</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>HD Video (up to 720p HD Video) + HD Audio</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Personal room or meeting ID*** Create your own online meeting room.</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span> Instant or scheduled meetings</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Private and group chat with Raise hands feature</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Breakout Rooms***Video Breakout Rooms allow you to split your QXP meeting into many separate sessions for discussion, projects and more.</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span> Screen share & Whiteboard</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span> Secure Socket Layer (SSL) encryption, AES 256 bits encryption</span>
                  </li>
                 
                </ul>

              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header-meeting">
                <h3>Pro</h3>
                <p>Small Teams</p>
              </div>
              <div class="price-body">
               <h2 style="text-align: center"><sup style="color: #11BECC; font-size:20px">KES</sup><strong style="color: #11BECC;font-size:40px; font-weight:700">1,300</strong> <sup style="color: #11BECC; font-size:20px">Month</sup></h2>
               <br>
               <div class="text-center">
                <button class="qxp-btn-dark" onclick="meetingPro()" data-toggle="modal" data-target="#exampleModalCenter" style="background: #11BECC">GET IT</button>
               </div>
               <ul>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>Host up to 100 participants</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>Unlimited 1 to 1 meetings</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span> 24hrs meeting duration</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>Unlimited number of meetings</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>HD Video (up to 720p HD Video) + HD Audio</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>Personal room or meeting ID*** Create your own online meeting room.</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span> Instant or scheduled meetings</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>Private and group chat with Raise hands feature</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>Breakout Rooms***Video Breakout Rooms allow you to split your QXP meeting into many separate sessions for discussion, projects and more.</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span> Screen share & Whiteboard</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span> Secure Socket Layer (SSL) encryption, AES 256 bits encryption</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span>User management</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                  <span> Reporting</span>
                </li>
              </li>
              <li>
                <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                <span>  Admin features control</span>
              </li>
              <li>
                <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                <span>  1GB of cloud recording</span>
              </li>
              <li>
                <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                <span>  Custom Personal Meeting ID</span>
              </li>
               </ul>

             </div>
           </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="row">
            <div class="col-md-6">
               <div class="qxp-price-Header-academy">
                 <h3>Teachers</h3>
               </div>
               <div class="price-body">
                <h2 style="text-align: center"><sup style="color: #F4BA00; font-size:20px">KES</sup><strong style="color: #F4BA00;font-size:50px; font-weight:600">1,000</strong> <sup style="color: #F4BA00; font-size:20px">Month</sup></h2>
                <div class="text-center">
                  <button class="qxp-btn-dark" onclick="meetingTeacher()" data-toggle="modal" data-target="#exampleModalCenter" style="background: #F4BA00">GET IT</button>
                 </div>
                <ul>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Numerous Courses Available</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Mobile Learning Experience</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Personal Dashboard</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Customer Support by Phone and Email Address</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Submit Documents Electronically</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Course Catalog</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Storage space 1GB</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Upload and Reuse course content</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Publish the Course and Course Materials</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span> Create Tests and Surveys with Automated Grading</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Multiple reporting levels</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Visual Reports</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Automatic Assessment Grading & Feedback</span>
                  </li>
                </ul>

              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header-academy">
                <h3>Student</h3>
              </div>
              <div class="price-body">
                <h2 style="text-align: center"><sup style="color: #F4BA00; font-size:20px">KES</sup><strong style="color: #F4BA00;font-size:50px; font-weight:600">200</strong> <sup style="color: #F4BA00; font-size:20px">Month</sup></h2>
                 <div class="text-center">
                  <button class="qxp-btn-dark" onclick="meetingStudent()" data-toggle="modal" data-target="#exampleModalCenter" style="background: #F4BA00">GET IT</button>
                 </div>
                <ul>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Numerous Courses Available</span>
                 </li>
                 <li>

                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Mobile Learning Experience</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Personal Dashboard</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Customer Support by Phone and Email Address</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Submit Documents Electronically</span>
                 </li>

                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Storage space 1GB</span>
                 </li>
                 
               </ul>

             </div>
           </div>
          </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="row">
            <div class="col-md-6">
               <div class="qxp-price-Header-higher">
                 <h3>Lecturer</h3>
               </div>
               <div class="price-body">
                <h2 style="text-align: center"><sup style="color: #71CA52; font-size:20px">KES</sup><strong style="color: #71CA52;font-size:50px; font-weight:600">2,000</strong> <sup style="color: #71CA52; font-size:20px">Month</sup></h2>
                <div class="text-center">
                  <button class="qxp-btn-dark" onclick="higherTeacher()" data-toggle="modal" data-target="#exampleModalCenter" style="background: #71CA52">GET IT</button>
                 </div>
                <ul>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Numerous Courses Available</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Mobile Learning Experience</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Personal Dashboard</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Customer Support by Phone and Email Address</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Submit Documents Electronically</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Course Catalog</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Storage space 1GB</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Upload and Reuse course content</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Publish the Course and Course Materials</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span> Create Tests and Surveys with Automated Grading</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Multiple reporting levels</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Visual Reports</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Automatic Assessment Grading & Feedback</span>
                  </li>
                </ul>

              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header-higher">
                <h3>Students</h3>
              </div>
              <div class="price-body">
                <h2 style="text-align: center"><sup style="color: #71CA52; font-size:20px">KES</sup><strong style="color: #71CA52;font-size:50px; font-weight:600">500</strong> <sup style="color: #71CA52; font-size:20px">Month</sup></h2>
                <div class="text-center">
                  <button class="qxp-btn-dark" onclick="higherStudent()" data-toggle="modal" data-target="#exampleModalCenter" style="background: #71CA52">GET IT</button>
                 </div>
                <ul>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Numerous Courses Available</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Mobile Learning Experience</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Personal Dashboard</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Customer Support by Phone and Email Address</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Submit Documents Electronically</span>
                 </li>

                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Storage space 1GB</span>
                 </li>
                 
               </ul>

             </div>
           </div>
          </div>
        </div>
        <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
          <div class="row">
            <div class="col-md-6">
               <div class="qxp-price-Header">
                 <h3>SME</h3>
               </div>
               <div class="price-body">
                <h2 style="text-align: center"><sup style="color: #C92519; font-size:20px">KES</sup><strong style="color: #C92519;font-size:50px; font-weight:600">2,000</strong> <sup style="color: #C92519; font-size:20px">Month</sup></h2>
                <div class="text-center">
                  <button class="qxp-btn-dark" onclick="sme()" data-toggle="modal" data-target="#exampleModalCenter" style="background: #C92519">GET IT</button>
                 </div>
                <ul>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Numerous Courses Available</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Mobile Learning Experience</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Personal Dashboard</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Customer Support by Phone and Email Address</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Submit Documents Electronically</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Course Catalog</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Storage space 1GB</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Upload and Reuse course content</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Publish the Course and Course Materials</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span> Create Tests and Surveys with Automated Grading</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Multiple reporting levels</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Visual Reports</span>
                  </li>
                  <li>
                    <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                    <span>Automatic Assessment Grading & Feedback</span>
                  </li>
                </ul>

              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header">
                <h3>Learners</h3>
              </div>
              <div class="price-body">
                <h2 style="text-align: center"><sup style="color: #C92519; font-size:20px">KES</sup><strong style="color: #C92519;font-size:50px; font-weight:600">1,000</strong> <sup style="color: #C92519; font-size:20px">Month</sup></h2>
                <div class="text-center">
                  <button class="qxp-btn-dark" onclick="learner()" data-toggle="modal" data-target="#exampleModalCenter" style="background: #C92519">GET IT</button>
                 </div>
                <ul>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Numerous Courses Available</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Mobile Learning Experience</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Personal Dashboard</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Customer Support by Phone and Email Address</span>
                 </li>
                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Submit Documents Electronically</span>
                 </li>

                 <li>
                   <i aria-hidden="true" class="fa fa-check-circle-o fa-1x"></i>
                   <span>Storage space 1GB</span>
                 </li>
                 
               </ul>

             </div>
           </div>
          </div>
        </div>
      </div>
    </div>
{{-- CHECK MODAL --}}
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      {{-- <div class="modal-header" style="text-align: center">
        <h5 class="modal-title" id="exampleModalLongTitle">GET STARTED</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}
      <div class="modal-body price-check">
        <h3>Please enter your email address</h3>
      
        <form action="/pricing_plan" method="post">
         <!-- Material input -->
         @csrf
          <div class="md-form">
            <label >let's check if you have a account with QXP to get you started</label>
            <input type="hidden" id="amount" name="amount">
            <input type="hidden" id="plan" name="plan">
            <input type="text"  name="email" required placeholder="Email Address" class="form-control">
           
          </div>
        
        <i>If you are first time user, please click here to sign up</i>
      </div>
      <div class="modal-footer">
  
        <button type="submit" class="btn btn-primary">Next</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script type="text/javascript">
function meetingPro(){
  document.getElementById('amount').value="1300";
  document.getElementById('plan').value="Meetings Pro";
}
function meetingTeacher(){
  document.getElementById('amount').value="1000";
  document.getElementById('plan').value="Academy Teacher";
}
function meetingStudent(){
  document.getElementById('amount').value="200";
  document.getElementById('plan').value="Academy Student";
}
function higherTeacher(){
  document.getElementById('amount').value="2000";
  document.getElementById('plan').value="Higher Education Lecturer";
}
function higherStudent(){
  document.getElementById('amount').value="500";
  document.getElementById('plan').value="Higher Education Student";
}
function sme(){
  document.getElementById('amount').value="2000";
  document.getElementById('plan').value="Business SME";
}
function learner(){
  document.getElementById('amount').value="1000";
  document.getElementById('plan').value="Business Learner";
}


</script>
@endsection