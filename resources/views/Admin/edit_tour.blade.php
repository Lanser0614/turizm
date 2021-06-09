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





                        <form class="card-body" method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$tour->id}}">


                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Title Tour <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="title" value="{{$tour->title}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">how many days <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="how_many_days" value="{{$tour->how_many_days}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Tour category <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                <select name="category_id" class="form-control" >
                                  @foreach ($tourCategory as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">hotel name <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="hotel_name" value="{{$tour->hotel_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Tour price <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="price"  value="{{$tour->price}}">
                                </div>
                            </div>
                         
                           
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Description <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <textarea rows="5" id="mytextarea" class="form-control no-resize" placeholder="Please type what you want..." name="description">{!!$tour->description!!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">what is have <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="what_is_have" value="{{$tour->what_is_have}}">
                                   </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">what is included <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <textarea rows="5" id="mytextarea3" class="form-control no-resize" placeholder="Please type what you want..." name="what_is_included">{{$tour->what_is_included}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">program for tour <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <textarea rows="5" id="mytextarea2" class="form-control no-resize" placeholder="Please type what you want..." name="program_for_tour">{!!$tour->program_for_tour!!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Image for Tour</label>
                                <input type="file" name="img" src="{{asset('files/'.$tour->img)}}"  placeholder="Choose image" id="image" value="{{$tour->img }}">
                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <img src="{{asset('files/'.$tour->img)}}" alt="">
                            </div>
    


                           
                          
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    
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