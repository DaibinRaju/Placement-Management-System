@extends('admin.layout')

@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="page-titles">
            <div class="align-self-center text-right">
            </div>
        </div>
        <div class="tab-content">


            <div class="card">
                <br />
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-3 col-sm-3">
                            <h5 class="card-title float-left align-self-center ">Drive Dashboard</h5>
                        </div>
                        <br />
                        <div class="col-md-9 col-sm-9">
                            <div class="float-right d-xl-inline-block d-lg-inline-block">
                                <a href="drive/create" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Drive</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="table-card latest-activity-card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Venue</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($drives as $row)
                                            <tr>
                                                <td>{{$row['company_name']}}</td>
                                                <td>{{$row['date']}}</td>
                                                <td>{{$row['time']}}</td>
                                                <td>{{$row['venue']}}</td>
                                                <td><label class="badge badge-light-warning">Upcomming</label></td>
                                                <td><a href="/admin/drive/{{$row['id']}}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                    <a id="delete" onclick="verify()" href="/admin/drive/delete/{{$row['id']}}"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
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

        </div>
    </div>
</div>
@endsection