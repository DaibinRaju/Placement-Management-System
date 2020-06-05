@extends('hod.layout')

@section('css')
<link rel="stylesheet" href="/assets/css/plugins/fullcalendar.min.css">
@endsection
@section('body')
<div class="modal fade assign-members" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel2" aria-hidden="true">
	<div class="modal-dialog modle-510">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title font-weight-bold">Event Details</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form method="post" id="form">

				<div class="modal-body">
					@csrf
					<div class="row form-group col-md-12 m-b-20">
                        <label for="department">Event Name</label>
                         <input type="text" name="event_name" class="form-control" id="department" aria-describedby="emailHelp" placeholder="Enter event name here" required>
                         <br><br>
                         <label for="nSection">Number of Days</label>
                            <select class="form-control" id="nSection" name="days" onchange="showSections()">
                                <option selected="selected" value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        <div id="sectionDetails">
                            <div class="form-group">
                                <label class="form-label">Date</label>
                                <input type="date" name="dates[]" id="joel" class="form-control" required>
                            </div>
                        </div>
					</div>
                    <label for="favcolor">Select your event color:</label>
                    <input type="color" id="favcolor" name="event_color" value="#ff0000">
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-rounded btn-success" value="Add">
					<button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal" aria-hidden="true">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card fullcalendar-card">
            
            <div class="card-body">
                <div class="row">
                    <div class=" col-md-3 col-sm-3">
                        <h5 class="card-title float-left align-self-center ">Calendar</h5>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="float-right d-xl-inline-block d-lg-inline-block">
                            <a data-toggle="modal" href="#" data-target=".assign-members" class="float-right btn waves-effect waves-light btn-rounded btn-primary">Add Events</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div id='calendar' class='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="/assets/js/plugins/moment.js"></script>
<script src="/assets/js/plugins/jquery-ui.min.js"></script>
<script src="/assets/js/plugins/fullcalendar.min.js"></script>
<script type="text/javascript">
    // Full calendar
    $(window).on('load', function() {
        $('#external-events .fc-event').each(function() {
            $(this).data('event', {
                title: $.trim($(this).text()),
                stick: true
            });
            $(this).draggable({
                zIndex: 999,
                revert: true,
                revertDuration: 0
            });
        });
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            // defaultDate: '2020-05-12',
            editable: true,
            droppable: true,
            events: [/*{
                title: 'All Day Event',
                start: '2020-05-01',
                borderColor: '#04a9f5',
                backgroundColor: '#04a9f5',
                textColor: '#fff'
            }, 
            {
                title: 'joel',
                start: '2020-05-07',
                end: '2020-05-10',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
            }

            , {
                id: 999,
                title: 'Repeating Event',
                start: '2020-05-09T16:00:00',
                borderColor: '#f4c22b',
                backgroundColor: '#f4c22b',
                textColor: '#fff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: '2020-05-16T16:00:00',
                borderColor: '#3ebfea',
                backgroundColor: '#3ebfea',
                textColor: '#fff'
            }, {
                title: 'Conference',
                start: '2020-05-11',
                end: '2020-05-14',
                borderColor: '#1de9b6',
                backgroundColor: '#1de9b6',
                textColor: '#fff'
            }, */
            @foreach ($drives as $drive)
            {
                title: '{{ $drive['company_name'] }}',
                start: '{{ $drive['date'] }}T{{ $drive['time'] }}',
            }
            ,
            @endforeach
            @foreach ($single_day as $event)
            {
                title: '{{ $event['name'] }} Training',
                start: '{{ $event['date'] }}',
                backgroundColor: '#1de9b6',
                borderColor: '#1de9b6',
            }
            ,
            @endforeach

            @foreach ($long_day as $event)
            {
                title: '{{ $event['name'] }} Training',
                start: '{{ $event['start_date'] }}',
                end:   '{{ $event['end_date'] }}',
                backgroundColor: '#1de9b6',
                borderColor: '#1de9b6',
            }
            ,
            @endforeach

            @foreach ($custom_long as $event)
            {
                title: '{{ $event['name'] }}',
                start: '{{ $event['start_date'] }}',
                end:   '{{ $event['end_date'] }}',
                backgroundColor: '{{ $event['color'] }}',
                borderColor: '#FFFFFF',
            }
            ,
            @endforeach

            @foreach ($custom_single as $event)
            {
                title: '{{ $event['name'] }}',
                start: '{{ $event['date'] }}',
                backgroundColor: '{{ $event['color'] }}',
                borderColor: '#FFFFFF',
            }
            ,
            @endforeach

            /*
            {
                title: 'Lunch',
                start: '2020-05-12T17:30:00',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
            }, {
                title: 'Happy Hour',
                start: '2020-05-12T17:30:00',
                borderColor: '#a389d4',
                backgroundColor: '#a389d4',
                textColor: '#fff'
            }, {
                title: 'Birthday Party',
                start: '2020-05-13T07:00:00'
            }, {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2020-05-28',
                borderColor: '#a389d4',
                backgroundColor: '#a389d4',
                textColor: '#fff'
            }*/],
            drop: function() {
                if ($('#drop-remove').is(':checked')) {
                    $(this).remove();
                }
            }
        });
    });
</script>
<script lang="javascript">
    function showSections() {
        var val = document.getElementById("nSection").value;

        var code = '';

        for (var i = 1; i <= val; i++) {
            code += '<br> <label class="form-label">Date</label><input id="nSection" name="dates[]" type="date" name="date" class="form-control" required>';

        }
        document.getElementById('sectionDetails').innerHTML = code;

    }
</script>



@endsection