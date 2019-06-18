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
    <link rel="stylesheet" href="{{ asset_secure('admin/datatables/css/dataTables.bootstrap4.css') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{ asset_secure('admin/images/faviconlogo.ico') }}"/>

    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>

@yield('content')



<script src="{{ mix('js/all.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset_secure('admin/datatables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset_secure('admin/datatables/js/dataTables.bootstrap4.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            scrollY: 300,
            paging: true,
            processing: true,
            info: false,
            ordering: false,
        });
        $('.filter-select').change(function () {
            table.column( $(this).data('column'))
                .search( $(this).val())
                .draw();
        });
    } );
</script>
@include('flashy::message')

</html>
