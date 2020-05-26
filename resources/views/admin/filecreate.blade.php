@extends('admin.layout')

@section('body')
<div class="float-right d-xl-inline-block d-lg-inline-block">
    <a href="/admin/drive" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Back</a>

</div>
<h5>Upload Files</h5>
@if(session()->has('data'))
<div class="alert alert-warning" role="alert">
    {{ session('data') }}
</div>
@endif
<hr>
<form method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="cat" name="cat" value="common">
    <div class="row col-md-12">

        <div class="col-md-4">
            <div class="form-group">
                <label for="nSection">Select number of files</label>
                <input type="hidden" id="custId" name="cat" value="common">
                <select class="form-control" id="nbill" name="nSection" onchange="showSections()">
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
    <hr>
    <div class="form-row" id="billdetails">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">File Description</label>
            <input type="text" class="form-control" id="validationTooltip03" name="file_desc[]" placeholder="Enter Description here" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <label for="validationTooltip04">Upload here ( pdf , jpg , png , docx file only)</label>
            <input type="file" class="form-control" name="allfiles[]" required />
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="btn  btn-primary">Upload</button>
        </div>
    </div>
</form>

<script lang="javascript">
    function showSections() {
        var val = document.getElementById("nbill").value;

        var code = '';

        for (var i = 1; i <= val; i++) {
            code += '<div class="col-md-6 mb-3"><label for="validationTooltip03">Bill Description</label><input type="text" class="form-control" id="validationTooltip03" name="file_desc[]" placeholder="Enter Description here" required><div class="invalid-tooltip">Please provide a valid city.</div></div><div class="col-md-4 mb-4"><label for="validationTooltip04">Upload here ( pdf , jpg , png , docx file only)</label><input type="file" class="form-control" id="validationTooltip04" name="allfiles[]"required><div class="invalid-tooltip">Please provide a valid state.</div></div>';

        }
        document.getElementById('billdetails').innerHTML = code;

    }
</script>

@endsection