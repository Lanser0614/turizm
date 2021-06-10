<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-7 col-md-8 d-none d-xl-block d-sm-block">
                <div class="top-header-content">
                    <ul class="list-none">
                        @foreach ($siteDetail as $item)
                        <li><i class="fa fa-envelope top-header-icon"></i>{{$item->mail}}</li>
                        <li><i class="fa fa-phone top-header-icon"></i>{{$item->phone_number}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-8 d-none d-block d-sm-block">
                <div class="top-header-content">
                    <div class="top-social"> 
                        <a href="#" class="btn-social-icon"><i class="fa fa-facebook"></i></a>
                         <a href="#" class="btn-social-icon"><i class="fa fa-telegram"></i></a>
                          <a href="#" class="btn-social-icon"><i class="fa fa-whatsapp"></i></a>
                           <a href="#" class="btn-social-icon"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="btn-social-icon"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class=" col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">
                <a href="#" class="search-icon" data-toggle="modal" data-target="#exampleModal">
               <i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div>