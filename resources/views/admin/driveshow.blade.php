@extends('admin.layout')

@section('extracss')
<link rel="stylesheet" href="/assets/css/plugins/dataTables.bootstrap4.min.css">
@endsection
@section('body')

<div class="modal fade assign-members" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
	<div class="modal-dialog modle-510">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title font-weight-bold">Upload Document</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form action="{{route('admin.drive.fileupload',$drive)}}" method="post" id="form" enctype="multipart/form-data">

				<div class="modal-body">
					@csrf
					<div class="row form-group col-md-12 m-b-20">
						<label for="department">Upload here ( pdf , jpg , png , docx file only)</label>
						<input type="file" class="form-control" name="file" onchange="ValidateSingleInput(this);" required />
						<input type="hidden" id="custId" name="drive_id" value="{{ $drive->id }}" />
						<input type="hidden" id="custId" name="cat" value="drive" />

					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-rounded btn-success" value="Upload">
					<button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="">
			<div class="card widget-card-user">
				<div class="card-body p-b-0">
					<div class="card-user">
						<span class="badge badge-success float-right">ACTIVE</span>
						<img src="assets/images/my/tcs.png" alt="" class="img-radius wid-80">
						<h4 class="p-t-10 p-b-10 m-t-0">{{$drive->company_name}}</h4>
						<p class="text-muted p-t-10 p-b-10 m-0">{{$drive->description}}</p>
					</div>
				</div>
				<div class="card-footer border-top bg-light">
					<div class="row">
						<div class="col-sm-4 footer-menu text-center border-right">
							<p class="text-muted f-w-400 m-0 f-16">Date</p>
							<span class="f-14 f-w-400">{{$drive->date}}</span>
						</div>
						<div class="col-sm-4 footer-menu text-center border-right">
							<p class="text-muted f-w-400 m-0 f-16">Time</p>
							<span class="f-14 f-w-400">{{$drive->time}}</span>
						</div>
						<div class="col-sm-4 footer-menu text-center">
							<p class="text-muted f-w-400 m-0 f-16">Venue</p>
							<span class="f-14 f-w-400">{{$drive->venue}}</span>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5>Placed students</h5>
			</div>
			<div class="card-body">
				<div class="dt-responsive table-responsive">
					<table id="simpletable" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
							<th>No</th>
								<th>Name</th>
								<th>Department</th>
								<th>Admission Number</th>	
							</tr>
						</thead>
						<tbody>
						@foreach($registrations as $key=>$registration)
							<tr>
								<td>{{++$key}}</td>
								<td>{{$registration->user->name}}</td>
								<td>{{$registration->user->department->department_name}}</td>
								<td>{{$registration->user->admission_number}}</td>
								
							</tr>
							@endforeach
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title float-left  m-b-40  align-self-center text-uppercase">Attachments</h5>
				<a data-toggle="modal" href="#" data-target=".assign-members" class="float-right"><i class="fas fa-paperclip m-r-5"></i>Attach</a>
				<div class="clearfix"></div>
				<div class="table-responsive">
					<table class="table color-table primary-table">
						<thead>
							<tr>
								<th>Document Name </th>
								<th>Attached by</th>
								<th>Date</th>
								<th>Size</th>
								<th class="icon-color">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-download" aria-hidden="true"></i></th>
								<th class="icon-color2">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" aria-hidden="true"></i></th>
							</tr>
						</thead>
						<tbody>
							@foreach($files as $row)
							<tr>
								<td class="font-bold">{{ $row['filename'] }}</td>
								<td>{{ $row['uploaded_by'] }}</td>
								<td>{{ $row['upload_date'] }}</td>
								<td>{{ $row['filesize'] }}</td>
								<td>
									<form method="post" action="/admin/fileaction">
										@csrf
										<input type="hidden" id="cat" name="cat" value="drive" />
										<input type="hidden" id="cat1" name="action" value="download" />
										<input type="hidden" id="cat2" name="fileid" value="{{ $row['id'] }}">
										<button type="submit" class="btn"><i class="fas fa-download"></i></button>
									</form>

								</td>
								<td>
									<form method="post" action="/admin/fileaction">
										@csrf
										<input type="hidden" id="cat" name="cat" value="drive" />
										<input type="hidden" id="cat3" name="action" value="delete" />
										<input type="hidden" id="cat5" name="driveid" value="{{ $drive->id }}" />
										<input type="hidden" id="cat4" name="fileid" value="{{ $row['id'] }}">
										<button type="submit" class="btn"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></button>
									</form>

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

<div class="row">
<div class="col-sm-12">
<div class="page-titles">
<div class="align-self-center text-right">
</div>
</div>
<div class="tab-content">

<div class="modal fade assign-members" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
<div class="modal-dialog modle-510">
<div class="modal-content">
<div class="modal-header border-0 pl-4 pr-4 pb-0">
<h4 class="modal-title text-uppercase font-weight-bold" id="myLargeModalLabel2">Assign members</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body pt-3  pl-2 pr-2 pb-0">
<div class="table-responsive">
<table class="table color-table primary-table table2">
<tbody>
<tr>
<td>
<div class="round-img"><img src="assets/images/user/avatar-2.jpg" alt="user" class="img-radius"></div>
</td>
<td class="font-weight-bold">Roberto Jovanni</td>
<td>developer</td>
<td><input type="radio"></td>
</tr>
<tr>
<td>
<div class="round-img"><img src="assets/images/user/avatar-2.jpg" alt="user" class="img-radius"></div>
</td>
<td class="font-weight-bold">Roberto Jovanni</td>
<td>developer</td>
<td><input type="radio"></td>
</tr>
<tr>
<td>
<div class="round-img"><img src="assets/images/user/avatar-2.jpg" alt="user" class="img-radius"></div>
</td>
<td class="font-weight-bold">Roberto Jovanni</td>
<td>developer</td>
<td><input type="radio"></td>
</tr>
<tr>
<td>
<div class="round-img"><img src="assets/images/user/avatar-2.jpg" alt="user" class="img-radius"></div>
</td>
<td class="font-weight-bold">Roberto Jovanni</td>
<td>developer</td>
<td><input type="radio"></td>
</tr>
<tr>
<td>
<div class="round-img"><img src="assets/images/user/avatar-2.jpg" alt="user" class="img-radius"></div>
</td>
<td class="font-weight-bold">Roberto Jovanni</td>
<td>developer</td>
<td><input type="radio"></td>
</tr>
<tr>
<td>
<div class="round-img"><img src="assets/images/user/avatar-2.jpg" alt="user" class="img-radius"></div>
</td>
<td class="font-weight-bold">Roberto Jovanni</td>
<td>developer</td>
<td><input type="radio"></td>
</tr>
</tbody>
</table>
</div>
<div class="clearfix"></div>
</div>
<div class="modal-footer  p-4">
<button type="button" class="btn btn-rounded btn-success">Save</button>
<button type="button" class="btn btn-rounded  btn-secondary">Cancel</button>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class=" col-md-3 col-sm-3">
<h5 class="card-title float-left align-self-center text-uppercase">Registered Students</h5>
</div>
<div class="col-md-9 col-sm-9">
<div class="float-right d-none d-xl-inline-block d-lg-inline-block">
<div class="search"> <span class="fa fa-search"></span>
<input placeholder="Search..">
</div>
<a data-toggle="modal" href="#" data-target=".assign-members" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Export Excel</a>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="mt-3">

</div>
<div class="clearfix"></div>
<div class="table-responsive">
<table class="table color-table primary-table">
<thead>
<tr>
<th>No </th>
<th>Name</th>
<th>Department</th>
<th>Admission Number</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($registrations as $key=>$registration)
<tr>
<td>{{++$key}}</td>
<td>{{$registration->user->name}}</td>
<td class="font-bold">{{$registration->user->department->department_name}}</td>
<td>{{$registration->user->admission_number}}</td>
<td class="text-success"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td>
<td class="text-light-blue"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu" x-placement="bottom-start" x-out-of-boundaries="" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(669px, 201px, 0px);"><a class="dropdown-item" href="#">Confirm Placed</a> <a class="dropdown-item" href="#">View Student</a> <a class="dropdown-item text-light-danger" href="#">Reject Registration</a> </div>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<div class="row">
<div class="col-md-6 page-n">Show: <a href="#" class="active">10</a> <a href="#">20</a> <a href="#">50</a></div>
<div class="col-md-6 text-right page-n">Prev <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> ... <a href="#">10</a> <a href="#">11</a> <a href="#">12</a> <a href="#">Next</a></div>
</div>
</div>
</div>

</div>
</div>
</div>
@endsection

@section('extrajs')
<script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/pages/data-basic-custom.js"></script>
<script>
    var _validFileExtensions = [".jpg", ".pdf", ".docx", ".png"];

    function ValidateSingleInput(oInput) {
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    oInput.value = "";
                    return false;
                }
            }
        }
        return true;
    }
</script>
@endsection

