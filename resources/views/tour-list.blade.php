@extends('turizm.index')

@section('content')

   <!-- page-header -->
   <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-caption">
                    <h1 class="page-title">Tour Packages</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
    <!-- tour-service -->
    <div class="content">
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
               <!-- tour-2 -->
            <div class="row">
                <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                    <div class="tour-block">
                        <div class="tour-content">
                            <h2 class="mb30"><a href="#" class="title">Business Tour</a></h2>
                            <p class="mb30">Porttitor lorem utdiam iaculis euismod congue eroset lectus cotetur fermen uspendissolutpat risus utarcu dapibusat conquat quamesero sodenean pretium aetuuauctor.</p>
                            <a href="#" class="btn-link">Go For Business Tour<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                    <div class="tour-img">
                        <a href="#" class="imghover"> <img src="images/tour_img_4.jpg" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
             <!-- /.tour-2 -->
        </div>
    </div>
     <!-- /.tour-service -->
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
@endsection