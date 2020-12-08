{{-- @extends('layouts.home')

@section('main')

    <div class="container news-feed-container">
        <div class="row">
            <p>{{$data->title}}</p>
        </div>
        <div class="row">
            <div class="col-md-4 recent-posts">
                <div>
                    Recent Posts
                </div>
            </div>
            <div class="col-md-8 news-feed-content">
            <img src="{{asset('images/featured/'.$data->image)}}" alt="">
                <div>
                    <h4>{{$data->title}}</h4> 
                    {!! $data->d_description !!}
                </div>
            </div>
        </div>
    </div>
    
@endsection --}}

{{-- Start here --}}
@extends('layouts.home')

@section('main')

<div class="full-news-features-container">
    <div class="container">

        <div class="blog-post-container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$data->title}}</h2>
                </div>
            </div>
        </div>
        
        <div class="news-features-content">
            <div class="row">
                <div class="col-md-4">
                    
                    <div class="just-post-column">
                        <div class="posts-row post-1">
                            <div class="recent-post-title">
                                <h5 style="color: #ffffff;">Recent Post Column</h5>
                            </div>
                          @foreach ($otherNews as $item)              
                            <div class="recent-posts">
                            <h4 style="color: #060646">{{$item->heading}}</h4>
                                 <p style="color: grey; text-align:left;">November 27, 2020 </p>
                                {{-- <p style="color: grey; text-align:left;">No Comments</p>  --}}
                                <form action="/newsfeeds/{{$item->id}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                  <input type="hidden" value="{{$item->id}}">
                                  <div class="features-dec-button-blue">
                                    <button type="submit">Read More</button>
                                  </div>
                                </form>
                                {{-- <a href="" style="color: #fd6c03">Read More<i class="fa fa-angle-right"></i></a> --}}
                            </div>
                          @endforeach

                          {{-- {{$otherNews->render()}} --}}
                        </div>
        
                        <div class="posts-row post-2">
                            <div class="recent-posts social-media-category">
                                <div class="social-media-img-1"><span class="fa fa-facebook fa-2x"></span></div>
                                <div class="social-media-img-2"><span class="fa fa-twitter fa-2x"></span></div>
                                <div class="social-media-img-3"><span class="fa fa-whatsapp fa-2x"></span></div>
                                <div class="social-media-img-4"><span class="fa fa-linkedin fa-2x"></span></div>
                            </div>
                        </div>
        
                        {{-- <div class="posts-row post-3">
                            <form action="/action_page.php">
                                <h3>Leave a Reply</h3>
                                <div class="comment-section">
                                    <input type="text" id="" name="" value=""><br><br>
                                </div>
                                <button>Send</button>
                                
                              </form>
                        </div> --}}
                    </div>
                    
                    
    
                </div>
        
                <div class="col-md-8">
    
                    <div class="blog-img">
                        <img src="{{asset('images/featured/'.$data->image)}}" alt="">
                    </div>
    
                    <div class="blog-list">
                        <ul>
                            <li><i class="fa fa-user-circle" aria-hidden="true"></i> QXP </li> |
                            <li><i class="fa fa-calendar-o" aria-hidden="true"></i>  November 4, 2020 </li> |
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>  5:44pm</li>
                        </ul>
                    </div>
    
                    <div class="blog-title">
                        <h3>{{$data->title}}</h3> 
                    </div>
    
                    <div class="blog-content">
                        {!! $data->d_description !!}
                    </div>
    
    
                </div>
                <br><br><br>
            
            </div>
        </div>
            
    
    </div>
</div>


@endsection