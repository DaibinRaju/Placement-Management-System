@extends('faculty.layout')
@section('body')
<!-- <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold">Department Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <form method="post">

                <div class="modal-body">
                    <div class=" col-md-3">
                        <ul class="nav nav-pills nav-stacked " style="height:400px; overflow-y: scroll;">
                            <li class="nav-item col-md-12">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-rounded btn-success" value="Save">
                    <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Create Exam</h5>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button> -->
            </div>
            <div class="card-body">

                <h5>Exam Details</h5>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="examName">Exam Name</label>
                                <input type="text" name="name" class="form-control" id="examName" placeholder="Enter exam name" required>
                            </div>
                            <div class="form-group">
                                <label for="startDate" class="form-label">Exam Activation Date</label>
                                <input type="date" name="act_date" class="form-control" id="startDate" placeholder="Enter Exam Activation Date" required>
                            </div>
                            <div class="form-group">
                                <label for="endDate" class="form-label">Exam Expiry Date</label>
                                <input type="date" name="exp_date" class="form-control" id="endDate" placeholder="Enter Exam Expiry Date" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="mark" class="form-label">Duration</label>
                                <input type="number" name="time" class="form-control" value="1" id="mark" placeholder="Enter duration of exam" required>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Exam Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter exam password" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Exam Activation Time</label>
                                <input type="time" name="act_time" class="form-control" placeholder="Enter Exam Activation Time" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Exam Expiry Time</label>
                                <input type="time" name="exp_time" class="form-control" placeholder="Enter Exam Expiry Time" required>
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn  btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection