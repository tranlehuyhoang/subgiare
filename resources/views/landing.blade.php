    @inject('site_config', 'App\Models\site_config')
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <!-- LUONG BINH DUONG -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ $site_config->getValueByName('favicon') }}" />

        <meta name="Classification"
            content="hack like facebook, hack like, hack like ảnh facebook, tăng like facebook, tăng follow instagram,tang like instagram, hack like stt, cmt, hack like bình luận, hack sub, hack like fb" />
        <meta name="page-topic"
            content="hack like facebook, hack like, hack like ảnh facebook, tăng like facebook, tăng follow instagram,tang like instagram, hack like stt, cmt, hack like bình luận, hack sub, hack like fb" />
        <meta name="keywords"
            content="like, sub, share, vip like, buff mắt, tăng follow, mua like, mua sub, sub rẻ, hack like, hack sub, hack follow, tăng like, tăng follow, cách hack tăng like,share code auto like, xin code auto like, web auto like, {{ $site_config->getValueByName('domain') }}" />
        <meta name="description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok">
        <meta name="author" content="{{ $site_config->getValueByName('domain') }}">
        <meta http-equiv="content-language" content="vi" />
        <meta name="geo.placename" content="Viet Nam" />
        <meta name="copyright" content="Copyright (c) by {{ $site_config->getValueByName('domain') }}  - 2022" />
        <meta name="robots" content="index,follow" />
        <meta name="resource-type" content="document" />
        <meta name="distribution" content="Local" />
        <meta name="revisit-after" content="1 days" />
        <meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml; charset=utf-8" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="hack like facebook, hack like, hack like ảnh facebook, tăng like facebook" />
        <meta property="og:description"
            content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok" />
        <meta property="og:site_name" content="hack like facebook - tang like hack like" />
        <!-- TITLE -->
        <!--====== Title ======-->
        <title>Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('') }}lbd/assets/images/s.png" type="image/png">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/animate.css">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/bootstrap.min.css">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/magnific-popup.css">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/owl.carousel.min.css">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/flaticon.css">

        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/hover-min.css">

        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/style.css">

        <link rel="stylesheet" href="{{ asset('') }}bvq/landing/assets/css/responsive.css">


    </head>

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div></div>
            <hr />
        </div>
    </div>

    <div class="header-style-01">

        <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
            <div class="container nav-container social-nav">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="/home" class="logo">
                            <img src="{{ $site_config->getValueByName('logo') }}" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <li><a href="/home">Trang chủ</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Dịch vụ nổi bật</a>
                            <ul class="sub-menu">
                                <li><a href="/home">Facebook</a></li>
                                <li>
                                    <a href="/home">Instagram </a>
                                </li>
                                <li><a href="/home">Youtube </a></li>
                                <li><a href="/home">Tiktok</a></li>
                                <li>
                                    <a href="/home">Một số dịch vụ khác</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Liên hệ hỗ trợ</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="https://www.facebook.com/SieuThiSub.Net">Facebook</a>
                                </li>
                                <li><a href="https://zalo.me/0846745505">Zalo</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <div class="btn-wrapper">
                        <a href="/auth/login" class="boxed-btn blank">Đăng Nhập</a>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    <div>
        <div class="header-area header-social header-bg"
            style="background-image:url({{ asset('') }}bvq/landing/assets/img/header-slider/social/bg.png);">
            <div class="social-bg-img outer" data-parallax='{"x": 220, "y": 150}'
                style="background-image:url({{ asset('') }}bvq/landing/assets/img/header-slider/social/01.png);">
            </div>
            <div class="social-bg-img-02 outer" data-parallax='{"x": 20, "y": 150}'
                style="background-image:url({{ asset('') }}bvq/landing/assets/img/header-slider/social/02.png);">
            </div>
            <div class="social-bg-img-03 outer" data-parallax='{"x": 20, "y": 150}'
                style="background-image:url({{ asset('') }}bvq/landing/assets/img/header-slider/social/03.png);">
            </div>
            <div class="social-bg-img-04 outer" data-parallax='{"x": 20, "y": 150}'
                style="background-image:url({{ asset('') }}bvq/landing/assets/img/header-slider/social/04.png);">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="header-inner desktop-center">

                            <h1 class="title">Tạo hiệu ứng cho sự nổi tiếng của bạn</h1>
                            <p>Hệ thống chuyên cung cấp các dịch vụ tăng Like, Follow, Share, Comment, View Video,...
                                cho các Mạng xã hội như Facebook, Instagram, Tiktok...</p>
                            <div class="btn-wrapper  desktop-center padding-top-30">
                                <a href="/auth/login" class="boxed-btn btn-gradient ">Bắt Đầu Ngay</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="header-bottom-img m-top wow animate__animated animate__fadeInUp" data-parallax='{"x": 20, "y": 50}'
        style="background-image: url(bvq/landing/assets/img/bg/social/03.png);"></div>
    <div class="header-bottom-area padding-bottom-85 padding-top-110">
        <div class="triangle" data-parallax='{"x": -50, "y": 50}'></div>
        <div class="half-cricle"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center padding-bottom-40">

                    </div>
                </div>
            </div>

            <div id="feature" class="build-area padding-top-120 padding-bottom-75">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-icon-box-01">
                                <div class="msg-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="icon style-01">
                                    <i class="flaticon-followers"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Công nghệ</h3>
                                    <p>Hệ thống được vận hành hoàn toàn tự động 24/24.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-icon-box-01 active">
                                <div class="msg-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Bảo mật</h3>
                                    <p>Chúng tôi cam kết sẽ bảo mật thông tin người dùng 1 cách tốt nhất.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-icon-box-01">
                                <div class="msg-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Hỗ trợ</h3>
                                    <p>Đội ngũ hỗ trợ luôn lắng nghe ý khiến khách hàng để phát triển hệ thống.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pricing" class="price-plan-area padding-top-110 padding-bottom-90">
                <div class="bg-img" style="background-image: url(assets/img/bg/social/01.png);"></div>
                <div class="bg-img-02" style="background-image: url(assets/img/bg/social/02.png);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title desktop-center margin-bottom-55">
                                <h3 class="title social-title">Cấp bậc ưu đãi khách hàng </h3>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-price-plan-01">
                                <div class="price-header">
                                    <h4 class="title">Thành viên</h4>
                                    <div class="img-icon"><img
                                            src="{{ asset('') }}bvq/landing/assets/img/price-plan/01.png"
                                            alt=""></div>
                                </div>
                                <div class="price-body pt-4">
                                    <ul>
                                        <li><i class="fa fa-check success"></i> Cấp bậc này không có ưu đãi.</li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <div class="btn-wrapper"><a href="/" class="boxed-btn">Xem ngay</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-price-plan-01">
                                <div class="price-header">
                                    <h4 class="title">Cộng tác viên</h4>
                                    <div class="img-icon"><img
                                            src="{{ asset('') }}bvq/landing/assets/img/price-plan/02.png"
                                            alt=""></div>
                                </div>
                                <div class="price-body pt-4">
                                    <ul>
                                        <li><i class="fa fa-check success"></i> Có ưu đại giá dịch vụ cộng tác viên.
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <div class="btn-wrapper"><a href="/" class="boxed-btn">Xem ngay</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-price-plan-01">
                                <div class="price-header">
                                    <h4 class="title">Đại lý</h4>
                                    <div class="img-icon"><img
                                            src="{{ asset('') }}bvq/landing/assets/img/price-plan/03.png"
                                            alt=""></div>
                                </div>
                                <div class="price-body pt-4">
                                    <ul>
                                        <li><i class="fa fa-check success"></i> Có ưu đại giá dịch vụ đại lý.</li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <div class="btn-wrapper"><a href="/" class="boxed-btn">Xem ngay</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="join-apps-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="bg-image wow animate__animated animate__fadeInUp">
                        <img src="{{ asset('') }}bvq/landing/assets/img/bg/social/bg.png" alt="">
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="section-title desktop-center padding-top-110">
                        <h3 class="title social-title">Bạn còn chờ đợi gì nữa?</h3>
                        <p>Hãy sử dụng thử dịch vụ của chúng tôi nhé.</p>
                        <div class="apps-download">
                            <div class="download-link style-01">
                                <a href="/auth/login"> <i class="flaticon-apple"></i>Đăng Nhập</a>
                            </div>
                            <div class="download-link">
                                <a href="/auth/register"> <i class="flaticon-android"></i>Đăng Ký</a>
                            </div>
                        </div>
                    </div>




                    <footer class="footer-area">
                        <div class="copyright-area style-03">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="copyright-area-inner">
                                            © 2021 <a href="/home">SieuThiSub.Net</a> hệ thống được phát
                                            triển và vận hành bởi <a href="https://www.facebook.com/SieuThiSub.Net/"
                                                target="_blank" rel="noopener noreferrer">Bùi Văn Quyết</a>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>





                    <div class="back-to-top">
                        <span class="back-top"><i class="fa fa-angle-up"></i></span>
                    </div>


                    <script src="{{ asset('') }}bvq/landing/assets/js/jquery-2.2.4.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/bootstrap.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/jquery.magnific-popup.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/wow.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/owl.carousel.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/waypoints.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/jquery.counterup.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/jquery.ripples-min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/tilt.jquery.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/imagesloaded.pkgd.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/isotope.pkgd.min.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/parallax.js"></script>

                    <script src="{{ asset('') }}bvq/landing/assets/js/main.js"></script>
                    </body>

    </html>
