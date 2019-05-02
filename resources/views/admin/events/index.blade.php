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
        <div class="col-md-12">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
        </div>
    </div>
    <br>
    <div class="col-md-12 text-center">
        <button class="btn btn-success"><a href="{{ route('events.create') }}" style="color: #ffffff;">Nouveau rendez-vous</a></button>
        <button class="btn btn-primary"><a href="{{ route('events.create') }}" style="color: #ffffff;">Voire tous les rendez-vous</a></button>
    </div>
    <br>
</div>
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
</div>
</body>
</html>
