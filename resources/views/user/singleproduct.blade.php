@extends('layout')

@section('title','product')

@section('link')

    <link rel="stylesheet" href="{{url('css/cardsstyle.css')}}">

    {{--    cards--}}

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets22/img/favicon.png')}}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{url('assets22/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets22/css/responsive.css')}}">
    <script src="{{url('assets22/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    @endsection


@section('content')


    <!-- Product Deatils Area Start -->
    <div class="product-details pt-100 pb-95" style="margin: 50px auto;width: 70%;">
        <div class="container" dir="ltr">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-img">
                        <img class="zoompro" src="{{url('air/1.jpg')}}" style="width: 442px; height: 300px;"/>


                    </div>
                </div>
                <div class="col-lg-6 col-md-12" style="text-align: end;padding-top: 20px;">
                    <div class="product-details-content" >
                        <h2 style="color: #183153;">تكييف توشيبا 2.5 حصان</h2>
                        <br>
{{--                        <div class="rating-review">--}}
{{--                            <div class="pro-dec-rating">--}}
{{--                                <i class="ion-android-star-outline theme-star"></i>--}}
{{--                                <i class="ion-android-star-outline theme-star"></i>--}}
{{--                                <i class="ion-android-star-outline theme-star"></i>--}}
{{--                                <i class="ion-android-star-outline theme-star"></i>--}}
{{--                                <i class="ion-android-star-outline"></i>--}}
{{--                            </div>--}}
{{--                            <div class="pro-dec-review">--}}
{{--                                <ul>--}}
{{--                                    <li>32 Reviews </li>--}}
{{--                                    <li> Add Your Reviews</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                        <span>3000 EGP</span>
                        <div class="in-stock">
                            <p>Available: <span>In stock</span></p>
                        </div>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>

                    <br>
                    <!-- Button trigger modal -->
                    <button type="button" class="default-btn border-radius hh" data-toggle="modal" data-target="#exampleModalCenter">
                       <strong>شراء</strong>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="justify-content: center;!important;" >
                                    <h4 class="modal-title " style="color: #183153;" id="exampleModalLongTitle">يرجى ملئ البيانات و سوف يتم التواصل</h4>

                                </div>
                                <form >
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" ><strong>الاسم</strong></label>
                                        <input dir="rtl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2"><strong>رقم الهاتف</strong></label>
                                        <input dir="rtl" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3"><strong> العنوان</strong></label>
                                        <input dir="rtl" type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                {{--                                        <label for="exampleInputEmail4"><strong> اسم الجهاز</strong></label>--}}
                                        <input dir="rtl" type="hidden" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>
                                <div class="modal-footer">


                                    <button type="button" class="default-btn border-radius hh" data-dismiss="modal">اغلاق</button>
                                    <button type="submit" class="default-btn border-radius hh">ارسال </button>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    {{--                        <div class="quality-add-to-cart">--}}
{{--                            <div class="quality">--}}
{{--                                <label>Qty:</label>--}}
{{--                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">--}}
{{--                            </div>--}}
{{--                            <div class="shop-list-cart-wishlist">--}}
{{--                                <a title="Add To Cart" href="#">--}}
{{--                                    <i class="icon-handbag"></i>--}}
{{--                                </a>--}}
{{--                                <a title="Wishlist" href="#">--}}
{{--                                    <i class="icon-heart"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Deatils Area End -->

{{--    <div class="product-area pb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="product-top-bar section-border mb-35">--}}
{{--                <div class="section-title-wrap">--}}
{{--                    <h3 class="section-title section-bg-white">Related Products</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="featured-product-active hot-flower owl-carousel product-nav">--}}
{{--                <div class="row  " style="display: flex; ">--}}
{{--                    --}}{{--        <div class="card ">--}}

{{--                    --}}{{--            <img src="https://picsum.photos/100/50" alt="Denim Jeans" style="width:100%;">--}}
{{--                    --}}{{--            <button class="btn d-none hh"> <i class="fas fa-cart-plus"></i></button>--}}
{{--                    --}}{{--            <h3>Tailored Jeans</h3>--}}
{{--                    --}}{{--            <p class="price">$19.99</p>--}}
{{--                    --}}{{--            <p>Some text about the jeans..</p>--}}
{{--                    --}}{{--            <p><button class="grow">Add to Cart</button>--}}

{{--                    --}}{{--            </p>--}}
{{--                    --}}{{--        </div>--}}

{{--                    <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >--}}
{{--                        <div class="product-wrapper">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="product-details.html">--}}
{{--                                    <img alt="" src="assets2/img/product/product-1.jpg" >--}}
{{--                                </a>--}}
{{--                                <span>-30%</span>--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="action-wishlist" href="#" title="Wishlist">--}}
{{--                                        <i class="ion-android-favorite-outline"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-cart" href="#" title="Add To Cart">--}}
{{--                                        <i class="ion-ios-shuffle-strong"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">--}}
{{--                                        <i class="ion-ios-search-strong"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-content text-left">--}}
{{--                                <div class="product-hover-style">--}}
{{--                                    <div class="product-title">--}}
{{--                                        <h4>--}}
{{--                                            <a href="product-details.html">Nature Close Tea</a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-hover">--}}
{{--                                        <h4><a href="product-details.html">+ Add to cart</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-price-wrapper">--}}
{{--                                    <span>$100.00 -</span>--}}
{{--                                    <span class="product-price-old">$120.00 </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >--}}
{{--                        <div class="product-wrapper">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="product-details.html">--}}
{{--                                    <img alt="" src="assets2/img/product/product-1.jpg" >--}}
{{--                                </a>--}}
{{--                                <span>-30%</span>--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="action-wishlist" href="#" title="Wishlist">--}}
{{--                                        <i class="ion-android-favorite-outline"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-cart" href="#" title="Add To Cart">--}}
{{--                                        <i class="ion-ios-shuffle-strong"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">--}}
{{--                                        <i class="ion-ios-search-strong"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-content text-left">--}}
{{--                                <div class="product-hover-style">--}}
{{--                                    <div class="product-title">--}}
{{--                                        <h4>--}}
{{--                                            <a href="product-details.html">Nature Close Tea</a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-hover">--}}
{{--                                        <h4><a href="product-details.html">+ Add to cart</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-price-wrapper">--}}
{{--                                    <span>$100.00 -</span>--}}
{{--                                    <span class="product-price-old">$120.00 </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >--}}
{{--                        <div class="product-wrapper">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="product-details.html">--}}
{{--                                    <img alt="" src="assets2/img/product/product-1.jpg" >--}}
{{--                                </a>--}}
{{--                                <span>-30%</span>--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="action-wishlist" href="#" title="Wishlist">--}}
{{--                                        <i class="ion-android-favorite-outline"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-cart" href="#" title="Add To Cart">--}}
{{--                                        <i class="ion-ios-shuffle-strong"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">--}}
{{--                                        <i class="ion-ios-search-strong"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-content text-left">--}}
{{--                                <div class="product-hover-style">--}}
{{--                                    <div class="product-title">--}}
{{--                                        <h4>--}}
{{--                                            <a href="product-details.html">Nature Close Tea</a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-hover">--}}
{{--                                        <h4><a href="product-details.html">+ Add to cart</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-price-wrapper">--}}
{{--                                    <span>$100.00 -</span>--}}
{{--                                    <span class="product-price-old">$120.00 </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >--}}
{{--                        <div class="product-wrapper">--}}
{{--                            <div class="product-img">--}}
{{--                                <a href="product-details.html">--}}
{{--                                    <img alt="" src="assets2/img/product/product-1.jpg" >--}}
{{--                                </a>--}}
{{--                                <span>-30%</span>--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="action-wishlist" href="#" title="Wishlist">--}}
{{--                                        <i class="ion-android-favorite-outline"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-cart" href="#" title="Add To Cart">--}}
{{--                                        <i class="ion-ios-shuffle-strong"></i>--}}
{{--                                    </a>--}}
{{--                                    <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">--}}
{{--                                        <i class="ion-ios-search-strong"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="product-content text-left">--}}
{{--                                <div class="product-hover-style">--}}
{{--                                    <div class="product-title">--}}
{{--                                        <h4>--}}
{{--                                            <a href="product-details.html">Nature Close Tea</a>--}}
{{--                                        </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-hover">--}}
{{--                                        <h4><a href="product-details.html">+ Add to cart</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-price-wrapper">--}}
{{--                                    <span>$100.00 -</span>--}}
{{--                                    <span class="product-price-old">$120.00 </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @endsection


@section('script')

    <!-- all js here -->
    <script src="{{url('assets22/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{url('assets22/js/popper.js')}}"></script>
    <script src="{{url('assets22/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets22/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('assets22/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets22/js/ajax-mail.js')}}"></script>
    <script src="{{url('assets22/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets22/js/plugins.js')}}"></script>
    <script src="{{url('assets22/js/main.js')}}"></script>

@endsection
