@extends('admin.layout')

@section('extracss')
<link rel="stylesheet" href="/assets/css/plugins/dataTables.bootstrap4.min.css">
@endsection
@section('body')
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

	<div class="col-sm-12">
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
</div>
@endsection

@section('extrajs')
<script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/pages/data-basic-custom.js"></script>
@endsection