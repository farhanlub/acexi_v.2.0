<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('storage/assets/images/logos/icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('storage/assets/images/logos/icon.png') }}" type="image/x-icon">
    <title>Admin ACEXI </title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/select.bootstrap5.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/admin/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/assets/css/responsive.css">
</head>

<body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Anything Here..." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('storage/assets/images/logos/icon.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('storage/assets/images/logos/icon.png') }}" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
                    <div class="notification-slider">
                        <div class="d-flex h-100"> <img src="../assets/admin/assets/images/giftools.gif" alt="gif">
                            <h6 class="mb-0 f-w-400"><span class="font-primary">Don't Miss Out! </span><span class="f-light"> Out new update has been release.</span></h6><i class="icon-arrow-top-right f-light"></i>
                        </div>
                        <div class="d-flex h-100"><img src="../assets/admin/assets/images/giftools.gif" alt="gif">
                            <h6 class="mb-0 f-w-400"><span class="f-light">Something you love is now on sale! </span></h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
                        </div>
                    </div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="../assets/admin/assets/svg/icon-sprite.svg#moon"></use>
                                </svg>
                            </div>
                        </li>

                        <li class="profile-nav onhover-dropdown pe-0 py-0">
                            <div class="d-flex profile-media"><img class="b-r-10" style="width: 35px; height: 35px" src="{{ asset($user->member->image) }}" alt="">
                                <div class="flex-grow-1"><span>{{ $user->member->nama_lengkap }}</span>
                                    <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="sign-up.html"><i data-feather="user"></i><span>Account </span></a></li>
                                <li><a href="mail-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                                <li><a href="add-user.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="login.html"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
                <div class="ProfileCard-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                </div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">Farhan</div>
                </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
                <div>
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('storage/assets/images/logos/icon.png') }}" style="width: 35px" alt=""><img class="img-fluid for-dark" src="{{ asset('storage/assets/images/logos/icon.png') }}" style="width: 35px" alt=""></a>
                        <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/admin/assets/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/admin/assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="pin-title sidebar-main-title">
                                    <div>
                                        <h6>Pinned</h6>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                    </div>
                                </li>

                                <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                                        <svg class="stroke-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#stroke-file"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#fill-file"></use>
                                        </svg><span>Dashboard</span></a></li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                                        </svg><span>Pengurus</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="category.html">Akun Pengurus</a></li>
                                        <li><a href="category.html">Data Pengurus</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                                        </svg><span>Anggota</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="category.html">Akun Anggota</a></li>
                                        <li><a href="category.html">Data Anggota</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assets/admin/assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                                        </svg><span>Mitra</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="category.html">Akun Mitra</a></li>
                                        <li><a href="category.html">Data Mitra</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/admin/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/admin/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/admin/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/admin/assets/js/scrollbar/simplebar.min.js"></script>
    <script src="../assets/admin/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/admin/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/admin/assets/js/sidebar-menu.js"></script>
    <script src="../assets/admin/assets/js/sidebar-pin.js"></script>
    <script src="../assets/admin/assets/js/clock.js"></script>
    <script src="../assets/admin/assets/js/slick/slick.min.js"></script>
    <script src="../assets/admin/assets/js/slick/slick.js"></script>
    <script src="../assets/admin/assets/js/header-slick.js"></script>
    <script src="../assets/admin/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/admin/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/admin/assets/js/counter/counter-custom.js"></script>
    <script src="../assets/admin/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/admin/assets/js/dashboard/default.js"></script>
    <script src="../assets/admin/assets/js/notify/index.js"></script>
    <script src="../assets/admin/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/admin/assets/js/datatable/datatables/dataTables.js"></script>
    <script src="../assets/admin/assets/js/datatable/datatables/dataTables.select.js"></script>
    <script src="../assets/admin/assets/js/datatable/datatables/select.bootstrap5.js"></script>
    <script src="../assets/admin/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/admin/assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/admin/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/admin/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/admin/assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/admin/assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/admin/assets/js/script.js"></script>
    <script src="../assets/admin/assets/js/script1.js"></script>
</body>

</html>
