@extends('admin.layout')

@section('body')

<div class="row">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Create Drives</h5>
            </div>
            <div class="card-body">
                <form id="validation-form123" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="company_name" placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" placeholder="Drive Description" required></textarea>
                            </div>
                        </div>
                    <div class="row col-md-12">

                    <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Time</label>
                                <input type="time" name="time"  class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Last date to register</label>
                                <input type="date" name="last_date_to_register"  class="form-control" required>
                            </div>
                        </div>
</div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Venue</label>
                                <input type="text" class="form-control" name="venue" placeholder="Venue" required>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                            <button type="submit" class="btn  btn-primary">Submit</button>
                            </div>
                        </div>
                        
                    
                </form>
            </div>
        </div>
    </div>

</div>

@endsection