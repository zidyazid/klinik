<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.transitions.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/notika-custom-icon.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/wave/button.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <h2 class="text-light">{{ $user->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- Breadcomb area Start-->
	<div class="breadcomb-area my-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-mail"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>{{ $title; }}</h2>
										<p>Welcome to {{ $title; }} <span class="bread-ntd">{{ $user->name }}</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Inbox area Start-->
    <div class="inbox-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="inbox-left-sd">
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a href="/"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                                <li><a href="stok"><i class="fas fa-users"></i> Tambah Stok Obat</a></li>
                                <li><a href="obat"><i class="fas fa-medkit"></i>  Stok Obat</a></li>
                                <li><a href="pasien"><i class="fas fa-users"></i> Pasien</a></li>
                                {{-- <li><a href="transaksi"><i class="fas fa-file-pdf-o"></i>        Laporan Transaksi</a></li> --}}
                                {{-- <li><a href="transaksi"><i class="fas fa-file-pdf-o"></i>        Laporan Data Pasien</a></li> --}}
                                <li><a href="/logout"><i class="fab fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>                    
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    <!-- Inbox area End-->
    <!-- Start Footer area-->
    {{-- <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <footer>
      dfsf
    </footer> --}}
    <!-- End Footer area-->

    <!-- jquery
		============================================ -->
    <script src="{{ asset('admin/js/vendor/jquery-1.12.4.min.js') }}js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('admin/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('admin/js/jquery-price-slider.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('admin/') }}js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('admin/js/jquery.scrollUp.min.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('admin/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('admin/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('admin/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('admin/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/js/flot/flot-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('admin/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('admin/js/knob/jquery.appear.js') }}"></script>
    <script src="{{ asset('admin/js/knob/knob-active.js') }}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{ asset('admin/js/wave/waves.min.js') }}"></script>
    <script src="{{ asset('admin/js/wave/wave-active.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('admin/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('admin/js/icheck/icheck-active.js') }}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{ asset('admin/js/chat/jquery.chat.js') }}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('admin/js/todo/jquery.todo.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('admin/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('admin/js/tawk-chat.js') }}"></script>
    <script src="{{ asset('admin/js/data-table/data-table-act.js') }}"></script>
</body>

</html>