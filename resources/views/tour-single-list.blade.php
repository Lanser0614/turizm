@extends('turizm.index')

@section('content')
    <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Interntional Tour</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-header-->
        <!-- destination-section -->
        <div class="content">
            <div class="container">
                <div class="row">
                        <!-- destination-section -->
                        @foreach ($tour as $item)
                            
                       
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="images/destination_1.jpg" alt="">
                                <a href="tour/{{$item->id}}" class="desti-title">{{$item->title}}</a>
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
                                        <a href="tour/{{$item->id}}" class="btn-link">Go To {{$item->title}} <i class="fa fa-angle-right"></i></a></div> 
                            </div>
                        </div>
                     </div>
                     @endforeach
                   {{-- end --}}
              
                     
                    
            
                </div>
            </div>
        </div>
        <!-- /.destination-section -->
           <!-- newsletter-section -->
        <div class="newsletter-wrapper newsletter-overlay" style="background:url(images/newsletter_wrapper.jpg) no-repeat;">
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
          <!-- /.newsletter-section -->
@endsection