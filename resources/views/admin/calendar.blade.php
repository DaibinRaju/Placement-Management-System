@extends('admin.layout')

@section('extracss')
<link rel="stylesheet" href="/assets/css/plugins/fullcalendar.min.css">
@endsection
@section('body')
<div class="row">
    <div class="col-sm-12">
        <div class="card fullcalendar-card">
            <div class="card-header">
                <h5>Full Calendar</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-md-12">
                        <div id='external-events' class="external-events">
                            <h4>Events</h4>
                            <div class='fc-event'>My Event 1</div>
                            <div class='fc-event'>My Event 2</div>
                            <div class='fc-event'>My Event 3</div>
                            <div class='fc-event'>My Event 4</div>
                            <div class='fc-event'>My Event 5</div>
                            <div class="form-group">
                                <div class="switch switch-primary d-inline m-r-10">
                                    <input type="checkbox" id="drop-remove">
                                    <label for="drop-remove" class="cr"></label>
                                </div>
                                <label>Remove Event</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-md-12">
                        <div id='calendar' class='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extrajs')
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
            events: [{
                title: 'All Day Event',
                start: '2020-05-01',
                borderColor: '#04a9f5',
                backgroundColor: '#04a9f5',
                textColor: '#fff'
            }, {
                title: 'Long Event',
                start: '2020-05-07',
                end: '2020-05-10',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
            }, {
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
                end: '2020-05-13',
                borderColor: '#1de9b6',
                backgroundColor: '#1de9b6',
                textColor: '#fff'
            }, {
                title: 'Meeting',
                start: '2020-05-12T10:30:00',
                end: '2020-05-12T12:30:00'
            }, {
                title: 'Lunch',
                start: '2020-05-12T12:00:00',
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
            }],
            drop: function() {
                if ($('#drop-remove').is(':checked')) {
                    $(this).remove();
                }
            }
        });
    });
</script>
@endsection