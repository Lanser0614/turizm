@extends('layouts.admin')

@section('content')
<div class="page">

    @include('layouts.admin_top')

  
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="tab-content">
              
                <div class="tab-pane fade active show" id="todo-add" role="tabpanel">
                    <div class="card">
                     


                        <form class="card-body" method="POST" action="{{ route('updateDSetail') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="hidden" name="id" value="{{$siteDetail->id}}">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Email link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" name="mail" value="{{$siteDetail->mail}}" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Phone number <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="phone_number" value="{{$siteDetail->phone_number}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">addres <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="addres" value="{{$siteDetail->addres}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">instagram_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="instagram_link" value="{{$siteDetail->instagram_link}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">telegram_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="telegram_link" value="{{$siteDetail->telegram_link}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">whatsapp_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="whatsapp_link" value="{{$siteDetail->whatsapp_link}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">fasebook_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="fasebook_link" value="{{$siteDetail->fasebook_link}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">google_link <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="google_link" value="{{$siteDetail->google_link}}" required>
                                </div>
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