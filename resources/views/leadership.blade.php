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
            <p>A Seasoned business expert acknowledged throughout his career for capacity to cultivate strategic relationships and build trust, while simultaneously steering positive bottom line results. Kevin has worked in many different roles as a Financial Modelling Expert, Strategy Analyst and now sits as a Managing Director</p>        
    </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/mathew.png')}}" alt="">
            <h3>Mathew Mwangi</h3>
            <h4>CO-Founder</h4>  
            <p>Mathew Mwangi is the Director of Business Administration at Ampito Africa. Aside from being an accomplished entrepreneur, he was the Service Integration Engineer at Liquid Telecom and a Software Engineer at Kenya Data Networks</p>
    </div>

    <div class="profiles">
        <img src="http://0.gravatar.com/avatar/fcf3541949a1700be9f391b9430484b6?s=300&d=mm&r=g" alt="">
            <h3>Sam Njau</h3>
            <h4>Co-Founder</h4> 
            <p>Sam is presently the Head of Operations and Maintenance at Adcare Ltd. With over a decade of experience in Designing, Implementing and Troubleshooting software and hardware solutions he provides Level 3 and Level 2 support for hardware and software manufacturers. Sam previously held the position of Installation Engineer at Icon Telesec Ltd.</p>
     </div>
</div>
<div class="row">
    <div class=" profiles">
        <img src="{{asset('images/profiles/george.jpeg')}}" alt="">
            <h3>George Kahinga</h3>
            <h4>Co-Founder</h4>  
           <p>George is a serial entrepreneur, owner and Director at Systems Hub Limited. Previously, he was a Systems Administrator for Habib Bank Limited.</p>  </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/kirimi.jpg')}}" alt="">
            <h3>Kirimi Mpungu</h3>
            <h4>Co-Founder</h4>
            <p>Kirimi Mpungu is a Business strategist and management expert with a MSc from the University of Liverpool, UK. He previously worked as the Director of Administration at Oserian and prior to that was the General Manager - Strategy at Rift Valley Railways leading the diversification and identification of opportunities.</p>
           </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/grace.jpeg')}}" alt="">
            <h3>Grace Muinde</h3>
            <h4>Co-Founder</h4>  
            <p>Grace is a Finance and Administration Expert serving as a Finance and Admin Manager at Serenity Services Ltd. As a passionate leader and mentor, she applies a multi-disciplinary approach to help organizations accelerate outcomes while creating environments of transparent communications.</p>
     </div>
</div>

<div class="row">
    <div class="profiles">
        <img src="http://0.gravatar.com/avatar/fcf3541949a1700be9f391b9430484b6?s=300&d=mm&r=g" alt="">
            <h3>Doreen Gakii</h3>
            <h4>CO-Founder</h4>  
            <p>Doreen is a programmer turned software sales engineer serving as the current Managing Director of Systems Hub Limited. She previously headed the Sales and Commercial team at Systems Hub limited and prior to that was an Accounts Manager at Techno Brain Group driving sales targets worth millions in dollars.</p>
    </div>
    <div class="profiles">
        <img src="{{asset('images/profiles/mary.jpg')}}" alt="">
            <h3>Mary Kinyua</h3>
            <h4>Co-Founder</h4>  
            <p>With a PHD in Strategy & HRM and over a decade of experience in senior leadership roles as Human Resource (HR) Manager, Mary has amassed expertise working across multiple sectors in Manufacturing, Financial Services, Service Industry, Horticulture, Consultancy and I.T.</p>
    </div>


</div>


@endsection