@extends('layouts.home')

@section('main')
    <div class="qxp-header-row text-center">
        <h2>Our Pricing and Plans</h2>
        <p>Simple and Predictable Pricing</p>
    </div>
    <div class="container">
      <div class="row">
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
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-md-6">
               <div class="qxp-price-Header">
                 <h3>Subject Matter Experts</h3>
               </div>
               <div class="price-body">
                <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">20</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
                <div class="text-center">
                  <button class="qxp-btn-dark">GET IT</button>
                 </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header">
                <h3>Student</h3>
              </div>
              <div class="price-body">
               <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">10</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
               <div class="text-center">
               <button class="qxp-btn-dark">GET IT</button>
              </div>
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
                <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">20</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
                <div class="text-center">
                  <button class="qxp-btn-dark-academy">GET STARTED</button>
                 </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header-academy">
                <h3>Student</h3>
              </div>
              <div class="price-body">
               <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">10</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
               <div class="text-center">
               <button class="qxp-btn-dark-academy">GET STARTED</button>
              </div>
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
                <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">5</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
                <div class="text-center">
                  <button class="qxp-btn-dark-academy">GET STARTED</button>
                 </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header-higher">
                <h3>Student</h3>
              </div>
              <div class="price-body">
               <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">20</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
               <div class="text-center">
               <button class="qxp-btn-dark-academy">GET STARTED</button>
              </div>
             </div>
           </div>
          </div>
        </div>
        <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
          <div class="row">
            <div class="col-md-6">
               <div class="qxp-price-Header">
                 <h3>Subject Matter Experts</h3>
               </div>
               <div class="price-body">
                <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">20</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
                <div class="text-center">
                  <button class="qxp-btn-dark">GET IT</button>
                 </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="qxp-price-Header">
                <h3>Student</h3>
              </div>
              <div class="price-body">
               <p style="text-align: center"><sup style="color: #060646; font-size:20px">USD</sup><strong style="color: #060646;font-size:30px; font-weight:600">10</strong> <sup style="color: #060646; font-size:20px">Month</sup></p>
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
               <div class="text-center">
               <button class="qxp-btn-dark">GET IT</button>
              </div>
             </div>
           </div>
          </div>
        </div>
      </div>
    </div>

@endsection