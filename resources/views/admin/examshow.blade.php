@extends('admin.layout')
@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="tab-content">

            <div class="p-0">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left align-self-center tasks statistics text-uppercase">Exam details</h5>
                                <div class="clearfix"></div>

                                <div class="m-t-20 no-block">
                                    <div class="row f-16">
                                        <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Exam Name</span> </div>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <p> {{$exam['name']}} </p>
                                        </div>
                                    </div>

                                    <div class="m-t-20 no-block">
                                        <div class="row f-16">
                                            <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Password</span> </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <p> {{$exam['password']}} </p>
                                            </div>
                                        </div>
                                        <div class="m-t-20 no-block">
                                            <div class="row f-16">
                                                <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Activation Date</span> </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <p> {{$exam['act_date']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Activation Time</span> </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <p> {{$exam['act_time']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Expiry Date</span> </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <p> {{$exam['exp_date']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Expiry Time</span> </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <p> {{$exam['exp_time']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Marks per correct response</span> </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <p> {{$exam['mark']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Negative mark per incorrect response</span> </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <p> {{$exam['nmark']}} </p>
                                                </div>
                                            </div>
                                            <div class="row f-16">
                                                <div class="col-lg-3 col-md-3 col-sm-12"> <span class="weight-500 text-dark">Number of Sections</span> </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <p> {{$exam['nsection']}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title float-left  m-b-40  align-self-center text-uppercase">Results</h5>
                                <div class="clearfix"></div>
                                <div class="table-responsive">
                                    <table class="table color-table primary-table">
                                        <thead>
                                            <tr>
                                                <th>Document Name </th>
                                                <th>Attached by</th>
                                                <th>Date</th>
                                                <th>Size</th>
                                                <th class="icon-color"><i class="fa fa-download" aria-hidden="true"></i></th>
                                                <th class="icon-color2"><i class="fa fa-trash" aria-hidden="true"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-bold">1. Documentation.pdf</td>
                                                <td>Brian Summerhoold</td>
                                                <td>25.05.2017, 11:15</td>
                                                <td>2 Mb</td>
                                                <td class="icon-color op-5"><i class="fa fa-download" aria-hidden="true"></i></td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger" aria-hidden="true"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">2. Contract.pdf</td>
                                                <td>Brian Summerhoold</td>
                                                <td>25.05.2017, 12:03</td>
                                                <td>1.5 Mb</td>
                                                <td class="icon-color op-5"><i class="fa fa-download" aria-hidden="true"></i></td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger" aria-hidden="true"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">3. Logotype.psd</td>
                                                <td>Brian Summerhoold</td>
                                                <td>25.05.2017, 14:26</td>
                                                <td>2 Mb</td>
                                                <td class="icon-color op-5"><i class="fa fa-download" aria-hidden="true"></i></td>
                                                <td class="icon-color2 op-5"><i class="fa fa-trash text-danger" aria-hidden="true"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection