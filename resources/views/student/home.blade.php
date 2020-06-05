@extends('student.layout')

@section('body')

<div class="row">

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body  card2 pt-3">
                <div class="row">
                    <div class="col-lg-9 col-md-9 f-18 font-weight-bold text-uppercase">Profile</div>
                    <a href="{{route('student.completeprofile')}}" class="col-lg-3 col-md-3 btn btn-rounded btn-primary waves-effect waves-light btn-block">Complete your
                        Profile</a>

                </div>
                &nbsp;
                <div class="row">
                <div class="col-lg-9 col-md-9 f-18 font-weight-bold text-uppercase"></div>
                <a href="{{route('student.editprofile')}}" class="col-lg-3 col-md-3 btn btn-rounded btn-primary waves-effect waves-light btn-block">Edit
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
            <div class="card-body  card2 pt-3">
                <div class="row">
                    <div class="col-lg-9 col-md-9 f-18 font-weight-bold text-uppercase">Education</div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Class X</a></h6>
                        </div>
                        <div id="collapseOne" class="card-body collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">CGPA
                                </div>
                                <div class="col">{{$userdata->x_cgpa}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduation Country</div>
                                <div class="col">{{$userdata->x_country}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduating State</div>
                                <div class="col">{{$userdata->x_state}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">City</div>
                                <div class="col">{{$userdata->x_city}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Institute Name</div>
                                <div class="col">{{$userdata->x_institue}}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Board of Study</div>
                                <div class="col">{{$userdata->x_board}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Year of Passing</div>
                                <div class="col">{{$userdata->x_yop}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h6 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Class Xii</a></h6>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">CGPA
                                </div>
                                <div class="col">{{$userdata->xii_cgpa}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduation Country</div>
                                <div class="col">{{$userdata->xii_country}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduating State</div>
                                <div class="col">{{$userdata->xii_state}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">City</div>
                                <div class="col">{{$userdata->xii_city}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Institute Name</div>
                                <div class="col">{{$userdata->xii_institue}}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Board of Study</div>
                                <div class="col">{{$userdata->xii_board}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Year of Passing</div>
                                <div class="col">{{$userdata->xii_yop}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h6class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma</a></h6>
                        </div>
                        <div id="collapseThree" class="card-body collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">CGPA
                                </div>
                                <div class="col">{{$userdata->dip_cgpa}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduation Country</div>
                                <div class="col">{{$userdata->dip_country}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduating State</div>
                                <div class="col">{{$userdata->dip_state}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">City</div>
                                <div class="col">{{$userdata->dip_city}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Institute Name</div>
                                <div class="col">{{$userdata->dip_institute}}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">University Name</div>
                                <div class="col">{{$userdata->dip_university}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Year of Passing</div>
                                <div class="col">{{$userdata->dip_yop}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h6 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Bachelor Degree</a></h6>
                        </div>
                        <div id="collapseFour" class="card-body collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">CGPA</div>
                                <div class="col">{{$userdata->bach_cgpa}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduation Country</div>
                                <div class="col">{{$userdata->bach_country}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduating State</div>
                                <div class="col">{{$userdata->bach_state}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">City</div>
                                <div class="col">{{$userdata->bach_city}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Institute Name</div>
                                <div class="col">{{$userdata->bach_institute}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">University Name</div>
                                <div class="col">{{$userdata->bach_university}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Year of Passing</div>
                                <div class="col">{{$userdata->bach_yop}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h6 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Master's Degree</a></h6>
                        </div>
                        <div id="collapseFive" class="card-body collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">CGPA
                                </div>
                                <div class="col">{{$userdata->mast_cgpa}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduation Country</div>
                                <div class="col">{{$userdata->mast_country}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Graduating State</div>
                                <div class="col">{{$userdata->mast_state}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">City</div>
                                <div class="col">{{$userdata->mast_city}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Institute Name</div>
                                <div class="col">{{$userdata->mast_institute}}</div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">University Name</div>
                                <div class="col">{{$userdata->mast_university}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 font-weight-bold text-dark">Year of Passing</div>
                                <div class="col">{{$userdata->mast_yop}}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    @endsection