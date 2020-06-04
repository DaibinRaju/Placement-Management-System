@extends('faculty.layout')

@section('body')

<div class="row">
    <div class="col-sm-12">
        <div class="page-titles">
            <div class="align-self-center text-right">
            </div>
        </div>
        <div class="tab-content">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-3 col-sm-3">
                            <h5 class="card-title float-left align-self-center ">Scheduled Exams</h5>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="float-right d-xl-inline-block d-lg-inline-block">

                                <a href="{{route('faculty.exam.create')}}" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Exam</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Exam Name</th>
                                                <th>Password</th>
                                                <th>Activation Date</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($exams as $exam)
                                            <tr>
                                                <td>{{$exam['name']}}</td>
                                                <td>{{$exam['password']}}</td>
                                                <td>{{$exam['act_date']}}</td>
                                                <td>{{$exam['created_at']}}</td>
                                                <td><label class="badge badge-light-warning">Active</label></td>
                                                <td>
                                                    <a href="{{route('faculty.exam.show',$exam)}}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                    <a id="delete" onclick="verify()" href="{{route('faculty.exam.delete',$exam)}}"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                </td>

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