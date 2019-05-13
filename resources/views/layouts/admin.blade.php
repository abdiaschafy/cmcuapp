<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('title', 'CMCU')
    </title>
    <!-- Meta Tags -->
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
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Bars Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/bar.css') }}">
    <!--// Bars Css -->
    <!-- Common Css -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style4.css') }}">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="{{ asset('admin/css/fontawesome-all.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ asset('css/froala_editor.pkgd.min.css') }}">--}}

    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

@yield('content')

<!-- Required common Js -->
<script src='{{ asset('admin/js/jquery-2.2.3.min.js') }}'></script>
<script src='{{ asset('admin/js/parsley.min.js') }}'></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

@include('flashy::message')
<!-- //Required common Js -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<!-- loading-gif Js -->
<script src="{{ asset('admin/js/modernizr.js') }}"></script>
<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
<!--// loading-gif Js -->

<!-- Sidebar-nav Js -->
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<!--// Sidebar-nav Js -->

<!-- profile-widget-dropdown js-->
<script src="{{ asset('admin/js/script.js') }}"></script>
<!--// profile-widget-dropdown js-->


<!-- dropdown nav -->
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
<!-- //dropdown nav -->

<!-- Js for bootstrap working-->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<!-- //Js for bootstrap working -->

</html>
