@extends('layout')

@section('title','contact us')

@section('link')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>

        .con1{
            padding: 4%;
            /*height: 400px;*/
        }
        .mm{
            background:#0055d9;
            padding: 4%;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }
        .conn{
            margin-top:10%;
            text-align: center;
            color: white;
        }
        .conn img{
            margin-bottom: 15%;
        }
        .conn h2{
            margin-bottom: 10%;
        }
        .m9{
            background: #fff;
            padding: 3%;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }
        .conf label{
            font-weight:600;

        }
        .conf button{
            background: #0055d9;
            color: #fff;
            font-weight: 600;
            width: 25%;
        }
        .conf button:hover{
            background: #25274d;

        }


        .conf button:focus{
            box-shadow:none;
        }
        .form-group{
            text-align: right;
        }

        .control-label{
            font-size: 17px;
        }

    </style>
    @endsection

@section('content')

    <div class="container contact con1">
        <div class="row">
            <div class="col-md-3 mm">
                <div class="contact-info conn">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                    <h2>تواصل معنا</h2>
                    <h4>سوف نكون سعداء بالتواصل معك</h4>
                    <br>
                    <p class="mb-3">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        00201000538101
                    </p>

                    <p>
                        <a style="color: white;" href="mailto:atum.agency@gmail.com">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            atum.agency@gmail.com
                        </a>
                    </p>
                </div>

            </div>
            <div class="col-md-9 m9">

                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form method="post" action="{{url('sama/contactus')}}">
                    @csrf
                <div class="contact-form conf">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="lname">الاسم </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lname" placeholder="يرجى ادخال الاسم" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="phone">رقم الهاتف</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" placeholder="يرجى ادخال الهاتف" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">البريد الالكترونى</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="ادخل البريد الالكترونى" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="comment"> الرساله</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="comment" name="msg"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">ارسال</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>


    @endsection
