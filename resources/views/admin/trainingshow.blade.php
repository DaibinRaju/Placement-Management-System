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
                            <div class="float-right d-xl-inline-block d-lg-inline-block">
                                    <a href="/admin/training/edit/{{ $trainingdata->id }}" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Edit Training</a>
                                </div>
                                <div class="float-right d-xl-inline-block d-lg-inline-block">
                                    <a href="/admin/training" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Training Dashboard</a>
                                </div>
                                <h5 class="card-title float-left align-self-center tasks statistics text-uppercase">Training details</h5>
                                <div class="clearfix"></div>
                                <div class="m-t-20 no-block">
                                    <div class="row f-16">
                                        <div class="col-lg-2 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Training Name</span> </div>
                                        <div class="col-lg-10 col-md-9 col-sm-12">
                                            <p> {{$trainingdata['training_name']}} </p>
                                        </div>
                                    </div>
                                    <div class="m-t-20 no-block">
                                        <div class="row f-16">
                                            <div class="col-lg-2 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Trainer</span> </div>
                                            <div class="col-lg-10 col-md-9 col-sm-12">
                                                <p> {{$trainingdata['trainer']}} </p>
                                            </div>
                                        </div>
                                        <div class="m-t-20 no-block">
                                            <div class="row f-16">
                                                <div class="col-lg-2 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Description</span> </div>
                                                <div class="col-lg-10 col-md-9 col-sm-12">
                                                    <p> {{$trainingdata['description']}} </p>
                                                </div>
                                            </div>
                                            <div class="d-flex f-16">
                                                <div class="col-lg-6 p-0 row col-md-12">
                                                    <div class="col-lg-4 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Status</span> </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12 p-l-20 ">
                                                        <p> Open </p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-lg-4 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Days</span> </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12 p-l-20 ">
                                                        <p>{{$trainingdata['days']}}</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-lg-4 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Dates</span> </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12 p-l-20 ">
                                                        <p> {{$trainingdata['dates']}} </p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left  m-b-40  align-self-center text-uppercase">Attendance</h5>
                                <div class="clearfix"></div>
                                <div class="table-responsive">
                                    <table class="table color-table primary-table">
                                        <thead>
                                            <tr>
                                                <th>Event Type </th>
                                                <th>Marked by</th>
                                                <th>Date</th>
                                                <th>Session</th>
                                                <th>MARK</th>
                                                <th>VIEW</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dates as $row)
                                            <tr id="dateCheck">
                                                <td class="font-bold">Placement Training</td>
                                                <td>{{ $row['marked_by'] }}</td>
                                                <td id="date">{{ $row['date'] }}</td>
                                                <td id="date">{{ $row['session'] }}</td>
                                                <td><a href="attendance/{{$row['id']}}"><i class="fas fa-marker" aria-hidden="true"></a></i></td>
                                                <td><a href="viewattendance/{{$row['id']}}"><i class="fas fa-eye" aria-hidden="true"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left  m-b-40  align-self-center text-uppercase">Bills</h5>
                                <a href="/admin/training/billupload/{{$trainingdata['id']}}" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Upload Bills here</a>
                                <div class="clearfix"></div>
                                <div class="table-responsive">
                                    <table class="table color-table primary-table">
                                        <thead>
                                            <tr>
                                                <th>Bill Description</th>
                                                <th>Uploaded by</th>
                                                <th>Upload Date</th>
                                                <th>Size</th>
                                                <th>Download</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($bill_data))
                                            @foreach( $bill_data as $row )
                                            <tr id="dateCheck">
                                                <td class="font-bold">{{ $row['billname'] }}</td>
                                                <td>{{ $row['uploaded_by'] }}</td>
                                                <td>{{ $row['upload_date'] }}</td>
                                                <td>{{ $row['billsize'] }}</td>
                                                <td><a href="downloadbill/{{$row['id']}}"><i class="fas fa-download"></i></a></td>
                                                <td><a href="deletebill/{{$row['id']}}"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                                            </tr>
                                            @endforeach
                                            @endif
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