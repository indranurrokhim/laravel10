<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
    {{-- <div id="slide-out" class="side-nav fixed" style="background-image: url(mdb-master/img/btc3.jpg);"> --}}
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light black-text text-center align-middle">
                {{-- <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png"
                        class="img-fluid flex-center"></a> --}}
                <a href="#">
                    <h2 class="mt-3 mb-2">{{ config('app.name') }}</h2>
                </a>
            </div>
        </li>
        <!--/. Logo -->
        <!--Social-->
        {{-- <li>
            <ul class="social">
                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
            </ul>
        </li> --}}
        <!--/Social-->
        <!--Search Form-->
        {{-- <li>
            <form class="search-form" role="search">
                <div class="form-group md-form mt-0 pt-1 waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </li> --}}
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                {{-- <li><a href="{{route('dashboard')}}" class="collapsible-header waves-effect arrow-r">
                    <i class="fa-solid fa-chart-line"></i>
                    &nbsp; Dasboard</a>
                </li> --}}
                {{-- @if (Auth::user()->level == 'Administrator')
                    <li><a class="collapsible-header waves-effect arrow-r">
                            <i class="fa-solid fa-user-tie"></i>
                            &nbsp; Adminstrator<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/') }}/user" class="waves-effect">Data User</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                @endif --}}
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa-solid fa-gear"></i>
                        &nbsp; Master<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}/brand" class="waves-effect">Brand</a></li>
                            <li><a href="{{ url('/') }}/sepatu1" class="waves-effect">Style Barang</a></li>
                            <li><a href="{{ url('/') }}/sepatu2" class="waves-effect">Barang</a></li>
                            <li><a href="{{ url('/') }}/factory" class="waves-effect">Supplier</a></li>
                            <li><a href="{{ url('/') }}/kategori" class="waves-effect">Kategori Toko</a></li>
                            <li><a href="{{ url('/') }}/toko1" class="waves-effect">Toko</a></li>
                            <li><a href="{{ url('/') }}/gudang" class="waves-effect">Gudang</a></li>
                            <li><a href="{{ url('/') }}/akun3" class="waves-effect">COA</a></li>
                            <li><a href="{{ url('/') }}/salesman" class="waves-effect">Salesman</a></li>
                            <li><a href="{{ url('/') }}/sesi" class="waves-effect">Sesi Sales Order</a></li>
                        </ul>
                    </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa-solid fa-cart-shopping"></i>
                        &nbsp; Pembelian<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}/purchase" class="waves-effect">Purchase Order (PO)</a>
                            </li>
                            <li><a href="{{ url('/') }}/masuk" class="waves-effect">Penerimaan Barang (LPB)</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Retur Permbelian (xxx)</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Pelunasan Hutang (xxx)</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa-solid fa-shop"></i>
                        &nbsp; Penjualan<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}/order" class="waves-effect">Sales Order (SO)</a></li>
                            <li><a href="{{ url('/') }}/keluar" class="waves-effect">Pengiriman Barang (SJ)</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Retur Penjualan (xxx)</a></li>
                            <li><a href="{{ url('/') }}/invoice" class="waves-effect">Invoice (invoice)</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Pelunasan Invoice (xxx)</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Pelunasan Invoice via GIRO
                                (xxx)</a></li>
                            <li><a href="{{ url('/') }}/dp" class="waves-effect">Input Uang Muka (DP)</a></li>
                        </ul>
                    </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa-solid fa-warehouse"></i>
                        &nbsp; Gudang<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}/stock" class="waves-effect">Stock</a></li>
                            <li><a href="{{ url('/') }}/transfer" class="waves-effect">Transfer</a></li>
                            <li><a href="{{ url('/') }}/stockopname" class="waves-effect">Stock Opname</a></li>
                        </ul>
                    </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa-solid fa-building-columns"></i>
                        &nbsp; Bank<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Kas</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Transfer</a></li>
                        </ul>
                    </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa-solid fa-file-lines"></i>
                        &nbsp; Laporan<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Pembelian</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Penjualan</a></li>
                            <li><a href="{{ url('/') }}/xxx" class="waves-effect">Salesman</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa-solid fa-file-lines"></i>
                        &nbsp; DLL<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/') }}/saldoakun" class="waves-effect">Saldo Akun</a></li>
                            <li><a href="{{ url('/') }}/pembayaranHutang" class="waves-effect">Pelunasan Hutang</a></li>
                            <li><a href="{{ url('/') }}/filterStock" class="waves-effect">Filter Stock</a></li>
                            <li><a href="{{ url('/') }}/saldoawal" class="waves-effect">Penambahan Saldo COA</a></li>
                            <li><a href="{{ url('/') }}/masuk/sab" class="waves-effect">Update Stock Per Bulan</a></li>
                            
                        </ul>
                    </div>
                </li>



                {{-- <li><a href="{{url('/')}}/calculator" class="collapsible-header waves-effect arrow-r">
                    <i class="fa-solid fa-calculator"></i>
                    &nbsp; Calculator</a>
                </li>
                <li><a href="{{url('/')}}/tutorial" class="collapsible-header waves-effect arrow-r">
                    <i class="fa-brands fa-youtube"></i>
                    &nbsp; Tutorial</a>
                </li>
                <li><a href="{{url('/')}}/book" class="collapsible-header waves-effect arrow-r">
                    <i class="fa-solid fa-book"></i>
                    &nbsp; E-Book</a> --}}
        </li>
        <li><a href="{{ url('/') }}/profile" class="collapsible-header waves-effect arrow-r">
                <i class="fa-solid fa-user"></i>
                &nbsp; User Profile</a>
        </li>

    </ul>
    </li>
    <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->
<!-- Navbar -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i
                class="fas fa-bars"></i></a>
    </div>
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn mr-auto">
        <a href="#">
            <p class="h4">{{ config('app.name') }}</p>
        </a>
    </div>
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
        {{-- <li class="nav-item">
            <a class="nav-link"><i class="fas fa-envelope"></i> <span
                    class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"><i class="fas fa-comments"></i> <span
                    class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"><i class="fas fa-user"></i> <span
                    class="clearfix d-none d-sm-inline-block">Account</span></a>
        </li> --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{-- {{ Auth::user()->name }} --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                {{-- <form method="POST" action="{{ route('logout') }}"> --}}
                    @csrf
                    <a class="dropdown-item" href="#"
                        onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                {{-- </form> --}}
                {{-- <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a> --}}
            </div>
        </li>
    </ul>
</nav>
<!-- /.Navbar -->
