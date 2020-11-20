@extends('layouts.home')

@section('main')

<div class="leader-top">
    <div class="leader-spacer">
        <h2>Leadership Team</h2>
        <p>At every level we seek out intellectual and driven individuals with strong line management experience who combine analytical precision with a human touch.</p>
    </div>
    
</div>
<div class="row">
    <div class="profiles">
        <img src="{{asset('images/profiles/kevin.jpg')}}" alt="">
            <h3>Kevin Baraza</h3>
            <h4>Founder</h4>   
            <span class="fa fa-linkedin"></span>     
    </div>
        <div class="profiles">
        <img src="{{asset('images/profiles/mary.jpg')}}" alt="">
            <h3>Mary Kinyua</h3>
            <h4>Co-Founder</h4>  
            <span class="fa fa-linkedin"></span>
    </div>


    <div class="profiles">
        <img src="{{asset('images/profiles/kevin.jpg')}}" alt="">
            <h3>Sam Njau</h3>
            <h4>Co-Founder</h4> 
            <span class="fa fa-linkedin"></span>

     </div>
</div>
<div class="row">
    <div class=" profiles">
        <img src="{{asset('images/profiles/george.jpg')}}" alt="">
            <h3>George Kahinga</h3>
            <h4>Co-Founder</h4>  
            <span class="fa fa-linkedin"></span>
    </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/kirimi.jpg')}}" alt="">
            <h3>Kirimi Mpungu</h3>
            <h4>Co-Founder</h4>
            <span class="fa fa-linkedin"></span>

           </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/grace.jpg')}}" alt="">
            <h3>Grace Muinde</h3>
            <h4>Co-Founder</h4>  
            <span class="fa fa-linkedin"></span>

     </div>
</div>

<div class="row">
    <div class="profiles">
        <img src="{{asset('images/profiles/doreen.png')}}" alt="">
            <h3>Doreen Gakii</h3>
            <h4>CO-Founder</h4> 
            <span class="fa fa-linkedin"></span> 

    </div>
        <div class="profiles">
        <img src="{{asset('images/profiles/mathew.png')}}" alt="">
            <h3>Mathew Mwangi</h3>
            <h4>CO-Founder</h4>  
            <span class="fa fa-linkedin"></span>

    </div>



</div>


@endsection