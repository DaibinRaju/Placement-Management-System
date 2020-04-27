@extends('admin.layout')

@section('extracss')
<link rel="stylesheet" href="/assets/css/plugins/dataTables.bootstrap4.min.css">
@endsection

@section('body')
<div class="content-main  container">
    <div class="pcoded-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Student searching</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Choose batch</label>
                                        <select class="form-control" name="batch">
                                            <option value="pitons">2016-20</option>
                                            <option value="cams">2017-21</option>
                                            <option value="nuts">2018-22</option>
                                            <option value="bolts">2019-23</option>
                                            <option value="stoppers">2020-24</option>
                                            <option value="sling">2021-25</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Choose department</label>
                                        <select class="form-control" name="department">
                                            @foreach($departments as $department)
                                            <option value="{{$department->department_name}}">{{$department->department_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class='col-lg-12 col-lg-offset-2'>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group d-inline ">
                                        <div class="form-check">
                                        @foreach($form_items as $item)
                                            <div class="custom-control d-inline custom-checkbox">
                                                <input type="checkbox" name="required_data[]" class="custom-control-input" value="{{$item->key}}" id="{{$item->key}}">
                                                <label class="custom-control-label" for="{{$item->key}}" >{{$item->name}} </label>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn  btn-primary">Get Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
            @if(isset($details))
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
                                        @foreach($required_data as $data)
                                        <th>{{$data}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $detail)
                                    <tr>
                                        @foreach($required_data as $data)
                                        <td>{{$detail->$data}}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        @foreach($required_data as $data)
                                        <th>{{$data}}</th>
                                        @endforeach
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('extrajs')
<script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/pages/data-basic-custom.js"></script>
@endsection