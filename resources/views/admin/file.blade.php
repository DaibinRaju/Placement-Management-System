@extends('admin.layout')

@section('body')
<div class="float-right d-xl-inline-block d-lg-inline-block">
    <a href="{{route('admin.file.create')}}" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Create new file</a>

</div>

<h5>Manage Files</h5>
<hr>

<div class="row">
    @foreach ($files as $row)
    <div class="col-md-4 col-xl-3">

        <div class="card revenue-map">
            <div class="card-header">
                <center>
                    <h5>{{ $row['filedesc'] }}</h5>
                </center>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="/admin/fileaction">
                            @csrf
                            <input type="hidden" id="cat" name="cat" value="common">
                            <input type="hidden" id="act" name="action" value="download">
                            <input type="hidden" id="file_id" name="fileid" value="{{ $row['id'] }}">
                            <center><button type="submit" class="btn"><i class="fas fa-file fa-3x"></i></button></center>
                        </form>
                        <center><span class="text-muted f-14 d-block">{{ $row['filename'] }}</span></center>
                        <center>
                            <h6>{{ $row['filesize'] }}</h6>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">

                        <form method="post" action="/admin/fileaction">
                            @csrf
                            <input type="hidden" id="cat1" name="cat" value="common">
                            <input type="hidden" id="act1" name="action" value="delete">
                            <input type="hidden" id="file_id" name="fileid" value="{{ $row['id'] }}">
                            <center><button type="submit" class="btn"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach
</div>



@endsection