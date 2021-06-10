@extends('turizm.index')

@section('content')
<!-- page-header -->
<div class="tour-pageheader">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="tour-caption">
                    <h1 class="text-white tour-title">{{$tour->title}}</h1>
                    <p class="tour-caption-text text-white"><strong class="tour-rate">{{$tour->price}}</strong>{{$tour->how_many_days}}</p>
                    <a href="#" class="btn btn-primary mb10">Book Your Tour</a>
                    <a href="#" class="btn btn-white mb10">view map</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                <div class="highlights-section mb60">
                    <h3>Highlights</h3>
                    <p>{!!$tour->description!!} </p>
                    {{-- <ul class="angle list-none title-bold mb40">
                        <li>Guided Singapore city tour</li>
                        <li>Sentosa ice land with wings of times show</li>
                        <li>Maritime musuem</li>
                        <li>Sea Aquarium</li>
                        <li>Full day universal Studio + meal coupon</li>
                    </ul> --}}
                    <h4 class="mb30">{{$tour->title}} Highlights</h4>
                    <div class="slide-thumb-gallery">
                        <div class="owl-carousel" data-slider-id="1">
                            <div><img src="{{asset('images/slide_big_1.jpg')}}" alt="" class="img-fluid"></div>
                            <div><img src="{{asset('images/slide_big_2.jpg')}}" alt="" class="img-fluid"></div>
                            <div><img src="{{asset('images/slide_big_3.jpg')}}" alt="" class="img-fluid"></div>
                            <div><img src="{{asset('images/slide_big_4.jpg')}}" alt="" class="img-fluid"></div>
                        </div>
                        <div class="owl-thumbs" data-slider-id="1">
                            <button class="owl-thumb-item"><img src="{{asset('images/slide_small_1.jpg')}}" alt="" class="img-fluid"></button>
                            <button class="owl-thumb-item"><img src="{{asset('images/slide_small_2.jpg')}}" alt="" class="img-fluid"></button>
                            <button class="owl-thumb-item"><img src="{{asset('images/slide_small_3.jpg')}}" alt="" class="img-fluid"></button>
                            <button class="owl-thumb-item"><img src="{{asset('images/slide_small_4.jpg')}}" alt="" class="img-fluid"></button>
                        </div>
                    </div>
                </div>
                <div class="journey-section mb60">
                    <h3 class="mb30">Journey</h3>
                    <div class="well-bg-block">
                        <h4 class="journey-day-title">Tour Program</h4>
                        <ul >
                            <li>{!!$tour->program_for_tour!!}</li>
                        </ul>
                    </div>

                 
                </div>
                <div class="included-section mb60">
                    <h3 class="mb30">What's Included</h3>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <ul class="arrow list-none">
                                <li>{!!$tour->what_is_included!!}</li>
                            </ul>
                        </div>
                     
                    </div>
                </div>
          
             
            </div>
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                <div class="widget-primary support-list">
                    <div class="widget-primary-title">
                        <h3>Why Book With Us?</h3>
                    </div>
                    <ul class="arrow list-none">
                        <li>24X7 service and support</li>
                        <li>Totally complaint in all aspects</li>
                        <li>Dedicated, trustworthy team</li>
                        <li>Professional happy services</li>
                    </ul>
                </div>
                <!-- enguiry-form -->
                <!-- form -->
                <div class="widget-form">
                    <h3 class="text-white mb30"> Book Your Tour</h3>
                    <form method="POST" action="{{ route('feedback') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="select"></label>
                                    <input type="text" class="form-control" name="destenation" placeholder="where do you want go">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        
                                            <input name="date" type="date" placeholder="Date" class="form-control" >
                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="select"></label>
                                    
                                     <input type="tel" class="form-control" name="Phone_number" placeholder="phone number" >
                                    
                                
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button type="submit" name="singlebutton" class="btn btn-primary">Enquiry Now</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.form -->
                </div>
                <!-- /.enguiry-form -->
               
            </div>
        </div>
    </div>
</div>

<div class="bg-light similar-package">
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-title">
                <h2>Similar Packages</h2>
            </div>
        </div>
    </div>
    <div class="row">
       
        @foreach ($tours as $item)
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="destination-block">
                <div class="desti-img">
                    <img src="{{asset('files/'.$item->img)}}" alt="">
                    <a href="/tour/{{$item->id}}" class="desti-title">{{$item->title}}</a>
                    <div class="overlay">
                        </div>
                        <div class="text">
                            <h3 class="mb20 text-white">{{$item->title}}</h3>
                           <ul class="angle list-none">
                            <li>{{$item->how_many_days}}</li>
                            <li>{{$item->hotel_name}}</li>
                            <li>{{$item->what_is_have}}</li>
                        </ul>
                        <p class="price">{{$item->price}}</p>
                            <a href="/tour/{{$item->id}}" class="btn-link">Go To {{$item->title}} <i class="fa fa-angle-right"></i></a></div> 
                </div>
            </div>
         </div>
        @endforeach
    </div>
</div>
</div>
<!-- newsletter -->
<div class="newsletter-wrapper newsletter-overlay" style="background: url({{asset('images/newsletter_wrapper.jpg')}}) no-repeat;">
<div class="container">
    <div class="row">
        <div class="col-xl-7 col-lg-7 offset-md-5 col-md-6 col-sm-12 col-12">
            <div class="newsletter-block">
              <h1 class="newsletter-title">Join The Newsletter</h1>
                <p class="mb30">Subscribe the newsletter and get update for discounts on tours.</p>
                <form>
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="email address here" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-primary newsletter-btn" type="submit">subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.newsletter -->

  
@endsection