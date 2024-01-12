@inject('site_config', 'App\Models\site_config')
<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="{{ asset('') }}bvq/assets/" data-template="vertical-menu-template-semi-dark">


<head>
        
        <meta charset="utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="{{ Auth::user()->api_token }}">

    <title>{{ $title }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}lbd/assets/images/s.png" />

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
    <meta property="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok" />
    <meta property="og:site_name" content="hack like facebook - tang like hack like" />
    <!-- Canonical SEO -->



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">


    <!-- Icons -->

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('') }}lbd/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/091b6b8abd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">


    <!--- FONT-ICONS CSS -->
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/css/demo.css" />
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/css/app.css?v=1661332620">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('') }}bvq/assets//vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('') }}bvq/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('') }}bvq/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('') }}bvq/assets/js/config.js"></script>


    <style>.page_speed_1006350706{ width: 98%; }</style>
</head>
<style>
    .table th {
        text-transform: none !important;
        font-size: 14px !important;
    }

    .table> :not(caption)>*>* {
        padding: 5px 10px !important;
    }

    .badge {
        text-transform: none !important;
        padding: 0.5rem 0.5rem !important;
    }

    .table td {
        font-size: 14px !important;
    }

    #swal2-title,
    #swal2-html-container {
        font-weight: 600 !important;
    }
</style>
   <body>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

             <!-- Layout container -->
    <div class="layout-page">
      
      



        <!-- Navbar -->
        
        
        
        
        
          
        
          
          <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-fluid">

               








                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>


                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item navbar-search-wrapper mb-0">
                                    <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                        <i class="bx bx-search-alt bx-sm"></i>
                                        <span class="d-none d-md-inline-block text-muted">Tìm Kiếm</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Search -->


                            <ul class="navbar-nav flex-row align-items-center ms-auto">

                                <!-- Language -->
                                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <i class='fi fi-vn fis rounded-circle fs-3 me-1'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="vn">
                                                <i class="fi fi-vn fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">Việt Nam</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                                <i class="fi fi-de fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">German</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                                <i class="fi fi-pt fis rounded-circle fs-4 me-1"></i>
                                                <span class="align-middle">Portuguese</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ Language -->





                                <!--/ Style Switcher -->

                                <!-- Quick links  -->

                                <!-- Quick links -->

                                <!-- Notification -->
                                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bx bx-bell bx-sm"></i>
                                        <!-- <span class="badge bg-danger rounded-pill badge-notifications"></span> -->
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end py-0">
                                        <li class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto">Thông Báo</h5>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-all text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Mark all as read"><i
                                                        class="bx fs-4 bx-envelope-open"></i></a>
                                            </div>
                                        </li>
                                        <li class="dropdown-notifications-list scrollable-container">
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="{{ asset('') }}bvq/assets/img/avatars/1.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                            <p class="mb-0">Won the monthly best seller gold badge</p>
                                                            <small class="text-muted">1h ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Charles Franklin</h6>
                                                            <p class="mb-0">Accepted your connection</p>
                                                            <small class="text-muted">12hr ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="{{ asset('') }}bvq/assets/img/avatars/2.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">New Message ✉️</h6>
                                                            <p class="mb-0">You have new message from Natalie</p>
                                                            <small class="text-muted">1h ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-success"><i
                                                                        class="bx bx-cart"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                                            <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                            <small class="text-muted">1 day ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="{{ asset('') }}bvq/assets/img/avatars/9.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Application has been approved 🚀 </h6>
                                                            <p class="mb-0">Your ABC project application has been
                                                                approved.</p>
                                                            <small class="text-muted">2 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-success"><i
                                                                        class="bx bx-pie-chart-alt"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Monthly report is generated</h6>
                                                            <p class="mb-0">July monthly financial report is generated
                                                            </p>
                                                            <small class="text-muted">3 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="{{ asset('') }}bvq/assets/img/avatars/5.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">Send connection request</h6>
                                                            <p class="mb-0">Peter sent you connection request</p>
                                                            <small class="text-muted">4 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="{{ asset('') }}bvq/assets/img/avatars/6.png" alt
                                                                    class="w-px-40 h-auto rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">New message from Jane</h6>
                                                            <p class="mb-0">Your have new message from Jane</p>
                                                            <small class="text-muted">5 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-warning"><i
                                                                        class="bx bx-error"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-1">CPU is running high</h6>
                                                            <p class="mb-0">CPU Utilization Percent is currently at
                                                                88.63%,</p>
                                                            <small class="text-muted">5 days ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)"
                                                                class="dropdown-notifications-archive"><span
                                                                    class="bx bx-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-menu-footer border-top">
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex justify-content-center p-3">
                                                View all notifications
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ Notification -->

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" alt class="rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" alt
                                                                class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block lh-1">{{ Auth::user()->name }}</span>
                                                        <small class="text-muted">Số dư: <b class="text-danger">{{ number_format(Auth::user()->money) }}</b>
                                                            coin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('profile') }}">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">Tài Khoản Của Tôi</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('banking') }}">
                                                <span class="d-flex align-items-center align-middle">
                                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                    <span class="flex-grow-1 align-middle">Nạp Tiền Tài Khoản</span>

                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-support me-2"></i>
                                                <span class="align-middle">Help</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('auth.logout') }}" target="_blank">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Đăng Xuất</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->


                            </ul>
                        </div>


                        <!-- Search Small Screens
                        <div class="navbar-search-wrapper search-input-wrapper  d-none">
                            <input type="text" class="form-control search-input container-fluid border-0"
                                placeholder="Search..." aria-label="Search...">
                            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                        </div> -->


                    </div>
                </nav>