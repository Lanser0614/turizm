@extends('layouts.admin')

@section('content')
    



<div class="page">

    @include('layouts.admin_top')

    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <h4>Welcome Peter Richards!</h4>
                        <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                    </div>                        
                </div>
            </div>
            <div class="row clearfix row-deck">
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Active Cases</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="number mb-0 font-32 counter">31</h5>
                            <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pending Tasks</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="number mb-0 font-32 counter">245</h5>
                            <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upcoming Events</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="number mb-0 font-32 counter">17</h5>
                            <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Message</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="number mb-0 font-32 counter">12</h5>
                            <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Open Requests</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="number mb-0 font-32 counter">19</h5>
                            <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hours Spent</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="number mb-0 font-32 counter">284</h5>
                            <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </div>

    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Feedback</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Destination</th>
                                            <th>Date</th>
                                            <th>Phone number</th>
                                            
                                           
                                        </tr>
                                    </thead>

                                    @foreach ($feedback as $item)
                                     <tbody>
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->destenation}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->Phone_number}}</td>
                                          </tr>
                                     </tbody>
                                     @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
           


            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                            <thead>
                                <tr>
                                    <th colspan="5"><h3> Callbeck</h3></th>
                                    <th colspan="3">Activity</th>
                                </tr>
                                <tr>
                                    <th class="w30">&nbsp;</th>
                                    <th>ID</th>
                                    <th>Messages</th>
                                    
                                    <th>Phone number</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $item)
                                 <tr>
                                    <td>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </td>
                                    <td><a href="#">{{$item->id}}</a></td>
                                    <td><span>{{$item->messages}}</span></td>
                                   
                                    <td><span>{{$item->phone}}</span></td>
                                    <td><span>{{$item->name}}</span></td>
                                    <td><span>{{$item->email}}</span></td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
  
</div> 


@endsection