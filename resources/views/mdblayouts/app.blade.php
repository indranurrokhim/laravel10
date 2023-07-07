<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link href="mdb-master/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link href="{{url('/')}}/mdb-master/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{url('/')}}/mdb-master/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{url('/')}}/mdb-master/css/mdb.min.css?123" rel="stylesheet">
    <link href="{{url('/')}}/mdb-master/css/custom.css?13322" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{url('/')}}/mdb-master/custom-addons/datatables/datatables.min.css" rel="stylesheet">
    <link href="{{url('/')}}/mdb-master/custom-addons/select2/select2.min.css?123" rel="stylesheet">
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

<body class="fixed-sn mdb-skin">

    <header>

        <!--Double navigation-->
        @include('mdblayouts.navigation')
        <!--/.Double navigation-->

        @yield('judulhalaman')
        

    </header>
    <!--Main layout-->
    <main class="pt-4">

        @yield('content')


    </main>
    <!--/Main layout-->

    <!--Footer-->
    {{-- <footer class="page-footer text-center text-md-left pt-4"> --}}

        <!--Footer Links-->
        {{-- <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <h5 class="text-uppercase font-weight-bold mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div> --}}
        <!--/.Footer Links-->

        {{-- <hr> --}}

        <!--Call to action-->
        {{-- <div class="call-to-action text-center my-4">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <h5>Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="" class="btn btn-primary">Sign up!</a></li>
            </ul>
        </div> --}}
        <!--/.Call to action-->

        {{-- <hr> --}}

        <!--Social buttons-->
        {{-- <div class="social-section text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a class="btn-floating btn-fb"><i class="fab fa-facebook-f"> </i></a>
                </li>
                <li class="list-inline-item"><a class="btn-floating btn-tw"><i class="fab fa-twitter"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-gplus"><i class="fab fa-google-plus-g">
                        </i></a>
                </li>
                <li class="list-inline-item"><a class="btn-floating btn-li"><i class="fab fa-linkedin-in"> </i></a>
                </li>
                <li class="list-inline-item"><a class="btn-floating btn-git"><i class="fab fa-github"> </i></a></li>
            </ul>
        </div> --}}
        <!--/.Social buttons-->

        <!--Copyright-->
        {{-- <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2022 Copyright: <a href="#">indra</a>

            </div>
        </div> --}}
        <!--/.Copyright-->

    {{-- </footer> --}}
    <!--/.Footer-->

    {{-- <div id="mdb-lightbox-ui"></div> --}}

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
    {{-- CUSTOM --}}
    <script type="text/javascript" src="{{url('/')}}/mdb-master/custom-addons/datatables/datatables.min.js?123"></script>
    <script type="text/javascript" src="{{url('/')}}/mdb-master/custom-addons/select2/select2.min.js?123"></script>
    <script type="text/javascript" src="{{url('/')}}/mdb-master/custom-addons/autonumeric/autoNumeric-min.js?"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization

        $(document).ready(() => {
            // SideNav Button Initialization
            // $(".button-collapse").sideNav();
            // // SideNav Scrollbar Initialization
            // var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            // var ps = new PerfectScrollbar(sideNavScrollbar);

            // new WOW().init();

            // SideNav Initialization
                $(".button-collapse").sideNav();

            var container = document.querySelector('.custom-scrollbar');
            Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
            });
            
        });


        // MDB Lightbox Init (PREVIEW / ZOOM GAMBAR)
        $(function() {
            $("#mdb-lightbox-ui").load("{{ url('/') }}/mdb-master/mdb-addons/mdb-lightbox-ui.html");
        });

        // Material Select Initialization
        $(document).ready(function() {
            //$('.mdb-select').material_select();
        });

        // $('.select2').select2();
        // $('.select2').on('select2:close', function() {
        //     $('.select2-selection__clear').addClass('float-right');
        // });
        // $(document).on('focus', '.select2', function(e) {
        //     if (e.originalEvent) {
        //         $(this).siblings('select').select2('open');
        //     }
        // });

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
