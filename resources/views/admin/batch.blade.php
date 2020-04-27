@extends('admin.layout')

@section('body')
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
                        <div class="modal-header">
                            <h4 class="modal-title font-weight-bold">Create new batch</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="" method="post" id="form">
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    <label for="batchSelect">Select new batch</label>
                                    <select class="form-control" id="batchSelect" name="name">
                                        <option value="2016-2020">2016-2020</option>
                                        <option value="2017-2021">2017-2021</option>
                                        <option value="2018-2022">2018-2022</option>
                                        <option value="2019-2023">2019-2023</option>
                                        <option value="2020-2024">2020-2024</option>
                                        <option value="2021-2025">2021-2025</option>
                                        <option value="2022-2026">2022-2026</option>
                                        <option value="2023-2027">2023-2027</option>
                                        <option value="2024-2028">2024-2028</option>
                                        <option value="2025-2029">2025-2029</option>
                                        <option value="2026-2030">2026-2030</option>
                                        <option value="2027-2031">2027-2031</option>
                                        <option value="2028-2032">2028-2032</option>
                                        <option value="2029-2033">2029-2033</option>
                                        <option value="2030-2034">2030-2034</option>
                                        <option value="2031-2035">2031-2035</option>
                                        <option value="2032-2036">2032-2036</option>
                                        <option value="2033-2037">2033-2037</option>
                                        <option value="2034-2038">2034-2038</option>
                                        <option value="2035-2039">2035-2039</option>
                                        <option value="2036-2040">2036-2040</option>
                                        <option value="2037-2041">2037-2041</option>
                                        <option value="2038-2042">2038-2042</option>
                                        <option value="2039-2043">2039-2043</option>
                                        <option value="2040-2044">2040-2044</option>
                                        <option value="2041-2045">2041-2045</option>
                                        <option value="2042-2046">2042-2046</option>
                                        <option value="2043-2047">2043-2047</option>
                                        <option value="2044-2048">2044-2048</option>
                                        <option value="2045-2049">2045-2049</option>
                                        <option value="2046-2050">2046-2050</option>
                                        <option value="2047-2051">2047-2051</option>
                                        <option value="2048-2052">2048-2052</option>
                                        <option value="2049-2053">2049-2053</option>
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-rounded btn-success" value="Create">
                                <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-3 col-sm-3">
                            <h5 class="card-title float-left align-self-center ">Batches</h5>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="float-right d-xl-inline-block d-lg-inline-block">
                                <a data-toggle="modal" href="#" data-target=".assign-members" class="float-right btn waves-effect waves-light btn-rounded btn-primary">New batch</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="table-responsive">
                        <table class="table color-table primary-table">
                            <thead>
                                <tr>
                                    <th>Batch Id</th>
                                    <th>Batch</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($batches))
                                @foreach($batches as $batch)
                                <tr>
                                    <td>{{$batch['id']}}</td>
                                    <td>{{$batch['name']}}</td>
                                    <td>{{$batch['created_at']}}</td>
                                    <td>
                                        <a href="/admin/batches/{{$batch['id']}}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                        <a id="delete" onclick="verify()" href="/admin/batches/delete/{{$batch['id']}}"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection