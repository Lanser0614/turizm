<div class="footer">
    <div class="container">
        <div class="row ">
            <!-- footer-logo -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="ft-img"><img src="images/ft_logo.png" alt=""></div>
            </div>
            <!-- /.footer-logo -->
            <!-- footer-links -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                <div class="footer-widget ">
                    <h3 class="footer-title ">Quick Links</h3>
                    <ul class="angle list-none">
                        <li><a href="# ">Home</a></li>
                        <li><a href="# ">Tour</a></li>
                        <li><a href="# ">Blog</a></li>
                        <li><a href="# ">Customer Reviews</a></li>
                        <li><a href="# ">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-links -->
            <!-- footer-tours -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                <div class="footer-widget ">
                    <h3 class="footer-title ">Tour Packages</h3>
                    <ul class="angle list-none">
                        @foreach ($tourCategory as $item)
                            <li><a href="{{$item->categorias_url}}">{{$item->title}}</a>
                                @endforeach
                    </ul>
                </div>
            </div>
            <!-- /.footer-Tours -->
            <!-- footer-post -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                <div class="footer-widget">
                    <h3 class="footer-title">Contact Info</h3>
                    @foreach ($siteDetail as $item)
                    <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span> <span class="ft-contact-text">{{$item->addres}} </span></div>
                    <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone "></i></span> <span class="ft-contact-text">{{$item->phone_number}}</span></div>
                    <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-envelope "></i></span> <span class="ft-contact-text">{{$item->mail}}</span></div>
                    <div class="social-icon ">
                        <a href="#" class="btn-social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn-social-icon"><i class="fa fa-telegram"></i></a>
                         <a href="#" class="btn-social-icon"><i class="fa fa-whatsapp"></i></a>
                          <a href="#" class="btn-social-icon"><i class="fa fa-google-plus"></i></a>
                       <a href="#" class="btn-social-icon"><i class="fa fa-instagram"></i></a>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.footer-post -->
        </div>
        <!-- tiny-footer -->
    </div>
    
            <!-- /. tiny-footer -->
        </div>
    </div>
</div>