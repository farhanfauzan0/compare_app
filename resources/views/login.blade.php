<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/08-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 02:25:15 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>XeMart - Ecommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

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

    <!-- Log In -->
    <section class="login">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-4 align-self-center ">
                    <div class="r-customer">
                        <h3 style="text-align: center;">Login</h3><br>
                        <form action="{{ route('post.login') }}" method="POST">
                            @csrf
                            <div class="emal">
                                <label>Email</label>
                                <input type="email" name="email">
                            </div>
                            <div class="pass">
                                <label>Password</label>
                                <input type="password" name="password">
                            </div>
                            <div class="d-flex justify-content-between nam-btm">
                                <div>
                                    <!-- <input type="checkbox" name="rememberme" id="rmme"> -->
                                    <label for="rmme">Belum punya akun?</label>
                                </div>
                                <div>
                                    <a href="{{ route('index.register') }}">Register</a>
                                </div>
                            </div>
                            <button type="submit">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Log In -->


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

</body>

<!-- Mirrored from www.thetahmid.com/themes/xemart-v1.0/08-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 02:25:15 GMT -->

</html>
