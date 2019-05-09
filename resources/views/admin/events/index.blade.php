<!doctype html>
<html lang="en">
<head>
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('admin/css/bar.css') }}">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('admin/css/style4.css') }}">
    <link href="{{ asset('admin/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src='{{ asset('admin/js/jquery-2.2.3.min.js') }}'></script>
    <script src="{{ asset('admin/js/modernizr.js') }}"></script>
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <style>
        /* ... */
    </style>
</head>
<body>
<div class="wrapper">
    @include('partials.side_bar')
    <div class="container">
        @include('partials.header')
        <div class="row">
            @include('partials.flash')
            <div class="col-md-8 offset-2">
                {{--<div id="calendar">--}}

                <div id="fullCalModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                                <h4 id="modalTitle" class="modal-title"></h4>
                            </div>
                            <div id="modalBody" class="modal-body"> </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="">
                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}
                </div>
                {{--<div class="response"></div>--}}
                {{--<div id='calendar'></div>--}}
            </div>
        </div>
        <br>
        <div class="col-md-12 text-center">
            <button class="btn btn-success"><a href="{{ route('events.create') }}" style="color: #ffffff;">Nouveau rendez-vous</a></button>
            <button class="btn btn-primary"><a href="{{ route('events.create') }}" style="color: #ffffff;">Voire tous les rendez-vous</a></button>
        </div>
        <br>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    {{--<script>--}}
        {{--$('#modalTitle').text(date.format());--}}
        {{--$('#calendar').fullCalendar({--}}
            {{--dayClick: function(date, jsEvent, view) {--}}
                {{--// alert('Clicked on: ' + date.format());--}}
                {{--$('#fullCalModal').modal('show');--}}
            {{--},--}}
            {{--header: {--}}
                {{--left: 'prev,next today',--}}
                {{--center: 'title',--}}
                {{--right: 'month,basicWeek,basicDay',--}}
            {{--},--}}
            {{--navLinks: true,--}}
            {{--editable: true,--}}
            {{--eventLimit: false,--}}
            {{--events: [--}}

            {{--],--}}
        {{--});--}}
    {{--</script>--}}

</div>
</body>
</html>
