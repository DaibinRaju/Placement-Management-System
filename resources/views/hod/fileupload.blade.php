@extends('hod.layout')

@section('body')
<div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">File Upload</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">File Upload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>File Upload</h5>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data" class="dropzone">
                            <div class="card-body">
                               
                                    <div class="fallback">
                                    @csrf
                                        <input name="file" type="file"/>
                                    </div>
                                
                                <div class="text-center m-t-20">
                                    <button class="btn btn-primary">Upload Now</button>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>

                </div>

                @endsection