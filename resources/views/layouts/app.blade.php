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
    <title>Portal Website ACEXI</title>
    @yield('css')
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/dataTables.bootstrap5.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/admin/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/responsive.css') }}">
</head>

<body>
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
                        <div class="d-flex h-100"> <img src="{{ asset('assets/admin/assets/images/giftools.gif') }}" alt="gif">
                            <h6 class="mb-0 f-w-400"><span class="font-primary">Don't Miss Out! </span><span class="f-light"> Out new update has been release.</span></h6><i class="icon-arrow-top-right f-light"></i>
                        </div>
                        <div class="d-flex h-100"><img src="{{ asset('assets/admin/assets/images/giftools.gif') }}" alt="gif">
                            <h6 class="mb-0 f-w-400"><span class="f-light">Something you love is now on sale! </span></h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
                        </div>
                    </div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="{{ asset('/assets/admin/assets/svg/icon-sprite.svg#moon') }}"></use>
                                </svg>
                            </div>
                        </li>

                        <li class="profile-nav onhover-dropdown pe-0 py-0">
                            <div class="d-flex profile-media"><img class="b-r-10" style="width: 35px; height: 35px" src="{{ Auth::user()->pengurus->image != null ? asset(Auth::user()->pengurus->image) : 'https://static.vecteezy.com/system/resources/thumbnails/005/129/844/small_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg' }}" alt="">
                                <div class="flex-grow-1"><span>{{ $user->pengurus->name }}</span>
                                    <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="{{ route('profile.edit',Auth::id()) }}"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="login.html">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="bg-transparent border-0 shadow-none m-0 p-0"><i data-feather="log-in"> </i><span>Logout</span></button>
                                        </form>
                                    </a>
                                </li>
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
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/admin/assets/images/logo/logo-icon.png') }}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/admin/assets/images/logo/logo-icon.png') }}" alt=""></a>
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

                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'admin-dashboard' ? 'active' : '' }}" href="{{ route('admin-dashboard') }}">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-file') }}"></use>
                                        </svg><span>Dashboard</span></a>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-akun-pengurus', 'admin-akun-pengurus-create', 'admin-akun-pengurus-edit', 'admin-data-pengurus', 'admin-data-pengurus-create', 'admin-data-pengurus-edit', 'admin-struktur-pengurus', 'admin-struktur-pengurus-create', 'admin-struktur-pengurus-edit','admin-struktur-bidang-pengurus']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-user') }}"></use>
                                        </svg><span>Pengurus</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-akun-pengurus', 'admin-akun-pengurus-create', 'admin-akun-pengurus-edit', 'admin-data-pengurus', 'admin-data-pengurus-create', 'admin-data-pengurus-edit', 'admin-struktur-pengurus', 'admin-struktur-pengurus-create', 'admin-struktur-pengurus-edit','admin-struktur-bidang-pengurus']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-akun-pengurus') }}" class="{{ in_array(Route::currentRouteName(), ['admin-akun-pengurus', 'admin-akun-pengurus-create', 'admin-akun-pengurus-edit']) ? 'active' : '' }}">Akun Pengurus</a></li>
                                        <li><a href="{{ route('admin-data-pengurus') }}" class="{{ in_array(Route::currentRouteName(), ['admin-data-pengurus', 'admin-data-pengurus-create', 'admin-data-pengurus-edit']) ? 'active' : '' }}">Data Pengurus</a></li>
                                        <li><a href="{{ route('admin-struktur-pengurus') }}" class="{{ in_array(Route::currentRouteName(), ['admin-struktur-pengurus', 'admin-struktur-pengurus-create', 'admin-struktur-pengurus-edit','admin-struktur-bidang-pengurus']) ? 'active' : '' }}">Struktur Pengurus</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-akun-member', 'admin-akun-member-create', 'admin-akun-member-edit', 'admin-data-member', 'admin-data-member-create', 'admin-data-member-edit']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-user') }}"></use>
                                        </svg><span>Member</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-akun-member', 'admin-akun-member-create', 'admin-akun-member-edit', 'admin-data-member', 'admin-data-member-create', 'admin-data-member-edit']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-akun-member') }}" class="{{ in_array(Route::currentRouteName(), ['admin-akun-member', 'admin-akun-member-create', 'admin-akun-member-edit']) ? 'active' : '' }}">Akun Member</a></li>
                                        <li><a href="{{ route('admin-data-member') }}" class="{{ in_array(Route::currentRouteName(), ['admin-data-member', 'admin-data-member-create', 'admin-data-member-edit']) ? 'active' : '' }}">Data Member</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-akun-mitra', 'admin-akun-mitra-create', 'admin-akun-mitra-edit', 'admin-data-mitra', 'admin-data-mitra-create', 'admin-data-mitra-edit']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-learning') }}"></use>
                                        </svg><span>Mitra</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-akun-mitra', 'admin-akun-mitra-create', 'admin-akun-mitra-edit', 'admin-data-mitra', 'admin-data-mitra-create', 'admin-data-mitra-edit']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-akun-mitra') }}" class="{{ in_array(Route::currentRouteName(), ['admin-akun-mitra', 'admin-akun-mitra-create', 'admin-akun-mitra-edit']) ? 'active' : '' }}">Akun Mitra</a></li>
                                        <li><a href="{{ route('admin-data-mitra') }}" class="{{ in_array(Route::currentRouteName(), ['admin-data-mitra', 'admin-data-mitra-create', 'admin-data-mitra-edit']) ? 'active' : '' }}">Data Mitra</a></li>
                                    </ul>
                                </li> 
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-program','admin-program-create','admin-program-edit','admin-kegiatan','admin-kegiatan-create','admin-kegiatan-edit']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-social') }}"></use>
                                        </svg>
                                        <span>Program & Kegiatan</span></a>
                                    <ul class="sidebar-submenu  {{ in_array(Route::currentRouteName(), ['admin-program','admin-program-create','admin-program-edit','admin-kegiatan','admin-kegiatan-create','admin-kegiatan-edit']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-program') }}" class=" {{ in_array(Route::currentRouteName(), ['admin-program','admin-program-create','admin-program-edit']) ? 'active' : '' }}">Program</a></li>
                                        <li><a href="{{ route('admin-kegiatan') }}" class=" {{ in_array(Route::currentRouteName(), ['admin-kegiatan','admin-kegiatan-create','admin-kegiatan-edit']) ? 'active' : '' }}">Kegiatan</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-peraturan-climate-change','admin-peraturan-climate-change-create','admin-peraturan-climate-change-edit','admin-kategori-peraturan-climate-change','admin-kategori-peraturan-climate-change-create','admin-kategori-peraturan-climate-change-edit']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-maps') }}"></use>
                                        </svg>
                                        <span>Climate Change</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-peraturan-climate-change','admin-peraturan-climate-change-create','admin-peraturan-climate-change-edit','admin-kategori-peraturan-climate-change','admin-kategori-peraturan-climate-change-create','admin-kategori-peraturan-climate-change-edit']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-peraturan-climate-change') }}" class="{{ in_array(Route::currentRouteName(), ['admin-peraturan-climate-change','admin-peraturan-climate-change-create','admin-peraturan-climate-change-edit']) ? 'active' : '' }}">Peraturan</a></li>
                                        <li><a href="{{ route('admin-kategori-peraturan-climate-change') }}" class="{{ in_array(Route::currentRouteName(), ['admin-kategori-peraturan-climate-change','admin-kategori-peraturan-climate-change-create','admin-kategori-peraturan-climate-change-edit']) ? 'active' : '' }}">Kategori Peraturan</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-tren-terbaru','admin-tren-terbaru-create','admin-tren-terbaru-edit','admin-kategori-tren-terbaru']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                                        </svg>
                                        <span>Tren Terbaru</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-tren-terbaru','admin-tren-terbaru-create','admin-tren-terbaru-edit','admin-kategori-tren-terbaru']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-tren-terbaru') }}" class="{{ in_array(Route::currentRouteName(), ['admin-tren-terbaru','admin-tren-terbaru-create','admin-tren-terbaru-edit']) ? 'active' : '' }}">Artikel</a></li>
                                        <li><a href="{{ route('admin-kategori-tren-terbaru') }}" class="{{ in_array(Route::currentRouteName(), ['admin-kategori-tren-terbaru']) ? 'active' : '' }}">Kategori Artikel</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-studi-kasus','admin-studi-kasus-create','admin-studi-kasus-edit','admin-kategori-studi-kasus']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-knowledgebase') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-knowledgebase') }}"></use>
                                        </svg>
                                        <span>Studi Kasus</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-studi-kasus','admin-studi-kasus-create','admin-studi-kasus-edit','admin-kategori-studi-kasus']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-studi-kasus') }}" class="{{ in_array(Route::currentRouteName(), ['admin-studi-kasus','admin-studi-kasus-create','admin-studi-kasus-edit']) ? 'active' : '' }}">Artikel</a></li>
                                        <li><a href="{{ route('admin-kategori-studi-kasus') }}" class="{{ in_array(Route::currentRouteName(), ['admin-kategori-studi-kasus']) ? 'active' : '' }}">Kategori Artikel</a></li>
                                    </ul>
                                </li>
                                
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-peraturan-regulasi-kebijakan','admin-peraturan-regulasi-kebijakan-create','admin-peraturan-regulasi-kebijakan-edit','admin-kategori-peraturan-regulasi-kebijakan','admin-kategori-peraturan-regulasi-kebijakan-create','admin-kategori-peraturan-regulasi-kebijakan-edit']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-internationalization') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-internationalization') }}"></use>
                                        </svg>
                                        <span>Regulasi & Kebijakan</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-peraturan-regulasi-kebijakan','admin-peraturan-regulasi-kebijakan-create','admin-peraturan-regulasi-kebijakan-edit','admin-kategori-peraturan-regulasi-kebijakan','admin-kategori-peraturan-regulasi-kebijakan-create','admin-kategori-peraturan-regulasi-kebijakan-edit']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-peraturan-regulasi-kebijakan') }}" class="{{ in_array(Route::currentRouteName(), ['admin-peraturan-regulasi-kebijakan','admin-peraturan-regulasi-kebijakan-create','admin-peraturan-regulasi-kebijakan-edit']) ? 'active' : '' }}">Peraturan</a></li>
                                        <li><a href="{{ route('admin-kategori-peraturan-regulasi-kebijakan') }}" class="{{ in_array(Route::currentRouteName(), ['admin-kategori-peraturan-regulasi-kebijakan','admin-kategori-peraturan-regulasi-kebijakan-create','admin-kategori-peraturan-regulasi-kebijakan-edit']) ? 'active' : '' }}">Kategori Peraturan</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title {{ in_array(Route::currentRouteName(), ['admin-kumpulan-berita','admin-kumpulan-berita-create','admin-kumpulan-berita-edit','admin-kategori-kumpulan-berita']) ? 'active' : '' }}" href="#">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-blog') }}"></use>
                                        </svg>
                                        <span>Kumpulan Berita</span></a>
                                    <ul class="sidebar-submenu {{ in_array(Route::currentRouteName(), ['admin-kumpulan-berita','admin-kumpulan-berita-create','admin-kumpulan-berita-edit','admin-kategori-kumpulan-berita']) ? 'd-block' : '' }}">
                                        <li><a href="{{ route('admin-kumpulan-berita') }}" class="{{ in_array(Route::currentRouteName(), ['admin-kumpulan-berita','admin-kumpulan-berita-create','admin-kumpulan-berita-edit']) ? 'active' : '' }}">Artikel</a></li>
                                        <li><a href="{{ route('admin-kategori-kumpulan-berita') }}" class="{{ in_array(Route::currentRouteName(), ['admin-kategori-kumpulan-berita']) ? 'active' : '' }}">Kategori Artikel</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <a class="sidebar-link sidebar-title link-nav " href="{{ route('admin-dashboard') }}">
                                        <svg class="stroke-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#stroke-faq') }}"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="{{ asset('assets/admin/assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                                        </svg><span>Tentang Aplikasi</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                @yield('content')
            </div>

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
    </div><!-- latest jquery-->
    <script src="{{ asset('assets/admin/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/admin/assets/js/scrollbar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/admin/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/admin/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/datatable/datatables/dataTables1.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/datatable/datatables/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/datatable/datatables/datatable.custom2.js') }}"></script>
    <!-- Plugins JS Ends-->
    @yield('js')
    <!-- Theme js-->
    <script src="{{ asset('assets/admin/assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/script1.js') }}"></script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    },
                });
                Toast.fire({
                    icon: "success",
                    title: "{{ session('success') }}",
                });
            });
        </script>
    @endif

</body>

</html>
