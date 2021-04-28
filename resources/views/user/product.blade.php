@extends('layout')


@section('title','products')

@section('link')
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('side/assets/ico/apple-touch-icon-144-precomposed.png')}}">
{{--    <link rel="shortcut icon" href="{{url('side/assets/ico/favicon.ico')}}">--}}

    <!-- CSS Global -->
    <link href="{{url('side/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/owl-carousel2/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/owl-carousel2/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/swiper/css/swiper.min.css')}}" rel="stylesheet">

    <link href="{{url('side/assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/countdown/jquery.countdown.css')}}" rel="stylesheet">
    <link href="{{url('side/assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{url('side/assets/css/theme.css')}}" rel="stylesheet">

    <!-- Head Libs -->
    <script src="{{url('side/assets/plugins/modernizr.custom.js')}}"></script>



@endsection

@section('content')

    <div class="">


        <!-- /HEADER -->

        <!-- CONTENT AREA -->
        <div class="content-area">

            <!-- PAGE WITH SIDEBAR -->
            <div class="page-section with-sidebar">
                <div class="container-fluid">
                    <div class="row" style="padding: 2rem;">
                        <!-- SIDEBAR -->
                        <aside class="col-md-3 sidebar" id="sidebar">
                            <!-- widget search -->
                            <div class="widget shadow">
                                <div class="widget-search" dir="ltr">
                                    <input class="form-control" type="text" placeholder="">
                                    <button ><i class="fa fa-search text-left"></i></button>
                                </div>
                            </div>
                            <!-- /widget search -->
                            <!-- widget car categories -->
                            <div class="widget shadow property-categories  "  >
                                <h3 class="widget-title " style="text-align: center; font-size: 24px;" >المنتجات</h3>
                                <div class="widget-content no-pad" >
                                    <ul>
                                        <li style="text-align: justify;">
                                            <span class="arrow d-none">

                                                <i class="fa fa-angle-down" style="text-align: end; display: none;" ></i></span>
                                            <a style="text-align: start;margin-right: 10px;!important;font-size: 18px;"  href="#" >قوة التكييف بالحصان</a>
                                            <ul class=" ">

                                                <li>
                                                <div class="form-group form-check act" style="    padding-left: 5.25rem;">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck1">1.5  حصان</label>
                                                </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck2">2.25 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck3">3 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck4">4 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck5">5 حصان</label>
                                                    </div>
                                                </li>



                                            </ul>
                                        </li>
                                        <li style="text-align: justify;">
                                            <span class="arrow d-none">

                                                <i class="fa fa-angle-down" style="text-align: end; display: none;" ></i></span>
                                            <a style="text-align: start;margin-right: 10px;!important;font-size: 18px;"  href="#" >قوة التكييف بالحصان</a>
                                            <ul class=" ">

                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck1">1.5  حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck2">2.25 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck3">3 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck4">4 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck5">5 حصان</label>
                                                    </div>
                                                </li>



                                            </ul>
                                        </li>
                                        <li style="text-align: justify;">
                                            <span class="arrow d-none">

                                                <i class="fa fa-angle-down" style="text-align: end; display: none;" ></i></span>
                                            <a style="text-align: start;margin-right: 10px;!important;font-size: 18px;"  href="#" >قوة التكييف بالحصان</a>
                                            <ul class=" ">

                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck1">1.5  حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck2">2.25 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck3">3 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck4">4 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck5">5 حصان</label>
                                                    </div>
                                                </li>



                                            </ul>
                                        </li>
                                        <li style="text-align: justify;">
                                            <span class="arrow d-none">

                                                <i class="fa fa-angle-down" style="text-align: end; display: none;" ></i></span>
                                            <a style="text-align: start;margin-right: 10px;!important;font-size: 18px;"  href="#" >قوة التكييف بالحصان</a>
                                            <ul class=" ">

                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck1">1.5  حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck2">2.25 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck3">3 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck4">4 حصان</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group form-check" style="    padding-left: 5.25rem;">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                        <label style="text-align: start;margin-right: 35px; font-weight: lighter;"  class="form-check-label" for="exampleCheck5">5 حصان</label>
                                                    </div>
                                                </li>



                                            </ul>
                                        </li>


                                        {{-- <li><a href="#">Category name</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <!-- /widget car categories -->

                            <!-- /widget flickr feed -->
                            <!-- widget twitter -->

                            <!-- /widget tag cloud -->
                        </aside>
                        <!-- /SIDEBAR -->

                        <!-- CONTENT -->
                        <div class="col-md-9" id="">
                            <div class="row" style="padding: 2rem; margin-left:3%; display: flex;">

                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>


                                </div>
                            <!-- /Blog posts -->

                            <!-- Pagination -->
                            <div class="pagination-wrapper">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- /Pagination -->

                        </div>
                        <!-- /CONTENT -->

                    </div>
                </div>
            </div>
            <!-- /PAGE WITH SIDEBAR -->

        </div>
        <!-- /CONTENT AREA -->




    @endsection


@section('script')

    <!-- JS Global -->
        <script src="{{url('side/assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/superfish/js/superfish.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{url('side/assets/plugins/owl-carousel2/owl.carousel.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/jquery.sticky.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/jquery.easing.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/jquery.smoothscroll.min.js')}}"></script>
        <!--<script src="{{url('side/assets/plugins/smooth-scrollbar.min.js')}}"></script>-->
        <script src="{{url('side/assets/plugins/swiper/js/swiper.jquery.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/datetimepicker/js/moment-with-locales.min.js')}}"></script>
        <script src="{{url('side/assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

        <!-- JS Page Level -->
        <script src="{{url('side/assets/js/theme.js')}}"></script>




@endsection
