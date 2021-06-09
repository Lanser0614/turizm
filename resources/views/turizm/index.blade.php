<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Travelair Agency HTML Website Template</title>
    <!-- Bootstrap -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- owl-carousel -->
    {{-- <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet"> --}}
    <!-- jquery ui  -->
    {{-- <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> --}}
    <!-- FontAwesome CSS -->
    {{-- <link href="css/font-awesome.min.css" rel="stylesheet"> --}}
    <!-- Style CSS -->
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- header-section-->
        <div class="header-wrapper">
           @include('layouts.top-header')
            <!-- header-section-->
            @include('layouts.header')
        </div>
        <!-- /. header-section-->
        <!-- slider -->
        @if(view()->exists('turizm.index'))
       
        @endif
        <!-- /.slider -->

     @yield('content')

        <!-- footer -->
       @include('layouts.footer')
        <!-- /.footer -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form>
                            <div class="search-form">
                                <input type="text" class="form-control" placeholder="Find here">
                                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">close</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <!-- /.Modal -->
 <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="{{asset('js/jquery.min.js')}}"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <script src="{{asset('js/menumaker.js')}}"></script>
 <script src="{{asset('js/jquery.sticky.js')}}"></script>
 <script src="{{asset('js/sticky-header.js')}}"></script>   
 <!-- owl-thumb JavaScript -->
 <script src="{{asset('js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('js/owl.carousel2.thumbs.min.js')}}"></script>
 <script src="{{asset('js/thumb.js')}}"></script>
 <script src="{{asset('js/jquery-ui.js')}}"></script>
 <script src="{{asset('js/date.js')}}"></script>
 <script src="{{asset('js/return-to-top.js')}}"></script>

    </div>
</body>


</html>