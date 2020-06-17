@extends('faculty.layout')

@section('body')
<div class="modal fade bd-example-modal-xl" id="myModal" style="overflow:hidden;" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold">Department Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <form action="" method="post" id="form">

                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="examName">Section Name</label>
                                <input type="text" name="section" class="form-control" id="examName" placeholder="Enter section name" required>
                            </div>

                            <div class="form-group">
                                <label for="nmark" class="form-label">Negative Mark</label>
                                <input type="number" name="nmark" class="form-control" id="nmark" placeholder="Enter negative mark for each question" required>
                                <small id="nmarkhelp" class="form-text text-muted">Enter 0 if there is no negative mark.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mark" class="form-label">Mark</label>
                                <input type="number" name="mark" class="form-control" id="mark" placeholder="Enter mark for each question" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select the subject</label>
                                <select class="form-control" name="subject" id="exampleFormControlSelect1">
                                    @foreach($subjects as $subject)
                                    <option value="{{$subject['id']}}">{{$subject['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-rounded btn-success" value="Save">
                    <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="tab-content">

            <div class="p-0">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left align-self-center tasks statistics text-uppercase">Exam details</h5>
                                <div class="clearfix"></div>

                                <div class="m-t-20 no-block">
                                    <div class="row f-16">
                                        <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Exam Name</span> </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p> {{$exam['name']}} </p>
                                        </div>
                                    </div>

                                    <div class="m-t-20 no-block">
                                        <div class="row f-16">
                                            <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Password</span> </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <p> {{$exam['password']}} </p>
                                            </div>
                                        </div>
                                        <div class="m-t-20 no-block">
                                            <div class="row f-16">
                                                <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Activation Date</span> </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p> {{$exam['act_date']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Activation Time</span> </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p> {{$exam['act_time']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Expiry Date</span> </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p> {{$exam['exp_date']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Expiry Time</span> </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p> {{$exam['exp_time']}} </p>
                                                </div>
                                            </div>
                                            
                                            <div class="row f-16">
                                                <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Number of Sections</span> </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <p> {{count($exam->section)}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-md-3 col-sm-3">
                                        <h5 class="card-title float-left align-self-center ">Sections</h5>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="float-right d-xl-inline-block d-lg-inline-block">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Add section</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="clearfix"></div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Section Name</th>
                                                <th>Marks</th>
                                                <th>Negative Marks</th>
                                                <th>Subject</th>
                                                <th>No. of Questions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sections as $key=>$section)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$section['name']}}</td>
                                                <td>{{$section['mark']}}</td>
                                                <td>{{$section['nmark']}}</td>
                                                <td><a href="{{route('subject.show',$section->subject)}}"> {{$section->subject->name}}</a></td>
                                                <td>{{count($section->subject->question)}}</td>
                                                <td>
                                                    <a href=""><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                    <a id="delete" onclick="verify()" href=""><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left  m-b-40  align-self-center">Results</h5>
                                <div class="clearfix"></div>
                                <div class="table-responsive">
                                    <table class="table color-table primary-table">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Student Name </th>
                                                <th>Department</th>
                                                <th>Admission No</th>
                                                <th>Score</th>
                                                <th class="icon-color2"><i class="fa fa-trash" aria-hidden="true"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($exam->responses as $key=>$response)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td class="font-bold">{{$response->user->name}}</td>
                                                <td>{{$response->user->department->department_name}}</td>
                                                <td>{{$response->user->admission_number}}</td>
                                                <td>{{$response->score}}</td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger" ></i></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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

@section('js')
<script src="/assets/js/menu-setting.min.js"></script>
<script src="/assets/js/plugins/select2.full.min.js"></script>

<script src="/assets/js/menu-setting.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            dropdownParent: $("#myModal")
        });
    });
</script>
@endsection