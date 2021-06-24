<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/04-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 02:25:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aplikasi Pembanding Harga Sembako</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="tmp/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="tmp/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="tmp/css/assets/bootstrap.min.css">

    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="tmp/css/assets/font-awesome.min.css">

    <!-- Animate Css -->
    <link rel="stylesheet" href="tmp/css/assets/animate.css">

    <!-- Owl Slider -->
    <link rel="stylesheet" href="tmp/css/assets/owl.carousel.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="tmp/css/assets/normalize.css">
    <link rel="stylesheet" href="tmp/css/style.css">
    <link rel="stylesheet" href="tmp/css/assets/responsive.css">

    <style type="text/css">
        .list-inline-items {
            font-size: 18px;
            color: #444444;
            font-weight: 600;
            text-decoration: none;
        }

    </style>

</head>

<body class="body">

    <!-- Preloader -->
    <div class="preloader">
        <div class="load-list">
            <div class="load"></div>
            <div class="load load2"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Top Bar 2 -->
    <section class="top-bar2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="top-right text-right">
                        <ul class="list-unstyled list-inline">
                            @if (!Auth::guard('web')->check())

                                <li class="list-inline-item"><a href="{{ route('index.login') }}"><img
                                            src="tmp/images/login.png" alt="">Login</a></li>
                                <li class="list-inline-item"><a href="{{ route('index.register') }}"><img
                                            src="tmp/images/user.png" alt="">Register</a></li>
                            @else
                                <li class="list-inline-item"><a href="#"><img src="tmp/images/user.png"
                                            alt="">{{ Auth::guard('web')->user()->nama }}</a></li>
                                <li class="list-inline-item"><a href="{{ route('logout') }}"><img
                                            src="tmp/images/user.png" alt="">Logout</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar 2 -->

    <!-- Logo Area 2 -->
    <section class="logo-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('tmp/images/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 padding-fix">
                    <form action="{{ route('search') }}" method="get" class="search-bar d-flex">
                        <input autocomplete="off" type="text" name="src" id="src-val" placeholder="Cari">
                        <button type="submit" id="src-btn"><i class="fa fa-search"></i></button>
                        <div class="sugest-container">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area 2 -->

    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href="#"><img src="tmp/images/logo.png" alt=""></a>
                            <a href="{{ route('index.login') }}"><span>Login</span></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->

    <!-- Breadcrumb Area -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-box text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb Area -->

    <!-- Category Area -->
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-box">
                        <div class="cat-box d-flex justify-content-between">
                            <!-- Nav tabs -->
                            <div class="view">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#grid"><i
                                                class="fa fa-th-large"></i></a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#list"><i
                                                class="fa fa-th-list"></i></a>
                                    </li> --}}
                                </ul>
                            </div>
                            <!-- <div class="sortby">
                                    <span>Sort By</span>
                                    <select class="sort-box">
                                        <option>Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                        <option>Rating</option>
                                    </select>
                                </div>
                                <div class="show-item">
                                    <span>Show</span>
                                    <select class="show-box">
                                        <option>12</option>
                                        <option>24</option>
                                        <option>36</option>
                                    </select>
                                </div> -->
                            <!-- <div class="page">
                                    <p>Page 1 of 20</p>
                                </div> -->
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">

                        </div>
                        {{-- <div class="pagination-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">1</a></li>
                                <li class="list-inline-item"><a href="#">2</a></li>
                                <li class="active list-inline-item"><a href="#">3</a></li>
                                <li class="list-inline-item"><a href="#">4</a></li>
                                <li class="list-inline-item"><a href="#">...</a></li>
                                <li class="list-inline-item"><a href="#">12</a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category Area -->

    <!-- Footer Area -->
    <section class="footer-btm">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2020 | Designed With <i class="fa fa-heart"></i> by <a href="#"
                            target="_blank">SnazzyTheme</a></p>
                </div>
            </div> --}}
        </div>
        <div class="back-to-top text-center">
            <img src="tmp/images/backtotop.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- End Footer Area -->


    <!-- =========================================
        JavaScript Files
        ========================================== -->

    <!-- jQuery JS -->
    <script src="tmp/js/assets/vendor/jquery-1.12.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="tmp/js/assets/popper.min.js"></script>
    <script src="tmp/js/assets/bootstrap.min.js"></script>

    <!-- Owl Slider -->
    <script src="tmp/js/assets/owl.carousel.min.js"></script>

    <!-- Wow Animation -->
    <script src="tmp/js/assets/wow.min.js"></script>

    <!-- Price Filter -->
    <script src="tmp/js/assets/price-filter.js"></script>

    <!-- Mean Menu -->
    <script src="tmp/js/assets/jquery.meanmenu.min.js"></script>

    <!-- Custom JS -->
    <script src="tmp/js/plugins.js"></script>
    <script src="tmp/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            var _datake = $('#datake').html();
            $.ajax({
                type: 'GET',
                url: "{{ route('first.load') }}",
                cache: false
            }).then(function(data) {
                $('.tab-content').html(data);
            });

        });

        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this,
                    args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function() {
                    callback.apply(context, args);
                }, ms || 0);
            };
        }

        $('#src-btn').click(function() {
            var _val = $('#src-val').val();
            console.log(_val);
        });

        // $(window).scroll(function() {
        //     if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.8) {
        //         $.ajax({
        //             type: 'GET',
        //             url: "{{ route('first.load') }}"
        //         }).then(function(data) {
        //             $('.tab-content').html(data);
        //         });
        //     }
        //     // console.log($(".body").scrollTop($(".body").prop("scrollHeight")));
        // });



        function recomensrc() {
            setTimeout(function() {
                var _val = $('#src-val').val();
                $.ajax({
                    url: "{{ route('sugest') }}",
                    data: {
                        // _token: "{{ csrf_token() }}",
                        val: _val
                    },
                    type: "GET",
                    cache: false
                }).then(function(data) {
                    $('.sugest-container').html(data);
                });
            }, 2000)
        }

    </script>

</body>

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/04-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 02:25:09 GMT -->

</html>
