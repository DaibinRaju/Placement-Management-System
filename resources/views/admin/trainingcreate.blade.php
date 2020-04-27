@extends('admin.layout')

@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
        <div class="card-header">
                    <h5>Enter Training Details</h5>
                </div>
            <div class="card-body">
                <form id="validation-form123" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Training Name</label>
                                <input type="text" class="form-control" name="training_name" placeholder="Training Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Trainer</label>
                                <input type="text" class="form-control" name="trainer" placeholder="Trainer Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="training_description" placeholder="Training Description" required></textarea>
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nSection">Number of Days</label>
                                    <select class="form-control" id="nSection" name="nSection" onchange="showSections()">
                                        <option selected="selected" value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="sectionDetails" class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Date</label>
                                        <input type="date" name="dates[]" id="joel" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn  btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script lang="javascript">
    function showSections() {
        var val = document.getElementById("nSection").value;

        var code = '';

        for (var i = 1; i <= val; i++) {
            code += ' <div class="col-md-4"><div class="form-group"><label class="form-label">Date</label><input id="nSection" name="dates[]" type="date" name="date" class="form-control" required></div></div>';

        }
        document.getElementById('sectionDetails').innerHTML = code;

    }
</script>