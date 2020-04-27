@extends('admin.layout')
@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="tab-content">

            <div class="p-0">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left align-self-center tasks statistics text-uppercase">Department Details</h5>
                                <div class="clearfix"></div>

                                <div class="m-t-20 no-block">
                                <div class="row f-16">
                                        <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Department Id</span> </div>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <p> {{$department['id']}} </p>
                                        </div>
                                    </div>
                                    <div class="row f-16">
                                        <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Department Name</span> </div>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <p> {{$department['department_name']}} </p>
                                        </div>
                                    </div>

                                    <div class="m-t-20 no-block">
                                        <div class="row f-16">
                                            <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">HoD Name</span> </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <p> {{$hod['name']}} </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection