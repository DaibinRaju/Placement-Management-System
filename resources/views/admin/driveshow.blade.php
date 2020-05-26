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
				<h5>Registered students</h5>
			</div>
			<div class="card-body">
				<div class="dt-responsive table-responsive">
					<table id="simpletable" class="table table-striped table-bordered nowrap">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Quinn Flynn</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008/11/28</td>
								<td>$162,700</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</tfoot>
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

