<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>شورای مشورتی  جوانان</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset("assets/styles/css/_Main-index.css")}}">
    <link rel="stylesheet" href="{{asset("assets/Icons/css/all.min.css")}}">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css"/>
    <script src="{{asset("assets/styles/bootstrap/jquery.min.js")}}"></script>
    <script src="{{asset("assets/styles/bootstrap/propper.min.js")}}"></script>
    <script src="{{asset("assets/styles/bootstrap/bootstrap.min.js")}}"></script>





    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', IRANSans;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;

            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>



<div class="content">


    <div class="top-header text-white text-center py-3">سامانه هوشمند مدیران و مردم</div>
    <nav style="direction: rtl;" class="navbar navbar-expand-lg text-right ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div  class="navbar-nav text-white">
                @if (Route::has('login'))
                    <div class="nav-item nav-link">
                        @auth
                            <a href="{{ url('/home') }}">داشبورد</a>
                        @else
                            <a style="padding-left: 25px;" href="{{ route('login') }}">ورود</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">ثبت نام</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>


    <div class="container-fluid index px-5">
        <div class="row my-3">
            <div class="col-md-9">

                <div class="mt-3 top-carousel mb-3" >
                    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                        <div class="carousel-inner px-4">

                            <div class="carousel-item active">
                                <img src="assets/images/b1.jpg" class="w-50 d-flex justify-content-center">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/b2.jpg" class="w-50 d-flex justify-content-center">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/b3.jpg" class="w-50 d-flex justify-content-center">
                            </div>

                        </div>

                        <div class="d-flex justify-content-between w-100" style="top:50% ;position:absolute;z-index:99">
                            <a  href="#carouselExampleIndicators" role="button" data-slide="next" class="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                            <a  href="#carouselExampleIndicators" role="button" data-slide="prev" class="prev">

                                <i class="fa fa-chevron-left"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <p class="text-right">
                    یکی از مواردی که همیشه مورد بحث بوده ارتباط مردم و مدیران است.همواره یکی از نیاز های مردم پاسخگویی مدیران بوده که به شکل صحیح انجام نمی گرفت.
                    در ارائه ی این پروژه سعی شده تا بستری را معرفی کند که مردم بتوانند مشکلات و اخبار خود را بیان کنند و حرف های خود را به نمایش بگذارند.
                    از جمله مهم ترین اهداف این پروژه انتشار اخبار و حرف های مردم است که به تایید مدیران سایت میرسد. فاز کوچک تری از این پروژه سال 97 در فرمانداری دماوند اجرا شد که بازخورد مثبتی از طرف مردم داشت و امید است که فاز های بعدی پروژه کمک بیشتری به بهبود وضع مردم بکند.

                </p>

                <div class="col-md-7 center-block">
                    <a type="button" href="{{ route('register') }}" class="btn btn-success">همینک ثبت نام کنید !</a>
                </div>
            </div>

            <div class="col-md-3 left-side p-0" style="overflow: auto !important;">
                <div style="max-height: 30em;">
                    <div class="carousel-header text-white text-center py-2 ">
                        <a style="color:white;" href="{{  url ('/infos') }}">   پستهای منتشر شده در کارگروه ها</a>
                    </div>

                    <div class="d-flex flex-column px-2 my-2">



                        <div class=" d-flex flex-row p-2">


                            <div class="w-100 text-center ">
                                <a href="/categories/3"><button type="button" class="w-100 btn bbbutton text-white "> فرهنگی اجتماعی</button></a>
                                <a href="/categories/2"><button type="button" class="w-100 btn bbbutton text-white"> زیربنایی و توسعه</button></a>
                                <a href="/categories/1"><button type="button" class="w-100 btn bbbutton text-white"> اقتصاد و کارآفرینی</button></a>
                                <a href="/categories/6"><button type="button" class="w-100 btn bbbutton text-white"> عمران و شهری</button></a>
                                <a href="/categories/5"><button type="button" class="w-100 btn bbbutton text-white"> کشاورزی و محیط زیست</button></a>
                                <a href="/categories/4"><button type="button" class="w-100 btn bbbutton text-white"> علمی آموزشی</button></a>
                                <a href="/categories/9"><button type="button" class="w-100 btn bbbutton text-white"> خبر</button></a>
                                <a href="/categories/8"><button type="button" class="w-100 btn bbbutton text-white"> گردشگری</button></a>
                                <a href="/categories/7"><button type="button" class="w-100 btn bbbutton text-white"> مشکلات</button></a>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>



    <script
            src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js">
    </script>

</div>

</body>
</html>
