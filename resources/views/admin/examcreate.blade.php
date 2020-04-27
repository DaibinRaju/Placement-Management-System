@extends('admin.layout')
@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Create Exam</h5>
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
                                <label for="mark" class="form-label">Mark</label>
                                <input type="number" name="mark" class="form-control" id="mark" placeholder="Enter mark for each question" required>
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
                            <div class="form-group">
                                <label for="nmark" class="form-label">Negative Mark</label>
                                <input type="number" name="nmark" class="form-control" id="nmark" placeholder="Enter negative mark for each question" required>
                                <small id="nmarkhelp" class="form-text text-muted">Enter 0 if there is no negative mark.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nSection">Number of sections</label>
                                <select class="form-control" id="nSection" name="nSection" onchange="showSections()">
                                    <option selected="selected" value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="sectionDetails" class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="sectionName">Section Name</label>
                                        <input type="text" name="section1" class="form-control" id="sectionName" placeholder="Enter section name" required>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">Question File</label>
                                        <input type="file" name="file1" class="form-control" id="file" placeholder="Choose question excel file" required>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn  btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script lang="javascript">
    function showSections() {
        var val = document.getElementById("nSection").value;
        
        var code='';
        
        for (var i = 1; i <=val; i++) {
             code+='<div class="row"><div class="col-md-6"><div class="form-group"><label for="sectionName">Section Name</label><input type="text" name="section'+i+'" class="form-control" id="sectionName" placeholder="Enter section name" required></div></div><div class="col-md-6"><div class="form-group"><label for="file">Question File</label><input type="file" name="file'+i+ '" class="form-control" id="file" placeholder="Choose question excel file" required></div></div></div>';
                            
        }
        document.getElementById('sectionDetails').innerHTML = code;
    }
</script>
@endsection