@extends('layout')

@section('title','products')

@section('link')

    <link rel="stylesheet" href="{{url('css/cardsstyle.css')}}">

{{--    cards--}}

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets2/img/favicon.png')}}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{url('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/responsive.css')}}">
    <script src="{{url('assets2/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    @endsection

@section('content')
    <div class="container">
        <div class="row" style=" display: flex; flex-wrap: nowrap;" >
    <!-- Side navigation -->
        <div class="sidenav col-3 p-5 " >
        <div class="form-group has-search">
            <span style="display: flex;left: 33px;" class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="بحث">

        </div>
        <form action="">
            <ul class="nav nav-pills flex-column checkside" dir="rtl">

                <li class="nav-item text-right" >
                    <div class="mb-2"><strong>قوة التكييف بالحصان</strong></div>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active "  >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">1.5 حصان</span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active "  >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">2.25 حصان</span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">3 حصان</span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">4 حصان</span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">5 حصان</span>
                            </label>
                        </li>
                    </ul>
                </li>
                <li class="nav-item text-right" >
                    <div class="mb-2"><strong>نظام التكييف و التدفئه</strong></div>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal"> بارد فقط</span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal"> بارد ساخن</span>
                            </label>
                        </li>

                    </ul>
                </li>
                <li class="nav-item text-right" >
                    <div class="mb-2"><strong>خصائص اضافيه</strong></div>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">عادى  </span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">بلازما </span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">انفرتر </span>
                            </label>
                        </li>

                    </ul>
                </li>
                <li class="nav-item text-right" >
                    <div class="mb-2"><strong>لون التكييف</strong></div>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">ابيض</span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal"> سيلفر</span>
                            </label>
                        </li>
                        <li class="nav-item">
                            <label style="background-color: #00adff;"  class="nav-link active " >
                                <input type="checkbox" name=""  >
                                <span style="font-weight: normal">اسود </span>
                            </label>
                        </li>

                    </ul>
                </li>

            </ul>

        </form>
    </div>

<div class=" col-9" style="margin-top: 50px;">
    <div class="row  " style="display: flex; ">
{{--        <div class="card ">--}}

{{--            <img src="https://picsum.photos/100/50" alt="Denim Jeans" style="width:100%;">--}}
{{--            <button class="btn d-none hh"> <i class="fas fa-cart-plus"></i></button>--}}
{{--            <h3>Tailored Jeans</h3>--}}
{{--            <p class="price">$19.99</p>--}}
{{--            <p>Some text about the jeans..</p>--}}
{{--            <p><button class="grow">Add to Cart</button>--}}

{{--            </p>--}}
{{--        </div>--}}

        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="product-width col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-30" >
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="{{url('sama/singleproduct')}}">
                        <img alt="" src="{{url('air/1.jpg')}}" >
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="ion-android-favorite-outline"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="ion-ios-shuffle-strong"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="ion-ios-search-strong"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-left">
                    <div class="product-hover-style">
                        <div class="product-title">
                            <h4>
                                <a href="product-details.html">Nature Close Tea</a>
                            </h4>
                        </div>
                        <div class="cart-hover">
                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <span>$100.00 -</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>

            </div>
        </div>




    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation example " style="margin-right: 70px;
    margin-top: 60px;">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">السابق</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">التالى</a></li>
        </ul>
    </nav>
    <!-- /Pagination -->
    </div>

    </div>

    </div>
@endsection

@section('script')

    <!-- all js here -->
    <script src="{{url('assets2/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{url('assets2/js/popper.js')}}"></script>
    <script src="{{url('assets2/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets2/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('assets2/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets2/js/ajax-mail.js')}}"></script>
    <script src="{{url('assets2/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets2/js/plugins.js')}}"></script>
    <script src="{{url('assets2/js/main.js')}}"></script>

@endsection
