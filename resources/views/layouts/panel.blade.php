<!DOCTYPE html>
<html lang="en" class="loading">

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Sep 2018 14:54:24 GMT -->

<!-- Mirrored from logicgroup.ir/convex/convex-demos/demo-4/app-assets/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 13:09:49 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>eCommerce Dashboard - Convex bootstrap 4 admin dashboard template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="/back/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="/back/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="/back/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="/back/img/ico/apple-icon-152.html">
      <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/back/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/back/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/back/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/back/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/back/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="/back/vendors/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="/back/css/app.css">
</head>
<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">



    <div class="wrapper">


        <div data-active-color="white" data-background-color="crystal-clear" data-image="../app-assets/img/sidebar-bg/08.jpg" class="app-sidebar">
            <div class="sidebar-header">
                <div class="logo clearfix"><a href="index-2.html" class="logo-text float-right">
                        <div class="logo-img"></div><span class="text align-middle">پبشخوان </span></a>
            </div>
            <div class="sidebar-content">
                <div class="nav-container">
                    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

                        <li class="has-sub nav-item"><a href="#"><i class="icon-notebook"></i><span data-i18n="" class="menu-title">جدول داده</span></a>
                            <ul class="menu-content">
                                <li><a href="dt-basic-initialization.html" class="menu-item">آغازگر اولیه</a>
                                </li>
                                <li><a href="dt-advanced-initialization.html" class="menu-item">آغازگر پیشرفته</a>
                                </li>
                                <li><a href="dt-styling.html" class="menu-item">ظاهر طراحی شده</a>
                                </li>
                                <li><a href="dt-data-sources.html" class="menu-item">منابع داده</a>
                                </li>
                                <li><a href="dt-api.html" class="menu-item">رابط‌ نرم‌افزار</a>
                                </li>
                            </ul>
                        </li>

                        <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="icon-support"></i><span data-i18n="" class="menu-title">پشتیبانی</span></a>
                        </li>

                        <li class="has-sub nav-item"><a href="#"><i class="icon-notebook"></i><span data-i18n="" class="menu-title">کاربران</span></a>
                            <ul class="menu-content">
                                <li><a href="/" class="menu-item">آغازگر اولیه</a>
                                </li>
                                <li><a href="dt-advanced-initialization.html" class="menu-item">آغازگر پیشرفته</a>
                                </li>
                                <li><a href="dt-styling.html" class="menu-item">ظاهر طراحی شده</a>
                                </li>
                                <li><a href="dt-data-sources.html" class="menu-item">منابع داده</a>
                                </li>
                                <li><a href="dt-api.html" class="menu-item">رابط‌ نرم‌افزار</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-background"></div>
        </div>
        </div>



        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid"><!--Statistics cards Starts-->
                       @yield('content')
                        <!--Statistics cards Ends-->


                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->




    <!-- BEGIN VENDOR JS-->
<script src="back/vendors/js/core/jquery-3.3.1.min.js"></script><script src="js/persian-datepicker.min.html"></script>
<script src="back/vendors/js/core/popper.min.js"></script>
<script src="back/vendors/js/core/bootstrap.min.js"></script>
<script src="back/vendors/js/perfect-scrollbar.jquery.min.js"></script>
<script src="back/vendors/js/prism.min.js"></script>
<script src="back/vendors/js/jquery.matchHeight-min.js"></script>
<script src="back/vendors/js/screenfull.min.js"></script>
<script src="back/vendors/js/pace/pace.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="back/vendors/js/chartist.min.js"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CONVEX JS-->
<script src="back/js/app-sidebar.js"></script>
<script src="back/js/notification-sidebar.js"></script>
<script src="back/js/customizer.js"></script>
<!-- END CONVEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="back/js/dashboard-ecommerce.js"></script>
<!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Sep 2018 14:54:24 GMT -->

<!-- Mirrored from logicgroup.ir/convex/convex-demos/demo-4/app-assets/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 13:09:49 GMT -->
</html>