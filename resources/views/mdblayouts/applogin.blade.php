<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','Laravel')</title>
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link href="mdb-master/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link href="{{url('/')}}/mdb-master/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{url('/')}}/mdb-master/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{url('/')}}/mdb-master/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{url('/')}}/mdb-master/css/stylex.min.css" rel="stylesheet">
</head>

{{-- daftar skin :
white-skin
black-skin
cyan-skin
mdb-skin
deep-purple-skin
navy-blue-skin
pink-skin
indigo-skin
light-blue-skin
grey-skin 
end --}}

<body class="fixed-sn white-skin">


    <!--Main layout-->
    <main>

        @yield('content')


    </main>
    <!--/Main layout-->

    

    <div id="mdb-lightbox-ui"></div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{url('/')}}/mdb-master/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/mdb-master/js/jquery.color.js"></script>
    <script type="text/javascript" src="{{url('/')}}/mdb-master/js/jquery.serializejson.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{url('/')}}/mdb-master/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{url('/')}}/mdb-master/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{url('/')}}/mdb-master/js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization

        $(document).ready(() => {
            // SideNav Button Initialization
            $(".button-collapse").sideNav();
            // SideNav Scrollbar Initialization
            var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            var ps = new PerfectScrollbar(sideNavScrollbar);

            new WOW().init();
        });

        // MDB Lightbox Init (PREVIEW / ZOOM GAMBAR)
        $(function() {
            $("#mdb-lightbox-ui").load("{{ url('/') }}/mdb-master/mdb-addons/mdb-lightbox-ui.html");
        });

        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });

        $('.select2').select2();
        $('.select2').on('select2:close', function() {
            $('.select2-selection__clear').addClass('float-right');
        });
        $(document).on('focus', '.select2', function(e) {
            if (e.originalEvent) {
                $(this).siblings('select').select2('open');
            }
        });

        // Tooltip Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        // Popover Initialization
        $(function() {
            $('[data-toggle="popover"]').popover()
        })



        /*agar select2 pada model bisa dipilih dengan keyboard*/
        $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    </script>

    @yield('plugins_script')



</body>

</html>
