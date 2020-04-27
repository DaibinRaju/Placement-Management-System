@extends('student.layout')

@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Drive Registration</h5>
            </div>
            <div class="card-body">
                <form id="validation-form123" method="post">
                    @csrf
                    <h5>Details required</h5>
                    <hr>
                    <div class="row">
                        @foreach($code as $code)
                        {!!$code!!}
                        @endforeach
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn  btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <script>
                    let student_detail={!!$formdata[0]!!}
                    @foreach($js as $js)
                    {!!$js!!}
                    @endforeach
                </script>
            </div>
        </div>
    </div>

</div>

@endsection