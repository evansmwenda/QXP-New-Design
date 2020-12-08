@extends('layouts.home')

@section('main')
<div class="container">
    <div class="subscription">
        
            <div class="cart-right">
                <h3>{{$data['plan']}}</h3>
                <hr>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt ut maxime tur quidem!</p>
               
                    <div class="row">
                        <div class="cart-card">
                            <p>Monthly</p>
                            <h3 id="monthly" style="color: #060646;font-size:25px;">{{number_format($data['amount'])}}</h3>
                            <i>Billed Monthly</i>
                        </div>
                        <div class="cart-card">
                            <p>Annual</p>
                            <h3 id="annually" style="color: #060646;font-size:25px;">{{number_format($data['amount']*11)}}</h3>
                           <i>Billed Annually</i>
                        </div>
                    </div>
                <form action="/subscribeNow" method="post">
                    @csrf
                        <div style="background: #F2F4F4; border-radius:2px;" class="row">
                            <label class="col-md-2" for="">Hosts</label>
                        <input type="hidden" value="{{$data['amount']}}" name="amount">
                        <input type="hidden" value="{{$data['id']}}" name="id">
                            <input type="number" class="form-control myclass col-md-3" min="1" id="hosts" name="hosts" value="1">
                        </div>
                        @if(Auth::check())
                        <button type="submit" class="btn btn-primary float-right">
                            Next
                        </button>
                        @else

                        @endif

                    </form>
                    @if(\Auth::check())
                    @else
                    <a href="/login-for-meeting"><button class="btn btn-primary float-right">
                        Login to continue
                    </button></a>
                    @endif
                 </div>

    </div>
</div>
<script>
function value(){
    alert('');
}
</script>
@endsection