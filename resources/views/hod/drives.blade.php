@extends('hod.layout')

@section('body')
<div class="row">
	<div class="col-sm-12">
		<div class="card" style="height: auto;">
			<div class="card-header">
				<h5>Active upcomming placement drives</h5>
			</div>
		</div>
	</div>
</div>
<div class="row">
	@foreach($drives as $drive)
	<div class="col-md-6">
		<div class="">
			<div class="card widget-card-user">
				<div class="card-body p-b-0">
					<div class="card-user">
						<span class="badge badge-success float-right"><a style="color:inherit;" href="/student/drive/register/{{$drive->id}}"> REGISTER</a></span>
						<!-- <img src="/assets/images/my/tcs.png" alt="" class="img-radius wid-80"> -->
						<h4 class="p-t-10 p-b-10 m-t-0">{{$drive->company_name}}</h4>
						<span class="text-c-green f-14">Mumbai India</span>
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
	@endforeach
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="card" style="height: auto;">
			<div class="card-header">
				<h5>Expired placement drives</h5>
			</div>
		</div>
	</div>
</div>

@endsection