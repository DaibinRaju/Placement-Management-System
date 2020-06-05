@extends('student.layout')

@section('body')

<h5>X Standard</h5>
<hr>

<form class="needs-validation" novalidate="" method="post" action="/student/completeprofile">
    @csrf
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">CGPA(out of 10) / Percentage </label>
            <input type="text" class="form-control" id="validationTooltip01" name="x_cgpa" placeholder="Enter score" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="/assets/js/countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="x_country" name="x_country" required></select>
            <script language="javascript">
                populateCountries("x_country", "x_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="x_state" name="x_state" required></select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="x_city" placeholder="City Name" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="x_inst" placeholder="Institute" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Board Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="x_board" placeholder="Board" required>
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="x_yop" placeholder="Passing Year" required>
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
    </div>
    <br><br>
    <h5>XII Standard</h5>
    <hr>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">CGPA(out of 10) / Percentage </label>
            <input type="text" class="form-control" id="validationTooltip01" name="xii_cgpa" placeholder="Enter score" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="assets/js/countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="xii_country" name="xii_country" required></select>
            <script language="javascript">
                populateCountries("xii_country", "xii_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="xii_state" name="xii_state" required></select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="xii_city" placeholder="City Name" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>



    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="xii_inst" placeholder="Institute" required="" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>


        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Board Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="xii_board" placeholder="Board" required="" required>
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="xii_yop" placeholder="Passing Year" required>
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
    </div>
    <br><br>
    <h5>Diploma</h5>
    <hr>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">CGPA</label>
            <input type="text" class="form-control" id="validationTooltip01" name="dip_cgpa" placeholder="Enter score">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="dip_country" name="dip_country"></select>
            <script language="javascript">
                populateCountries("dip_country", "dip_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="dip_state" name="dip_state"></select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="dip_city" placeholder="City Name">
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">University Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="dip_univ" placeholder="University">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">


            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="dip_inst" placeholder="Institute">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Branch Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="dip_branch" placeholder="Branch">
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="dip_yop" placeholder="Passing Year">
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
    </div>
    <br><br>
    <h5>Bachelor's</h5>
    <hr>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">CGPA</label>
            <input type="text" class="form-control" id="validationTooltip01" name="bach_cgpa" placeholder="Enter score" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="bach_country" name="bach_country" required></select>
            <script language="javascript">
                populateCountries("bach_country", "bach_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="bach_state" name="bach_state" required></select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="bach_city" placeholder="City Name" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>



    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">


            <label for="validationTooltip03">University Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="bach_univ" placeholder="University" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="bach_inst" placeholder="Institute" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Branch Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="bach_branch" placeholder="Branch" required>
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="bach_yop" placeholder="Passing Year" required>
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
    </div>

    <br><br>
    <h5>Master's</h5>
    <hr>
    <div class="form-row">
        <div class="col-md-43mb-3">
            <label for="validationTooltip01">CGPA</label>
            <input type="text" class="form-control" id="validationTooltip01" name="mast_cgpa" placeholder="Enter score">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="mas_country" name="mast_country"></select>
            <script language="javascript">
                populateCountries("mas_country", "mas_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="mas_state" name="mast_state"></select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="mast_city" placeholder="City Name">
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>



    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">University Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="mast_univ" placeholder="University">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="mast_inst" placeholder="Institute">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Branch Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="mast_branch" placeholder="Branch">
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">


            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="mast_yop" placeholder="Passing Year">
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
    </div>


    <br><br>
    <h5>Other Details</h5>
    <hr>
    <div class="form-row">
        <div class="form-group">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="checkbox" id="switch-p-1" name="hack">
                <label for="switch-p-1" class="cr"></label>
            </div>
            <label>Hackathons</label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="checkbox" id="switch-p-2" name="cert">
                <label for="switch-p-2" class="cr"></label>
            </div>
            <label>Certifications</label>
        </div>
    </div>
    <br>
    <br>


    <button class="btn  btn-primary" type="submit">Submit form</button>
</form>

<script>
    document.getElementById('switch-p-1').onclick = function() {
        // access properties using this keyword
        if (this.checked) {
            this.value = 1
        } else {
            this.value = 0
        }
    };

    document.getElementById('switch-p-2').onclick = function() {
        // access properties using this keyword
        if (this.checked) {
            this.value = 1
        } else {
            this.value = "0"
        }
    };
</script>









@endsection