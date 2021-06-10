@extends('layouts.admin')

@section('content')
<div class="page">

    @include('layouts.admin_top')

    <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="nav nav-tabs page-header-tab">
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#todo-list">ToDo List</a></li>
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#todo-add">Add Todo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade" id="todo-list" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive todo_list">

                               <table class="table table-hover table-vcenter mb-0 table_custom spacing8 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Phone number</th>
                                                <th>addres</th>
                                                <th>Action</th>
                                                <th class="w200">Action</th>
                                            </tr>
                                        </thead>
                                        {{-- @php
                                            dd($ser);
                                        @endphp --}}
                           @foreach ($siteDetail as $item)
                                <tbody>
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>
                                                    <h6 class="mb-0">{{$item->phone_number}}</h6>
                                                    <span></span>
                                                </td>
                                             >
                                                <td>
                                                    <div class="text-info"></div>
                                                  
                                                </td>
                                                <td>
                                                   <span > <a href="delete/{{$item->id}}" class="tag tag-green">DELETE</a></span>
                                                </td>
                                                <td>
                                                    <span > <a href="showDetail/{{$item->id}}" class="tag tag-blue">Edit</a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade active show" id="todo-add" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add service</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>



                        <form class="card-body" method="POST" action="{{ route('storeDSetail') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Email link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" name="mail">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Phone number <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="phone_number" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">addres <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="addres" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">instagram_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="instagram_link" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">telegram_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="telegram_link" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">whatsapp_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="whatsapp_link" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">fasebook_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="fasebook_link" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">google_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="google_link" required>
                                </div>
                            </div>

                           
                         
                          
                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div> --}}

                        </form>




                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section-body">
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a href="templateshub.net">Templates Hub</a>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="doc/index.html">Documentation</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection