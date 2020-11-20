@extends('layouts.home')

@section('main')

<div class="leader-top">
    <div class="leader-spacer">
        <h2>Leadership Team</h2>
        <p>At every level we seek out intellectual and driven individuals with strong line management experience who combine analytical precision with a human touch.</p>
    </div>
    
</div>
<div class="row">
    <div class="profiles" data-toggle="modal" data-target=".kevin">
        <img src="{{asset('images/profiles/kevin.jpg')}}" alt="">
            <h3>Kevin Baraza</h3>
            <h4>Founder</h4>   
            <a href="https://www.linkedin.com/in/kevin-baraza-6a7a1b16/" target="new"><span class="fa fa-linkedin"></span> </a>   
    </div>
            <div class="profiles">
        <img src="{{asset('images/profiles/mathew.png')}}" alt="">
            <h3>Mathew Mwangi</h3>
            <h4>CO-Founder</h4>  
            <a href="https://www.linkedin.com/in/matthew-mwangi-2ba29419/" target="new"><span class="fa fa-linkedin"></span> </a>

          </div>
          <div class="profiles">
            <img src="{{asset('images/profiles/mary.jpg')}}" alt="">
                <h3>Mary Kinyua</h3>
                <h4>Co-Founder</h4>  
                <a href="https://www.linkedin.com/in/mary-kinyua/" target="new"><span class="fa fa-linkedin"></span> </a>
        </div>

</div>
<div class="row">
    <div class=" profiles">
        <img src="{{asset('images/profiles/george.jpg')}}" alt="">~
            <h3>George Kahinga</h3>
            <h4>Co-Founder</h4>  
            <a href="https://www.linkedin.com/in/george-kahinga-muiruri-2bb51344/" target="new"><span class="fa fa-linkedin"></span> </a>
    </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/kirimi.jpg')}}" alt="">
            <h3>Kirimi Mpungu</h3>
            <h4>Co-Founder</h4>
            <a href="https://www.linkedin.com/in/kirimi-mpungu-7823239/" target="new"><span class="fa fa-linkedin"></span> </a>

           </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/grace.jpg')}}" alt="">
            <h3>Grace Muinde</h3>
            <h4>Co-Founder</h4>  
            <a href="https://www.linkedin.com/in/cpa-grace-muinde-a06987163/" target="new"><span class="fa fa-linkedin"></span> </a>

     </div>
</div>
<div class="row">
    <div class="profiles">
        <img src="{{asset('images/profiles/doreen.jpeg')}}" alt="">
            <h3>Doreen Gakii</h3>
            <h4>CO-Founder</h4> 
            <a href="https://www.linkedin.com/in/doreen-gakii-970b2068/" target="new"><span class="fa fa-linkedin"></span> </a> 

    </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/#.jpg')}}" alt="">
            <h3>Sam Njau</h3>
            <h4>Co-Founder</h4> 
            <a href="https://www.linkedin.com/in/sam-njau-9898b189/" target="new"><span class="fa fa-linkedin"></span> </a> 

     </div>
</div>


{{-- DETAILS MODALS --}}

{{-- Login modal preview --}}
<div class="modal fade kevin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content qxp-login">
            <div class="container">
           
                <div class="row">
                    {{-- <span data-dismiss="modal" class="pull-right">x</span> --}}
                 </div>
                 <div class="row profile-modals">
                     <div class="col-md-5">
                        <img src="{{asset('images/profiles/kevin.jpg')}}" alt="">
                     </div>
                     <div class="col-md-7">
                        <h3>Kevin Baraza</h3>
                        <h4>Founder</h4> 
                        <p>A Seasoned business expert acknowledged throughout his career for capacity to cultivate strategic relationships and build trust, while simultaneously steering positive bottom line results. Kevin has worked in many different roles as a Financial Modelling Expert, Strategy Analyst and now sits as a Managing Director</p>
                        <a href="https://www.linkedin.com/in/kevin-baraza-6a7a1b16/  " target="new"><span class="fa fa-linkedin"></span> </a>

                     </div>
                      </div>
            
    
            </div>
       </div>
    </div>
</div>

@endsection