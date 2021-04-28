@extends('layout')

@section('title','home')
{{--    slider--}}

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('images/service1.jpg')}}" style="height:90vh;" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="width: 40%;margin: auto;">
                    <h2>djklbfsbufgvsi</h2>
                    <p>sdjbhguivbuvb</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('images/service2.jpg')}}" style="height:90vh;" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>djklbfsbufgvsi</h2>
                    <p>sdjbhguivbuvb</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('images/service3.jpg')}}" style="height:90vh;" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>djklbfsbufgvsi</h2>
                    <p>sdjbhguivbuvb</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="our-service-area bg-grey section-pt section-pb-80" style="  padding-top: 60px;!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">

                        <h2 style="color:#183153; ">منتجاتنا</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3" >

                    <a href="{{url('sama/allproduct')}}">
                    <div class="profile-card-4 text-center" style="height: 360px" ><img src="{{url('air/7.jpg')}}" class="img img-responsive">
                        <div class="profile-content">
                            <div class="profile-name">تكييف هواء كاريير
{{--                                <p>@johndoedesigner</p>--}}
                            </div>
                            <div class="profile-description">هي الشركة الرائدة عالميًا في مجال ح.

                                التكييف رقم واحد في مصر.</div>

                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3" >

                    <a href="{{url('sama/allproduct')}}">
                        <div class="profile-card-4 text-center" style="height: 360px" ><img src="{{url('air/7.jpg')}}" class="img img-responsive">
                            <div class="profile-content">
                                <div class="profile-name">تكييف هواء كاريير
                                    {{--                                <p>@johndoedesigner</p>--}}
                                </div>
                                <div class="profile-description">هي الشركة الرائدة عالميًا في مجال ح.

                                    التكييف رقم واحد في مصر.</div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" >

                    <a href="{{url('sama/allproduct')}}">
                        <div class="profile-card-4 text-center" style="height: 360px" ><img src="{{url('air/7.jpg')}}" class="img img-responsive">
                            <div class="profile-content">
                                <div class="profile-name">تكييف هواء كاريير
                                    {{--                                <p>@johndoedesigner</p>--}}
                                </div>
                                <div class="profile-description">هي الشركة الرائدة عالميًا في مجال ح.

                                    التكييف رقم واحد في مصر.</div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" >

                    <a href="{{url('sama/allproduct')}}">
                        <div class="profile-card-4 text-center" style="height: 360px" ><img src="{{url('air/7.jpg')}}" class="img img-responsive">
                            <div class="profile-content">
                                <div class="profile-name">تكييف هواء كاريير
                                    {{--                                <p>@johndoedesigner</p>--}}
                                </div>
                                <div class="profile-description">هي الشركة الرائدة عالميًا في مجال ح.

                                    التكييف رقم واحد في مصر.</div>

                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
            </div>

        </div>
    </div>
    <!-- Our Service Area End -->

    <!-- Repair-make-area Start -->
    <div class="repair-make-area section-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="repair-service-inner text-right">
                        <h2 style="color:#183153; ">لمعرفة التكييف المناسب  </h2>
{{--                        <h2>Repair & Services</h2>--}}
                        <p style="color:#183153; ">من خلال هذه الخدمه سوف نحسب لك التكييف المناسب لمساحة المنظقه المراد وضع التكييف فيها </p>
                        <div class="make-apoinment-button ">

{{--                            <a href="#" class="default-btn border-radius hh">التكييف المناسب</a>--}}
                            <!-- Button trigger modal -->
                            <button type="button" class=" default-btn border-radius hh" data-toggle="modal" data-target="#exampleModalCenter">
                                التكييف المناسب
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLongTitle">معرفة التكييف المناسب</h2>
{{--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                <span aria-hidden="true">&times;</span>--}}
{{--                                            </button>--}}
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><strong>طول الغرفه</strong></label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل طول الغرفه">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1"><strong>عرض الغرفه</strong></label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ادخل عرض الغرفه">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1"><strong>هل الغرفه فى الدور الاخير</strong></label>
                                                    <br>
                                                    <select class="form-select form-control" aria-label="Default select example">
                                                        <option value="1">نعم</option>
                                                        <option value="2">لا</option>

                                                    </select>
                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="default-btn border-radius hh" data-dismiss="modal">اغلاق</button>
                                            <button type="submit" class="default-btn border-radius hh">احسب</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                                    <!--/.Content-->


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="repair-image pt--30">
                        <img src="{{url('images/service1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
