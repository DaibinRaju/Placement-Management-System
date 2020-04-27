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
                            <h5 class="card-title float-left align-self-center ">Training Dashboard</h5>
                        </div>
                        <br />
                        <div class="col-md-9 col-sm-9">
                            <div class="float-right d-xl-inline-block d-lg-inline-block">
                                <a href="/admin/training/create" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Training</a>
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
                                                <th>Training Name</th>
                                                <th>Training ID</th>
                                                <th>Trainer</th>
                                                <th>Days</th>
                                                <th>Dates</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($trainings as $row)
                                            <tr>
                                                <td>{{$row['training_name']}}</td>
                                                <td>{{$row['id']}}</td>
                                                <td>{{$row['trainer']}}</td>
                                                <td>{{$row['days']}}</td>
                                                <td>{{$row['dates']}}</td>
                                                <td><a href="/admin/training/{{$row['id']}}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                    <a id="delete" onclick="myFunction()" href="/admin/training/delete/{{$row['id']}}"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
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

<script>
    function myFunction() {
        if (confirm("You are about to delete the training including the attendance and bills datas , Please confirm to proceed")) {
            return true;
        } else {
            return false;
        }
    }
</script>