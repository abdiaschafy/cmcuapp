<!DOCTYPE html>
<html lang="fr">

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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">



</head>

@yield('content')



<script src="{{ mix('js/all.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/typehead.js') }}"></script>
<script src="{{ asset('admin/datatables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/datatables/js/dataTables.bootstrap4.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>




<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
{{--<script>--}}
{{--CKEDITOR.replace( 'summary-ckeditor' );--}}
{{--CKEDITOR.replace( 'summary-ckeditor1' );--}}

{{--</script>--}}

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            scrollY: 300,
            paging: true,
            processing: true,
            info: false,
            ordering: false,
            language: {
                processing:     "Traitement en cours...",
                search:         "Rechercher&nbsp;:",
                lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
                info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                infoPostFix:    "",
                loadingRecords: "Chargement en cours...",
                zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                emptyTable:     "Aucune donnée disponible dans le tableau",
                paginate: {
                    first:      "Premier",
                    previous:   "Pr&eacute;c&eacute;dent",
                    next:       "Suivant",
                    last:       "Dernier"
                },
                aria: {
                    sortAscending:  ": activer pour trier la colonne par ordre croissant",
                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            }
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
