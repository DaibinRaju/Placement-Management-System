<?php

namespace App\Http\Controllers;

use App\Drive;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.home");
        /*
<!--
@foreach($drive as $drive)
<div class="row">
	<div class="col-md-12">

		<div class="">
			<div class="card widget-card-user">
				<div class="card-body p-b-0">
					<div class="card-user">
						<span class="badge badge-success float-right">ACTIVE</span>
						<img src="assets/images/my/tcs.png" alt="" class="img-radius wid-80">
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
</div>
@endforeach
-->*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.createdrive");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function show(Drive $drive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function edit(Drive $drive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drive $drive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drive  $drive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drive $drive)
    {
        //
    }
}
