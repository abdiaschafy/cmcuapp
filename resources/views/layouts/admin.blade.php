<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('title', 'CMCU')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ mix('css/all.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/faviconlogo.ico') }}"/>

    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootsrapcdn.com/bootsrap/4.1.3/css/bootsrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootsrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs..cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome/4.7.0./css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
   {{--//dropzone--}}

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">


</head>

@yield('content')

<script src="{{ mix('js/all.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('admin/datatables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/datatables/js/dataTables.bootstrap4.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>




<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            scrollY: 300,
            paging: true,
            processing: true
        });
    } );
</script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>--}}

@include('flashy::message')

</html>
