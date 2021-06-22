<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/04-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 02:25:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>XeMart - Ecommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="tmp/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="tmp/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('tmp/css/assets/bootstrap.min.css') }}">

    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('tmp/css/assets/font-awesome.min.css') }}">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('tmp/css/assets/animate.css') }}">

    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ asset('tmp/css/assets/owl.carousel.min.css') }}">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('tmp/css/assets/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('tmp/css/assets/responsive.css') }}">

</head>

<body>

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
                            @else
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
                    <form action="{{ route('search') }}" class="search-bar d-flex">
                        <input type="text" autocomplete="off" name="src" placeholder="Cari">
                        <button type="submit"><i class="fa fa-search"></i></button>
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
                            <li class="list-inline-item"><span>||</span> Search</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb Area -->

    <!-- Compare -->
    <section class="compare-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="comp-table table-responsive">
                        <table class="table">
                            <tbody>
                                {{-- tokped
                                shopee
                                blibli --}}
                                <tr class="heading">
                                    <td class="col-name text-center">Marketplace</td>
                                    <td class="text-center">

                                        <img style="height: 40px; width: 100px;"
                                            src="https://www.course-net.com/wp-content/uploads/2018/11/icon-Tokopedia-1.png"
                                            alt="">
                                    </td>
                                    <td class="text-center">
                                        <a href="#">
                                            <img style="height: 40px; width: 100px;"
                                                src="https://i.pinimg.com/originals/05/7b/27/057b274c134bcf92ac151758478949b3.png"
                                                alt="">
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#">
                                            <img style="height: 40px;width: 100px;"
                                                src="https://iconape.com/wp-content/png_logo_vector/blibli-logo.png"
                                                alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="heading">
                                    <td class="col-name text-center">Produk</td>
                                    <td class="text-center">
                                        <a href="#">
                                            <img style="border-radius: 3px; height: 180px; width: 180px"
                                                src="{{ $data['tokped'][0]['image'] }}" alt="">
                                            <div class="tag-title text-left">
                                                <br>
                                                <h6 style="text-align: center">{{ $data['tokped'][0]['nama'] }}</h6>
                                                <span
                                                    style="text-align: center">{{ $data['tokped'][0]['kategori'] }}</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#">
                                            <img style="border-radius: 3px; height: 180px; width: 180px"
                                                src="{{ $data['shopee'][0]['image'] }}" alt="">
                                            <div class="tag-title text-left">
                                                <br>
                                                <h6 style="text-align: center">{{ $data['shopee'][0]['nama'] }}</h6>
                                                <span
                                                    style="text-align: center">{{ $data['shopee'][0]['kategori'] }}</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#">
                                            <img style="border-radius: 3px; height: 180px; width: 180px"
                                                src="{{ $data['blibli'][0]['image'] }}" alt="">
                                            <div class="tag-title text-left">
                                                <br>
                                                <h6 style="text-align: center">{{ $data['blibli'][0]['nama'] }}</h6>
                                                <span
                                                    style="text-align: center">{{ $data['blibli'][0]['kategori'] }}</span>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="desc">
                                    <td class="col-name text-center">Description</td>
                                    <td style="height: 100px; overflow-x: auto; vertical-align: top">
                                        <p>{{ $data['tokped'][0]['deskripsi'] }}</p>
                                    </td>
                                    <td style="height: 100px; overflow-x: auto; vertical-align: top">
                                        <p>{{ $data['shopee'][0]['deskripsi'] }}</p>
                                    </td>
                                    <td style="height: 100px; overflow-x: auto; vertical-align: top">
                                        <p>{{ $data['blibli'][0]['deskripsi'] }}</p>
                                    </td>
                                </tr>
                                <tr class="price text-center">
                                    <td class="col-name">Harga</td>
                                    <td>
                                        <p>Rp. {{ number_format($data['tokped'][0]['harga']) }}</p>
                                    </td>
                                    <td>
                                        <p>Rp. {{ number_format($data['shopee'][0]['harga']) }}</p>
                                    </td>
                                    <td>
                                        <p>Rp. {{ number_format($data['blibli'][0]['harga']) }}</p>
                                    </td>
                                </tr>
                                <tr class="add-cart text-center">
                                    <td></td>
                                    <td><a class="btn btn-primary" target="_blank"
                                            href="{{ $data['tokped'][0]['link'] }}" type="button">Ke
                                            toko</a></td>
                                    <td><a class="btn btn-primary" target="_blank"
                                            href="{{ $data['shopee'][0]['link'] }}" type="button">Ke
                                            toko</a></td>
                                    <td><a class="btn btn-primary" target="_blank"
                                            href="{{ $data['blibli'][0]['link'] }}" type="button">Ke
                                            toko</a></td>
                                </tr>
                                <tr class="add-cart text-center">
                                    <td></td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="collapse" href="#coltokped"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <br>
                                        <div style="padding-top: 4px" class="collapse" id="coltokped">
                                            @foreach ($data['tokped'] as $intok => $datatokped)
                                                @if ($intok > 0)
                                                    <div class="card card-body" style="padding: 12px;">
                                                        <div class="row">
                                                            <div class="col-4" style="font-size: 9px;">
                                                                {{ $datatokped['nama'] }}
                                                            </div>
                                                            <div class="col-4" style="font-size: 9px;">
                                                                Rp. {{ number_format($datatokped['harga']) }}
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="{{ $datatokped['link'] }}" target="_blank"
                                                                    class="btn btn-primary"
                                                                    style="font-size: 9px; padding: 4px;"
                                                                    type="button">Ke
                                                                    toko</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="collapse" href="#colshopee"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <br>
                                        <div style="padding-top: 4px" class="collapse" id="colshopee">
                                            @foreach ($data['shopee'] as $inshop => $datashopee)
                                                @if ($inshop > 0)
                                                    <div class="card card-body" style="padding: 12px;">
                                                        <div class="row">
                                                            <div class="col-4" style="font-size: 9px;">
                                                                {{ $datashopee['nama'] }}
                                                            </div>
                                                            <div class="col-4" style="font-size: 9px;">
                                                                Rp. {{ number_format($datashopee['harga']) }}
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="{{ $datashopee['link'] }}" target="_blank"
                                                                    class="btn btn-primary"
                                                                    style="font-size: 9px; padding: 4px;"
                                                                    type="button">Ke
                                                                    toko</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="collapse" href="#colblibli"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <br>
                                        <div style="padding-top: 4px" class="collapse" id="colblibli">
                                            @foreach ($data['blibli'] as $inbli => $datablibli)
                                                @if ($inbli > 0)
                                                    <div class="card card-body" style="padding: 12px;">
                                                        <div class="row">
                                                            <div class="col-4" style="font-size: 9px;">
                                                                {{ $datablibli['nama'] }}
                                                            </div>
                                                            <div class="col-4" style="font-size: 9px;">
                                                                Rp. {{ number_format($datablibli['harga']) }}
                                                            </div>
                                                            <div class="col-4">
                                                                <a href="{{ $datablibli['link'] }}" target="_blank"
                                                                    class="btn btn-primary"
                                                                    style="font-size: 9px; padding: 4px;"
                                                                    type="button">Ke
                                                                    toko</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Compare -->

    <!-- Footer Area -->
    <section class="footer-btm">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-6">
                    <p>Copyright &copy; 2020 | Designed With <i class="fa fa-heart"></i> by <a href="#"
                            target="_blank">SnazzyTheme</a></p>
                </div> --}}
            </div>
        </div>
        <div class="back-to-top text-center">
            <img src="{{ asset('tmp/images/backtotop.png') }}" alt="" class="img-fluid">
        </div>
    </section>
    <!-- End Footer Area -->


    <!-- =========================================
        JavaScript Files
        ========================================== -->

    <!-- jQuery JS -->
    <script src="{{ asset('tmp/js/assets/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('tmp/js/assets/popper.min.js') }}"></script>
    <script src="{{ asset('tmp/js/assets/bootstrap.min.js') }}"></script>

    <!-- Owl Slider -->
    <script src="{{ asset('tmp/js/assets/owl.carousel.min.js') }}"></script>

    <!-- Wow Animation -->
    <script src="{{ asset('tmp/js/assets/wow.min.js') }}"></script>

    <!-- Price Filter -->
    <script src="{{ asset('tmp/js/assets/price-filter.js') }}"></script>

    <!-- Mean Menu -->
    <script src="{{ asset('tmp/js/assets/jquery.meanmenu.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('tmp/js/plugins.js') }}"></script>
    <script src="{{ asset('tmp/js/custom.js') }}"></script>

</body>

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/04-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 02:25:09 GMT -->

</html>
