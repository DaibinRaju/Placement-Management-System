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
<div class="modal fade bd-example-modal-xl" tabindex="-1" id="model1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Select students</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form method="post">
				@csrf
				<div class="modal-body">
					<div class="dt-responsive table-responsive">
						<table id="select" class="table table-striped table-bordered nowrap">
							<thead>
								<tr>
									<th>Select</th>
									<th>Name</th>
									<th>Department</th>
									<th>Admission Number</th>
								</tr>
							</thead>
							<tbody>
								@foreach($registrations as $key=>$registration)
								<tr>
									<td>
										<div class="chk-option">
											<label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
												<input type="checkbox" name="pld_stu[]" class="custom-control-input" value="{{$registration->user->id}}">
												<span class="custom-control-label"></span>
											</label>
										</div>
									</td>
									<td>{{$registration->user->name}}</td>
									<td>{{$registration->user->department->department_name}}</td>
									<td>{{$registration->user->admission_number}}</td>
								</tr>
								@endforeach
							</tbody>

						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-rounded btn-success">Save</button>
					<button type="button" class="btn btn-rounded  btn-secondary">Cancel</button>
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
				<h5>Registered students</h5>
			</div>
			<div class="card-body">
				<div class="dt-responsive table-responsive">
				<table id="reg-stu" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
								@foreach($table_headings as $head)
								<th>{{ $head }}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach($table_rows as $row)
							<tr>
								@foreach($row as $data)
								<td>{{ $data }}</td>
								@endforeach
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
				<div class="row">
					<div class=" col-md-3 col-sm-3">
						<h5 class="card-title float-left align-self-center ">Placed Students</h5>
					</div>
					<br>
					<div class="col-md-9 col-sm-9">
						<div class="float-right d-xl-inline-block d-lg-inline-block">
							<a data-toggle="modal" href="#" data-target="#model1" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add students</a>
						</div>
					</div>
				</div>
				<div class="dt-responsive table-responsive">
					<table id="pld-stu" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Department</th>
								<th>Admission Number</th>
								<th class="icon-color2">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" aria-hidden="true"></i></th>
							</tr>
						</thead>
						<tbody>
							@foreach($drive->placement as $key=>$placement)
							<tr>
								<td>{{++$key}}</td>
								<td>{{$placement->user->name}}</td>
								<td>{{$placement->user->department->department_name}}</td>
								<td>{{$placement->user->admission_number}}</td>
								<td>
									<form method="post">
										@csrf
										@method('delete')
										<input type="hidden" name="id" value="{{ $placement->id }}">
										<button type="submit" class="btn"><i class="feather icon-trash-2"></i></button>
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
										<button type="submit" class="btn"><i class="fa fa-download"></i></button>
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


@endsection

@section('extrajs')
<script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- <script src="/assets/js/pages/data-basic-custom.js"></script> -->
<!-- <script src="/assets/js/pages/data-export-custom.js"></script> -->
<script src="/assets/js/plugins/buttons.colVis.min.js"></script>
<script src="/assets/js/plugins/buttons.print.min.js"></script>
<script src="/assets/js/plugins/pdfmake.min.js"></script>
<script src="/assets/js/plugins/jszip.min.js"></script>
<script src="/assets/js/plugins/dataTables.buttons.min.js"></script>
<script src="/assets/js/plugins/buttons.html5.min.js"></script>
<script src="/assets/js/plugins/buttons.bootstrap4.min.js"></script>
<script src="/assets/js/plugins/dataTables.select.min.js"></script>
<script>
	$(document).ready(function() {
		setTimeout(function() {
			$('#reg-stu').DataTable({
				dom: 'Bfrtip',
				buttons: ['copy', 'excel', 'print', 'colvis']
			});

			$('#pld-stu').DataTable({
				dom: 'Bfrtip',
				buttons: ['copy', 'excel', 'print', 'colvis']
			});

			$('#select').DataTable();

		}, 350);
	});
</script>
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