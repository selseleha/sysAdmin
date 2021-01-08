<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from logicgroup.ir/olympus/theme/Mobile-34-YourAccount-ChatMessages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Feb 2019 15:19:09 GMT -->
<head>

    <title>حساب شخصی - گفت و گو و پیام ها</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/front/Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="/front/Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/front/Bootstrap/dist/css/bootstrap-grid.css">

    <!-- Theme Styles CSS -->
    <link rel="stylesheet" type="text/css" href="/front/css/theme-styles.css">
    <link rel="stylesheet" type="text/css" href="/front/css/blocks.css">

    <!-- Main Font -->
    <script src="/front/js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <link rel="stylesheet" type="text/css" href="/front/css/fonts.css">

    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="/front/css/daterangepicker.html">
    <link rel="stylesheet" type="text/css" href="/front/css/jquery.mCustomScrollbar.min.css">


</head>
<body class="mobile-app">


<!-- Main Header Your Account -->

<div class="main-header">
    <div class="content-bg-wrap">
        <div class="content-bg bg-account"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                <div class="main-header-content">
                    <h1>داشبورد حساب کاربری شما</h1>
                    <p>خوش آمدید به داشبورد حساب کاربریتان! در اینجا شما می توانید همه چیزهایی را که نیاز دارید تغییر
                        دهید
                    </p>

                <br>
                    <button class="btn-info btn-lg" onclick="location.href='{{ url('/adds/create') }}'">اطلاعات تکمیلی</button>


                    <button class="btn-success btn-lg" onclick="location.href='{{ url('/info/create') }}'">
                        ایجاد خبر جدید
                    </button>
                    <button class="btn-danger btn-lg" onclick="location.href='{{ url('/logout') }}'">
                        خروج
                    </button>


            </div>
                </div>
            </div>
        </div>
    </div>



<!-- ... end Main Header Your Account -->


<!-- Your Account Personal Information -->

<div class="container">
    <div class="row">
        <div class="col-xl-12 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">گفت و گو / پیام ها</h6>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>

                <div class="row">
                    <div class="container">
                        <div class="container">
                        @yield('content1')
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
</div>

<!-- ... end Your Account Personal Information -->


<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
    <div class="modal-dialog ui-block window-popup update-header-photo">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon">
                <use xlink:href="icons/icons.svg#olymp-close-icon"></use>
            </svg>
        </a>

        <div class="ui-block-title">
            <h6 class="title">Update Header Photo</h6>
        </div>

        <a href="#" class="upload-photo-item">
            <svg class="olymp-computer-icon">
                <use xlink:href="icons/icons.svg#olymp-computer-icon"></use>
            </svg>

            <h6>Upload Photo</h6>
            <span>Browse your computer.</span>
        </a>

        <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

            <svg class="olymp-photos-icon">
                <use xlink:href="icons/icons.svg#olymp-photos-icon"></use>
            </svg>

            <h6>Choose from My Photos</h6>
            <span>Choose from your uploaded photos</span>
        </a>
    </div>
</div>


<!-- ... end Window-popup Update Header Photo -->


<!-- Window-popup Choose from my Photo -->
<div class="modal fade" id="choose-from-my-photo">
    <div class="modal-dialog ui-block window-popup choose-from-my-photo">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon">
                <use xlink:href="icons/icons.svg#olymp-close-icon"></use>
            </svg>
        </a>

        <div class="ui-block-title">
            <h6 class="title">Choose from My Photos</h6>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                        <svg class="olymp-photos-icon">
                            <use xlink:href="icons/icons.svg#olymp-photos-icon"></use>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                        <svg class="olymp-albums-icon">
                            <use xlink:href="icons/icons.svg#olymp-albums-icon"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>




    </div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<!-- jQuery first, then Other JS. -->
<script src="/front/js/jquery-3.2.0.min.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="/front/js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="/front/js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="/front/js/main.js"></script>

<!-- Load more news AJAX script -->
<script src="/front/js/ajax-pagination.js"></script>

<!-- Select / Sorting script -->
<script src="/front/js/selectize.min.js"></script>

<!-- Datepicker input field script-->
<script src="/front/js/moment.min.html"></script>
<script src="/front/js/daterangepicker.min.html"></script>

<script src="/front/js/mediaelement-and-player.min.js"></script>
<script src="/front/js/mediaelement-playlist-plugin.min.js"></script>

</body>

<!-- Mirrored from logicgroup.ir/olympus/theme/Mobile-34-YourAccount-ChatMessages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Feb 2019 15:19:09 GMT -->
</html>
