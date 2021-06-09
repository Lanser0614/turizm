@extends('layouts.admin')

@section('content')
<div class="page">

    @include('layouts.admin_top')

    <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="nav nav-tabs page-header-tab">
                  
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#todo-add">Add Todo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="tab-content">
               
                <div class="tab-pane fade active show" id="todo-add" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add service</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>





                        <form class="card-body" method="POST" action="{{ route('update.service') }}" enctype="multipart/form-data">
                            @csrf

                           
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Service name <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="title" value="{{$ser->title}}">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$ser->id}}">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Service short desc <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="short_desc" value="{{$ser->short_desc}}">
                                </div>
                            </div>
                         
                           
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Description <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="description">{{$ser->description}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Image for Title</label>
                                <div class="col-md-7">
                                <input type="file" class="form-control" name="image" src="/files/{{ ($ser->image) }}" placeholder="Choose image" id="image" value="{{ $ser->image }}">
                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <img src="/files/{{ ($ser->image) }}" width="150px" alt="">
                            </div>
                            </div>

                           
                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label">Image for Post</label>
                                <div class="col-md-7">
                                <input class="form-control" type="file" name="page_image">
                                </div>
                            </div> --}}
                          
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    {{-- <button type="submit" class="btn btn-outline-secondary">Cancel</button> --}}
                                </div>
                            </div>
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