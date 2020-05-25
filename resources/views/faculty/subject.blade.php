@extends('faculty.layout')
@section('body')
<div class="col-xl-12">
    <div class="modal fade assign-members" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
        <div class="modal-dialog modle-510">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-weight-bold">Subject Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="" method="post" id="form">

                    <div class="modal-body">
                        @csrf

                        <div class="row form-group col-md-12 m-b-20">
                            <label for="name">Subject Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Subject name" required>
                        </div>

                        <div class="row form-group col-md-12 m-b-20">
                            <label for="description">Subject Description</label>
                            <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter Subject Description" required>
                        </div>

                        <!-- <div class="switch switch-primary d-inline m-r-10"> -->
                        <div class="row form-group col-md-12 m-b-20">
                            <div class="switch switch-primary d-inline m-r-10">
                                <input type="checkbox" name="shared" id="switch-p-1" checked="">
                                <label for="switch-p-1" class="cr"></label>
                                <label id="text">Subject visible to everyone</label>
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
    <div class="page-header" style="margin-bottom: 0px;">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-header-title">
                        <h3 class="m-b-10">Subjects</h5>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <a data-toggle="modal" href="#" data-target=".assign-members" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Subject</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        @foreach($subjects as $subject)
        @if($subject->shared)
        <div class="col-sm-4">
            <div class="card text-white bg-success ">
                <div class="card-header">Public subject</div>
                <div class="card-body">
                    <h5 class="card-title text-white">{{$subject->name}}</h5>
                    <p class="card-text">{{$subject->description}}</p>
                    <a href="{{ route('subject.show',$subject)}}"> <button class="btn  btn-primary">Show more</button></a>
                    <a href="{{ route('subject.delete',$subject)}}"> <button class="btn  btn-danger">Delete</button></a>
                </div>
            </div>
        </div>
        @else
        <div class="col-sm-4">
            <div class="card text-white bg-warning ">
                <div class="card-header">Private subject</div>
                <div class="card-body">
                    <h5 class="card-title text-white">{{$subject->name}}</h5>
                    <p class="card-text">{{$subject->description}}</p>
                    <a href="{{ route('subject.show',$subject)}}"> <button class="btn  btn-primary">Show more</button></a>
                    <a href="{{ route('subject.delete',$subject)}}"> <button class="btn  btn-danger">Delete</button></a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

</div>

<!-- <script>
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("switch-p-1");
        // Get the output text
        var text = document.getElementById("text");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.text = "Private";
        } else {
            text.style.display = "none";
        }
    }
</script> -->
@endsection