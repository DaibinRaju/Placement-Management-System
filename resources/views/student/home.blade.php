@extends('student.layout')

@section('body')

<div class="row">

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body  card2 pt-3">
                <div class="row">
                    <div class="col-lg-9 col-md-9 f-18 font-weight-bold text-uppercase">Profile</div>
                    <a href="#" data-toggle="modal" data-target=".add-task" class="col-lg-3 col-md-3 btn btn-rounded btn-primary waves-effect waves-light btn-block">Edit
                        Profile</a>
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-9 col-md-9 f-18 font-weight-bold text-uppercase">Profile</div>
                    <a href="/student/fillprofile"  class="col-lg-3 col-md-3 btn btn-rounded btn-primary waves-effect waves-light btn-block">Complete your
                        Profile</a>
                    
                </div>
                
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 m-b-20 text-center"><img src="http://elive.sjcetpalai.ac.in/Uploads/Admission/<?= str_replace('/', '', $user->admission_number) ?>.jpg" class="img-fluid" alt="" title=""></div>
                    <div class="col-md-8">
                        <h2 class="f-24 font-medium">{{$user->name}}</h2>
                        <p class="m-b-20">{{$user->role}}</p>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Department</div>
                            <div class="col">{{$userdata->branch}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Roll Number</div>
                            <div class="col">{{$userdata->enrollment_number}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Present Address</div>
                            <div class="col">{{$userdata->present_address}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Present Address</div>
                            <div class="col">{{$userdata->permanent_address}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">Phone</div>
                            <div class="col">{{$userdata->student_phone_no}}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-3 font-weight-bold text-dark">E mail id</div>
                            <div class="col">{{$userdata->mail_id}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body  card2 pt-5 pb-2">
                <div class="row">
                    <div class="col-lg-12 col-md-12 f-18 font-weight-bold text-uppercase">Education
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 f-14 font-weight-bold m-b-20"><span class="fa fa-circle text-danger circle-tab mr-3"></span> {{$userdata->xii_yop}}</div>
                    <div class="col-lg-4 col-md-6">
                        <span class="font-bold text-dark">Computer engineering</span>
                        <div class="clearfix"></div>
                        <span class="mt-2 d-block">Master</span>
                    </div>
                    <div class="col-lg-4 col-md-6 font-weight-bold m-b-20">{{$userdata->x_institue}}
                        </div>
                </div>
                <div class="boder-li"></div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 f-14 font-weight-bold m-b-20"><span class="fa fa-circle text-danger circle-tab mr-3"></span>September 2012 -
                        April 2014</div>
                    <div class="col-lg-4 col-md-6 ">
                        <span class="font-bold text-dark">Google corporation </span>
                        <div class="clearfix"></div>
                        <span class="mt-2 d-block">Bachelor</span>
                    </div>
                    <div class="col-lg-4 col-md-6  font-weight-bold">Imperial College London</div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>

@endsection