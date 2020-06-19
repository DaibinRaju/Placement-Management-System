@extends('student.layout')

@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="tab-content" id="myTabContent">

            <div class="row">

                @foreach($exams as $exam)

                <div class="col-md-6">
                    <div class="card user-card user-card-2 shape-left">

                        <div class="card-header border-0 p-2 pb-0">
                            <div class="cover-img-block">
                                <img src="/assets/images/exam.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="text-center">
                                <h6 class="mb-1 mt-3"></h6>
                                <p class="mb-3 text-muted">{{$exam->name}}</p>
                            </div>
                            <hr class="wid-80 b-wid-3 my-4">
                            <div class="row text-center">
                                <div class="col">
                                    <h6 class="mb-1">{{count($exam->section)}}</h6>
                                    <p class="mb-0">Sections</p>
                                </div>
                                <div class="col">
                                    <a href="{{route('exam.details',$exam)}}"><button type="button" class="btn btn-primary">Details</button></a>
                                </div>
                                <div class="col">
                                    <h6 class="mb-1">{{$exam->time}}</h6>
                                    <p class="mb-0">Minutes</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection