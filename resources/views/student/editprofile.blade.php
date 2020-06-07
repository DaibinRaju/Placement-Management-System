@extends('student.layout')

@section('body')

<h5>Personal Info</h5>
<hr>

<form class="needs-validation" name="form1" novalidate="" method="post">
    @csrf
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">Name</label>
            <input type="text" class="form-control" id="validationTooltip01" name="name" value="{{ $user_data['student_name'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip01">Branch</label>
            <input type="text" class="form-control" id="validationTooltip01" name="branch" value="{{ $user_data['branch'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip01">Division</label>
            <input type="text" class="form-control" id="validationTooltip01" name="division" value="{{ $user_data['division'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip01">Enrollment Number</label>
            <input type="text" class="form-control" id="validationTooltip01" name="branch" value="{{ $user_data['enrollment_number'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">University Reg No</label>
            <input type="text" class="form-control" id="validationTooltip01" name="university_reg_no" value="{{ $user_data['university_reg_no'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip01">Date Of Birth</label>
            <input type="text" class="form-control" id="validationTooltip01" name="date_of_birth" value="{{ $user_data['date_of_birth'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip01">Admission No</label>
            <input type="text" class="form-control" id="validationTooltip01" name="admission_number" value="{{ $user_data['admission_number'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip01">Gender</label>
            <input type="text" class="form-control" id="validationTooltip01" name="gender" value="{{ $user_data['gender'] }}" disabled>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
       
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Permanent Address </label>
            <input type="text" class="form-control" id="validationTooltip03" name="permanent_address" value="{{ $user_data['permanent_address'] }}" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Present Address </label>
            <input type="text" class="form-control" id="validationTooltip03" name="present_address" value="{{ $user_data['present_address'] }}" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">Phone No</label>
            <input type="text" class="form-control" id="validationTooltip01" name="student_phone_no" value="{{ $user_data['student_phone_no'] }}" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationTooltip01">Email Id</label>
            <input type="text" class="form-control" id="validationTooltip01" name="mail_id" value="{{ $user_data['mail_id'] }}" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
    </div>
    <br><br>
    <h5>X Standard</h5>
    <hr>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip01">CGPA(out of 10) / Percentage </label>
            <input type="text" class="form-control" id="validationTooltip01" name="x_cgpa" value="{{ $user_data['x_cgpa'] }}" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="/assets/js/countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="x_country" name="x_country" required>
            <script language="javascript">
                populateCountries("x_country", "x_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
            <option value="{{ $x_country }}" {{ in_array($x_country,$x_check) ? 'selected' : '' }}> {{ $user_data['x_country'] }}</option>
            <select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="x_state" name="x_state" required>
            <option value="{{ $x_state }}" {{ in_array($x_state,$x_check) ? 'selected' : '' }}> {{ $user_data['x_state'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="x_city" value="{{ $user_data['x_city'] }}" placeholder="City Name" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="x_inst" value="{{ $user_data['x_institue'] }}" placeholder="Institute" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Board Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="x_board" value="{{ $user_data['x_board'] }}" placeholder="Board" required>
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="x_yop"  value="{{ $user_data['x_yop'] }}" placeholder="Passing Year" required>
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
            <input type="text" class="form-control" id="validationTooltip01" name="xii_cgpa" value="{{ $user_data['xii_cgpa'] }}"  placeholder="Enter score" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="assets/js/countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="xii_country" name="xii_country" required>
            <script language="javascript">
                populateCountries("xii_country", "xii_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
             <option value="{{ $xii_country }}" {{ in_array($xii_country,$xii_check) ? 'selected' : '' }}> {{ $user_data['xii_country'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="xii_state" name="xii_state" required>
            <option value="{{ $xii_state }}" {{ in_array($xii_state,$xii_check) ? 'selected' : '' }}> {{ $user_data['xii_state'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="xii_city" value="{{ $user_data['xii_city'] }}" placeholder="City Name" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>



    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="xii_inst" value="{{ $user_data['xii_institue'] }}" placeholder="Institute" required="" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>


        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Board Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="xii_board" value="{{ $user_data['xii_board'] }}" placeholder="Board" required="" required>
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="xii_yop" value="{{ $user_data['xii_yop'] }}" placeholder="Passing Year" required>
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
            <input type="text" class="form-control" id="validationTooltip01" name="dip_cgpa" value="{{ $user_data['dip_cgpa'] }}" placeholder="Enter score">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="dip_country" name="dip_country">
            <script language="javascript">
                populateCountries("dip_country", "dip_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
             <option value="{{ $dip_country }}" {{ in_array($dip_country,$dip_check) ? 'selected' : '' }}> {{ $user_data['dip_country'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="dip_state" name="dip_state">
            <option value="{{ $dip_state }}" {{ in_array($dip_state,$dip_check) ? 'selected' : '' }}> {{ $user_data['dip_state'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="dip_city" value="{{ $user_data['dip_city'] }}" placeholder="City Name">
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">University Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="dip_univ" value="{{ $user_data['dip_university'] }}" placeholder="University">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">


            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="dip_inst" value="{{ $user_data['dip_institute'] }}" placeholder="Institute">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Branch Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="dip_branch" value="{{ $user_data['dip_branch'] }}" placeholder="Branch">
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="dip_yop" value="{{ $user_data['dip_yop'] }}" placeholder="Passing Year">
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
            <input type="text" class="form-control" id="validationTooltip01" name="bach_cgpa" value="{{ $user_data['bach_cgpa'] }}" placeholder="Enter score" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="bach_country" name="bach_country" required>
            <script language="javascript">
                populateCountries("bach_country", "bach_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
             <option value="{{ $bach_country }}" {{ in_array($bach_country,$bach_check) ? 'selected' : '' }}> {{ $user_data['bach_country'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="bach_state" name="bach_state" required>
            <option value="{{ $bach_state }}" {{ in_array($bach_state,$bach_check) ? 'selected' : '' }}> {{ $user_data['bach_state'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="bach_city" value="{{ $user_data['bach_city'] }}" placeholder="City Name" required>
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>



    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">


            <label for="validationTooltip03">University Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="bach_univ" value="{{ $user_data['bach_university'] }}" placeholder="University" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="bach_inst" value="{{ $user_data['bach_institute'] }}" placeholder="Institute" required>
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Branch Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="bach_branch" value="{{ $user_data['bach_branch'] }}" placeholder="Branch" required>
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="bach_yop" value="{{ $user_data['bach_yop'] }}" placeholder="Passing Year" required>
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
            <input type="text" class="form-control" id="validationTooltip01" name="mast_cgpa" value="{{ $user_data['mast_cgpa'] }}" placeholder="Enter score">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <script type="text/javascript" src="countries.js"></script>
            <label for="validationTooltip02">Graduation Country</label>
            <select class="form-control" id="mas_country" name="mast_country">
            <script language="javascript">
                populateCountries("mas_country", "mas_state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            </script>
             <option value="{{ $mast_country }}" {{ in_array($mast_country,$mast_check) ? 'selected' : '' }}> {{ $user_data['mast_country'] }}</option>
            </select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip02">Graduating State</label>
            <select class="form-control" id="mas_state" name="mast_state">
            <option value="{{ $mast_state }}" {{ in_array($mast_state,$mast_check) ? 'selected' : '' }}> {{ $user_data['mast_state'] }}</option></select>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="mast_city" value="{{ $user_data['mast_city'] }}" placeholder="City Name">
            <div class="invalid-tooltip">


                Please provide a valid city.
            </div>
        </div>



    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">University Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="mast_univ" value="{{ $user_data['mast_university'] }}" placeholder="University">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Institute Name</label>
            <input type="text" class="form-control" id="validationTooltip03" name="mast_inst" value="{{ $user_data['mast_institute'] }}" placeholder="Institute">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Branch Of Study</label>
            <input type="text" class="form-control" id="validationTooltip04" name="mast_branch" value="{{ $user_data['mast_branch'] }}" placeholder="Branch">
            <div class="invalid-tooltip">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">


            <label for="validationTooltip05">Year of Passing</label>
            <input type="text" class="form-control" id="validationTooltip05" name="mast_yop" value="{{ $user_data['mast_yop'] }}" placeholder="Passing Year">
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
                <input type="hidden" name="hack" value="0">
                <input type="checkbox" id="switch-p-1" name="hack" {{ in_array($hack,$hackathons) ? 'checked' : ''  }}>
                <label for="switch-p-1" class="cr"></label>
            </div>
            <label>Hackathons</label>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="hidden" name="cert" value="0">
                <input type="checkbox" id="switch-p-2" name="cert"{{ in_array($cert,$certifications) ? 'checked' : ''  }} >
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
        }
    };

    document.getElementById('switch-p-2').onclick = function() {
        // access properties using this keyword
        if (this.checked) {
            this.value = 1
        } 
    };
</script>


@endsection