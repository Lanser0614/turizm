   @extends('turizm.index')

   @section('content')
   @include('layouts.slider')
   
   <!-- enguiry-form -->
   <div class="bg-default enquiry-form ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <!-- form -->
                <form method="POST" action="{{ route('feedback') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="select"></label>
                                <input type="text" class="form-control" name="destenation" placeholder="where do you want go">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="datepicker"></label>
                                <div class="input-group">
                                    <input name="date" type="date" placeholder="Date" class="form-control" >
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="select"></label>
                                <div class="">
                                    <input type="tel" class="form-control" name="Phone_number" placeholder="phone number" >
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-6 col-sm-3 col-12">
                            <button type="submit" name="singlebutton" class="btn btn-primary btn-lg">Enquiry Now</button>
                        </div>
                    </div>
                </form>
                <!-- /.form -->
            </div>
        </div>
    </div>
</div>
<!-- /.enguiry-form -->
<!-- tour-service -->
<div class="space-medium">
    <div class="container">
        <!-- tour-1 -->
        @foreach ($tourCategory as $item)
        <div class="row ">
            <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                <div class="tour-img">
                    <a href="{{$item->categorias_url}}" class="imghover"> <img src="{{asset('files/'.$item->image_name)}}" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                <div class="tour-block">
                    <div class="tour-content">
                        <h2 class="mb30"><a href="{{$item->categorias_url}}" class="title">{{$item->title}}</a></h2>
                        <p class="mb30">{{$item->description}}</p>
                        <a href="{{$item->categorias_url}}" class="btn-link">Go For {{$item->title}}<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- /.tour-1 -->
        <!-- tour-2 -->
      
        <!-- /.tour-2 -->
        <!-- tour-3 -->
       
        <!-- /.tour-3 -->
    </div>
</div>
<!-- /.tour-service -->
<!-- destination-section -->
<div class="space-medium">
    <div class="container-fluid">
        <div class="row">
            <!-- section-title -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="section-title">
                    <h2>Top Destinations</h2>
                </div>
            </div>
            <!-- /.section-title -->
        </div>
        <div class="row">
            @foreach ($tour as $item)  
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 nopr nopl">
                <div class="destination-block">
                    <div class="desti-img">
                        <img src="{{asset('files/'.$item->img)}}" alt="">
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

        
            <!-- destination-section -->
           
            <!-- /.destination-section -->
        </div>
    </div>
</div>
<!-- /.destination-section -->
<!-- about-section -->
<div class="space-medium">
    <div class="container">
        <!-- about-head -->
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                <div class="">
                    <h2>We are <br> Travel Agency</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                <div class="">
                    <p class="lead">Pellentesque luctus felis non nibh masus consectetuis sed nisl eniull lentesque euismod eronon ntesque tortor molestie egurabitur lorem ien elementumelitac eleifue nisl fringilla nisia tris.</p>
                </div>
            </div>
        </div>
        <!-- /.about-head -->
        <div class="row">
            <!-- feature-section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="well-block">
                    <!-- feature-left -->
                    <div class="feature-left">
                        <div class="feature-icon"><img src="images/calendar.png" alt=""></div>
                        <div class="feature-content">
                            <h4>Everything’s on Schedule</h4>
                            <p>Cras porttitor tortor erateget accumsan is feltumsit.</p>
                        </div>
                    </div>
                    <!-- /.feature-left -->
                    <!-- feature-left -->
                    <div class="feature-left">
                        <div class="feature-icon"><img src="images/adventure.png" alt=""></div>
                        <div class="feature-content">
                            <h4>Destination Variety</h4>
                            <p>Pellentesque imperdiet esmpus finibusse euismunc.</p>
                        </div>
                    </div>
                    <!-- /.feature-left -->
                    <!-- feature-left -->
                    <div class="feature-left">
                        <div class="feature-icon"><img src="images/hotel.png" alt=""></div>
                        <div class="feature-content">
                            <h4>Comfortable Housing</h4>
                            <p>Vestiulum sodales tempudin one erlctus iedate. </p>
                        </div>
                    </div>
                    <!-- /.feature-left -->
                </div>
            </div>
            <!-- /.feature-section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="well-block">
                    <div class="counter-block">
                        <h1 class="counter-numbers">689+</h1>
                        <div class="counter-content">
                            <h4>Tours</h4>
                            <p>Cras porttitor tortor erateget taccumsan.</p>
                        </div>
                    </div>
                    <div class="counter-block">
                        <h1 class="counter-numbers">320+</h1>
                        <div class="counter-content">
                            <h4>Destinations</h4>
                            <p>Pellentesque luctus felisnon nib its consecteuis.</p>
                        </div>
                    </div>
                    <div class="counter-block">
                        <h1 class="counter-numbers">60+</h1>
                        <div class="counter-content">
                            <h4>Countries</h4>
                            <p>Sed gravida eleequenec fringilla dolonteger.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.about-section -->
<!-- service-section -->
<div class="space-medium service-wrapper" style="">
    <div class="container">
        <!-- service-head -->
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                <div class="">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                <div class="">
                    <p class="lead">Suctus felis non nibh maximus consectetuis sed nisl eniullase pellentesque euismod eronon ntesque tortor molestieege.</p>
                </div>
            </div>
        </div>
        <!-- /.service-head -->
        <div class="row">
            <!-- service-block -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                <div class="service-block border-bottom border-right">
                    <div class="service-img"><img src="images/hotel_1.png" alt=""></div>
                    <div class="service-content">
                        <h3 class="service-title">Hotel Reservation</h3></div>
                </div>
            </div>
            <!-- /.service-block -->
            <!-- service-block -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                <div class="service-block border-bottom border-right">
                    <div class="service-img"><img src="images/disability.png" alt=""></div>
                    <div class="service-content">
                        <h3 class="service-title">Staff Transportation Services </h3></div>
                </div>
            </div>
            <!-- /.service-block -->
            <!-- service-block -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                <div class="service-block border-bottom">
                    <div class="service-img"><img src="images/airplane.png" alt=""></div>
                    <div class="service-content">
                        <h3 class="service-title">Air Ticketing Services</h3></div>
                </div>
            </div>
            <!-- /.service-block -->
            <!-- service-block -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                <div class="service-block border-right">
                    <div class="service-img"><img src="images/passport.png" alt=""></div>
                    <div class="service-content">
                        <h3 class="service-title">Passport and Visa Assistance </h3></div>
                </div>
            </div>
            <!-- /.service-block -->
            <!-- service-block -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                <div class="service-block  border-right">
                    <div class="service-img"><img src="images/car_wash.png" alt=""></div>
                    <div class="service-content">
                        <h3 class="service-title">Car Rental Services </h3></div>
                </div>
            </div>
            <!-- /.service-block -->
            <!-- service-block -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                <div class="service-block service-right-border service-bottom-border">
                    <div class="service-img"><img src="images/car.png" alt=""></div>
                    <div class="service-content">
                        <h3 class="service-title">Car on Call</h3></div>
                </div>
            </div>
            <!-- /.service-block -->
        </div>
    </div>
</div>
<!-- /.service-section -->
<!-- testimonial-section -->

<!-- testimonial-section -->
<!-- /.client-section -->
<div class="space-small">
    <div class="container">
        <div class="row">
            <!-- client-logo -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                <div class="client-logo">
                    <a href="#"><img src="images/dummy_logo_1.png" alt=""></a>
                </div>
            </div>
            <!-- /.client-logo -->
            <!-- client-logo -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                <div class="client-logo">
                    <a href="#"> <img src="images/dummy_logo_2.png" alt=""></a>
                </div>
            </div>
            <!-- /.client-logo -->
            <!-- client-logo -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                <div class="client-logo">
                    <a href="#">  <img src="images/dummy_logo_3.png" alt=""></a>
                </div>
            </div>
            <!-- /.client-logo -->
            <!-- client-logo -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                <div class="client-logo">
                    <a href="#"><img src="images/dummy_logo_4.png" alt=""></a>
                </div>
            </div>
            <!-- /.client-logo -->
            <!-- client-logo -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                <div class="client-logo">
                    <a href="#"> <img src="images/dummy_logo_2.png" alt=""></a>
                </div>
            </div>
            <!-- /.client-logo -->
            <!-- client-logo -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
                <div class="client-logo">
                    <a href="#">  <img src="images/dummy_logo_1.png" alt=""></a>
                </div>
            </div>
            <!-- /.client-logo -->
        </div>
    </div>
</div>
<!-- /.client-section -->
@endsection