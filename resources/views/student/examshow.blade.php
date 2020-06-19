@extends('student.layout')

@section('body')

<div class="row">
    <div class="col-sm-12">
        <div class="tab-content">
            <div class="p-0">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <h5 class="card-title float-left align-self-center ">Exam Details</h5>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="float-right d-xl-inline-block d-lg-inline-block">
                                            <a href="{{route('exam.attend',$exam)}}"><button type="button" class="btn btn-primary">Attempt exam</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-20 no-block">
                                    <div class="row f-16">
                                        <div class="col-lg-6 col-md-6 col-sm-12"> <span class="weight-500 text-dark">Exam Name</span> </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p> {{$exam['name']}} </p>
                                        </div>
                                    </div>
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
                                        <th>No. of Questions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($exam->section as $key=>$section)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$section['name']}}</td>
                                        <td>{{$section['mark']}}</td>
                                        <td>{{$section['nmark']}}</td>
                                        <td>{{count($section->subject->question)}}</td>
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
                                        <th>Attempted at</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($exam->responses->where('user_id',$user->id) as $key=>$response)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td class="font-bold">{{$response->user->name}}</td>
                                        <td>{{$response->user->department->department_name}}</td>
                                        <td>{{$response->created_at}}</td>
                                        <td>{{$response->score}}</td>
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

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            dropdownParent: $("#myModal")
        });
    });
</script>
@endsection