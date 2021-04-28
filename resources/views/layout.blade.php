<!doctype html>
<html class="no-js" lang="ar" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- CSS
    ========================= -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{url('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/Pe-icon-7-stroke.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/mystyle.css')}}">

    <!-- Modernizer JS -->
    <script src="{{url('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    @yield('link')
</head>

<body dir="rtl" >

<!-- Main Wrapper Start -->
<div class="main-wrapper" >

    <!-- header-area start -->
    <div class="header-area">

        <!-- header-top start -->
        <div class="header-top pt--10 pb--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-12">
                        <!-- logo start -->
                        <div class="logo">
                            <a href="index.html"><img src="{{url('assets/images/logo/logo.jpg')}}" alt=""></a>
                        </div>
                        <!-- logo End -->
                    </div>
                    <div class="col-lg-10 col-md-9 col-12">
                        <!-- Contact-information-top Start -->
                        <div class="contact-information-top">

                            <!-- Single-information-top Start -->
                            <div class="single-information-top">
                                <div class="info-icon">
                                    <i class="icofont-headphone-alt-2" style="color:#0055d9;"></i>
                                </div>
                                <div class="info-content ">
                                    <h4>اتصل بنا </h4>
                                    <p>+03476298</p>
                                </div>
                            </div>
                            <!-- Single-information-top End -->

                            <!-- Single-information-top Start -->
                            <div class="single-information-top">
                                <div class="info-icon">
                                    <i class="icofont-clock-time" style="color:#0055d9;"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="text-right">السبت - الخميس</h4>
                                    <p class="text-right">9.00 ص - 12.00 م</p>
                                </div>
                            </div>
                            <!-- Single-information-top End -->

                        </div>
                        <!-- Contact-information-top End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <!-- header-bottom-area Start -->
        <div class="header-bottom-area header-sticky ">
            <div class="container justify-content-center align-content-center d-flex ">
                <div class="row ">
                    <div class="col-lg-12 ">
                        <div class="header-menu-wrap border-top-1">
                            <!-- main-menu-area Start -->
                            <div class="main-menu">
                                <nav class="main-navigation">
                                    <ul>
                                        <li class="active"><a href="{{url('sama/home')}}">الرئيسيه</a>
                                            {{--                                            <ul class="sub-menu">--}}
                                            {{--                                                <li><a href="index.html">Home Page 1</a></li>--}}
                                            {{--                                                <li><a href="index-2.html">Home Page 2</a></li>--}}
                                            {{--                                                <li><a href="index-box.html">Home Box Layout 1</a></li>--}}
                                            {{--                                                <li><a href="index-2-box.html">Home Box Layout 2</a></li>--}}
                                            {{--                                            </ul>--}}
                                        </li>
                                        <li><a href="{{url('sama/aboutus')}}">عن الشركه</a>
                                            {{--                                            <ul class="sub-menu">--}}
                                            {{--                                                <li><a href="about-box.html">About Box Page</a></li>--}}
                                            {{--                                            </ul>--}}
                                        </li>
                                        <li><a href="{{url('sama/fix')}}">الصيانه</a>
                                            {{--                                            <ul class="sub-menu">--}}
                                            {{--                                                <li><a href="services-box.html">Services Box Page</a></li>--}}
                                            {{--                                                <li><a href="single-services.html">Single Services</a></li>--}}
                                            {{--                                                <li><a href="single-services-box.html">Single Services Box</a></li>--}}
                                            {{--                                            </ul>--}}
                                        </li>
                                        <li><a href="{{url('sama/allproduct')}}">المنتجات</a>
                                            <ul class="sub-menu" style="float: right;!important;" dir="rtl">
                                                <li><a class="text-right" href="team-box.html">كل المنتجات</a></li>
                                                <li><a class="text-right" href="team-box.html">شارب</a></li>
                                                <li><a class="text-right" href="team-box.html">يونيون اير</a></li>
                                                <li><a class="text-right" href="team-box.html">كاريير</a></li>
                                                <li><a class="text-right" href="team-box.html">ال جى</a></li>
                                            </ul>
                                        </li>
                                        <li style="    margin-right: 30px;"><a href="{{url('sama/contactus')}}" >تواصل معنا</a>
                                            {{--                                            <ul class="sub-menu">--}}
                                            {{--                                                <li><a href="blog.html">Blog Right Sidebar</a></li>--}}
                                            {{--                                                <li><a href="blog-box.html">Blog Box Right Sidebar</a></li>--}}
                                            {{--                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>--}}
                                            {{--                                                <li><a href="blog-left-sidebar-box.html">Blog Box Left Sidebar</a></li>--}}
                                            {{--                                                <li><a href="blog-fullwidth.html">Blog Grid Fullwidth</a></li>--}}
                                            {{--                                                <li><a href="blog-fullwidth-box.html">Blog Box Grid Fullwidth</a></li>--}}
                                            {{--                                                <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>--}}
                                            {{--                                                <li><a href="blog-details-box.html">Blog Box Details Right Sidebar</a></li>--}}
                                            {{--                                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>--}}
                                            {{--                                                <li><a href="blog-details-left-sidebar-box.html">Blog Box Details Left Sidebar</a></li>--}}
                                            {{--                                            </ul>--}}
                                        </li>
                                        {{--                                        <li><a href="contact.html">تواصل معنا</a>--}}
                                        {{--                                            <ul class="sub-menu">--}}
                                        {{--                                                <li><a href="contact-box.html">Contact Box Page</a></li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </li>--}}
                                    </ul>
                                </nav>
                            </div>
                            <!-- main-menu-area End -->

                            <!-- Make-apoinmant Start -->
                        {{--                            <div class="make-apoinmant-button">--}}
                        {{--                                <a href="#" class="default-btn border-radius">Make Appointment</a>--}}
                        {{--                            </div>--}}
                        <!-- Make-apoinmant End -->
                        </div>
                    </div>
                    <div class="col">
                        <!-- mobile-menu start -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                        <!-- mobile-menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom-area End -->

    </div>

    <!-- header-area end -->
    {{--    markee--}}
    <div>
        <div class="container-fluid " >
            <div class="row">
                <div class="alert  alert-dismissible text-center"  role="alert" style="width: 100%;margin-bottom: 0px;background-color: #0055d9;">
                    {{--                    <button type="button"  onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>--}}
                    <h3  style="font-family:Helvetica Neue, Helvetica, Arial, sans-serif;color:#fff; " ><strong>عروض </strong></h3> <marquee behavior="scroll"   direction="right"><p style="font-family: Impact; font-size: 20pt;color: white;"> اسال عرض السوبر من سما للتكيف على كل المنتجات ---  اسال عرض السوبر من سما للتكيف على كل المنتجات</p></marquee>
                </div>
            </div>
        </div>
    </div>

@yield('content')

    {{--    slider--}}



<!-- Footer Area Start -->
<footer class=" text-center text-white" dir="rtl" style="background-color: #0055d9">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1 rounded hh   " style="border: solid 1px white;!important;" target="_blank" href="https://www.facebook.com/atumagency" role="button"
            ><i class="fab fa-facebook-f "></i
                ></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1 rounded hh" style="border: solid 1px white;!important;"target="_blank"  href="https://twitter.com/AtumAgency" role="button"
            ><i class="fab fa-twitter"></i
                ></a>



            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1 rounded hh" style="border: solid 1px white;!important;"target="_blank"  href="https://instagram.com/atumagency" role="button"
            ><i class="fab fa-instagram"></i
                ></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1 rounded hh" style="border: solid 1px white;!important;"target="_blank"  href="https://linkedin.com/company/atumagency" role="button"
            ><i class="fab fa-linkedin-in"></i
                ></a>

            <a class="btn btn-outline-light btn-floating m-1 rounded hh" style="border: solid 1px white;!important;"target="_blank"  href="https://www.youtube.com/channel/UCRHWGcAB5caDOBtm_KLrkFQ" role="button"
            ><i class="fab fa-youtube"></i
                ></a>


            <a class="btn btn-outline-light btn-floating m-1 rounded hh" style="border: solid 1px white;!important;"target="_blank"  href="https://behance.net/atumagency" role="button"
            ><i class="fab fa-behance"></i
                ></a>

            {{--            <a class="btn btn-outline-light btn-floating m-1" href="https://behance.net/atumagency" role="button"--}}
            {{--            ><i class="fab fa-tiktok"></i></a>--}}


        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->

        <!-- Section: Form -->

        <!-- Section: Text -->

        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row justify-content-center " >
                <!--Grid column-->
                <div class="col-lg-4 mx-lg-auto col-md-8 col-10 " style="padding-top: 13px" >
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">نحن نصنع   <strong>علامات تجارية</strong> إبداعية فقط</h1>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4" style="color: white">اتصل بنا</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        00201000538101
                    </p>

                    <p >
                        <a style="color: white;" href="mailto:atum.agency@gmail.com">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            atum.agency@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4" style="color: white"><strong>عنوان</strong></h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i>
                        البحيره - دمنهور - دوران الاستاد
                    </p>
                </div>

            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Copyright  © SAMA
        {{--        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>--}}
    </div>
    <!-- Copyright -->
</footer>
{{--    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base u-spacing-15" data-href="#"></span>--}}


    <!-- JS
    ============================================ -->
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <!-- jQuery JS -->
<script src="{{url('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Popper JS -->
<script src="{{url('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- Plugins JS -->
<script src="{{url('assets/js/plugins.js')}}"></script>
    <!-- Ajax Mail -->
<script src="{{url('assets/js/ajax-mail.js')}}"></script>
    <!-- Main JS -->
<script src="{{url('assets/js/main.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>



@yield('script')




</body>

</html>
