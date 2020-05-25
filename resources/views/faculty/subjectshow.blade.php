@extends('faculty.layout')
@section('body')


<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold">Department Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <form method="post">
                @csrf
                <div class="modal-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">MCQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Numerical</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Import from File</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row form-group col-md-12 m-b-20">
                                <label for="name">Question Name</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Question name" required>
                            </div>
                            <div >
                            
                                <textarea id="tiny" name="question"></textarea>
                            </div>
                            <div class="row form-group col-md-12 m-b-20">
                                <label for="option1">Option 1</label>
                                <input type="text" name="option1" class="form-control" id="option1" placeholder="Enter option 1" required>
                            </div>
                            <div class="row form-group col-md-12 m-b-20">
                                <label for="option2">Option 2</label>
                                <input type="text" name="option2" class="form-control" id="option2" placeholder="Enter option 2" required>
                            </div>
                            <div class="row form-group col-md-12 m-b-20">
                                <label for="option3">Option 3</label>
                                <input type="text" name="option3" class="form-control" id="option3" placeholder="Enter option 3" required>
                            </div>
                            <div class="row form-group col-md-12 m-b-20">
                                <label for="option4">Option 4</label>
                                <input type="text" name="option4" class="form-control" id="option4" placeholder="Enter option 4" required>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p class="mb-0">Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate
                                exercitation
                                cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor
                                duis.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p class="mb-0">Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu
                                veniam. Eiusmod
                                minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse
                                irure officia elit do ipsum ullamco Lorem. Ullamco ut ad minim do mollit labore ipsum laboris ipsum commodo sunt tempor enim incididunt. Commodo quis sunt dolore aliquip aute tempor irure magna enim
                                minim reprehenderit. Ullamco consectetur culpa veniam sint cillum aliqua incididunt velit ullamco sunt ullamco quis quis commodo voluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua
                                pariatur mollit voluptate voluptate consequat non.</p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-rounded btn-success" value="Save">
                    <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="page-titles">
            <div class="align-self-center text-right">
            </div>
        </div>
        <div class="tab-content">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-3 col-sm-3">
                            <h5 class="card-title float-left align-self-center ">Departments</h5>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="float-right d-xl-inline-block d-lg-inline-block">
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button> -->

                                <a data-toggle="modal" href="#" data-target=".bd-example-modal-xl" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>
                    <div class="table-responsive">
                        <table class="table color-table primary-table">
                            <thead>
                                <tr>

                                    <th>Department Id</th>
                                    <th>Department Name</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="/assets/css/plugins/dataTables.bootstrap4.min.css">
@endsection

@section('js')
<script src="/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="/assets/js/pages/data-source-custom.js"></script>
<script src="/assets/js/tinymce/tinymce.min.js"></script>


<script>
    tinymce.init({
        selector: 'textarea#tiny'
    });
</script>



@endsection