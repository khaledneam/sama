@extends('layout')

@section('title','maintenance')

@section('link')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    @endsection

<style>





    div.main{
        background-color: #0055d9; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover,  #0055d9 1%, #1c2b5a 100%); /* FF3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%,#0055d9), color-stop(100%,#1c2b5a)); /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover,  #0055d9 1%,#1c2b5a 100%); /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover, #0055d9 1%,#1c2b5a 100%); /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover,  #0055d9 1%,#1c2b5a 100%); /* IE10+ */
        background: radial-gradient(ellipse at center,  #0055d9 1%,#1c2b5a 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0264d6', endColorstr='#1c2b5a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        height:calc(100vh);
        width:100%;
    }

    [class*="fontawesome-"]:before {
        font-family: 'FontAwesome', sans-serif;
    }

/*    !* ---------- GENERAL ---------- *!*/

    * {
        box-sizing: border-box;
        margin:0px auto;

    &:before,
    &:after {
         box-sizing: border-box;
     }

    }

    body {

        color: #606468;
        font: 87.5%/1.5em 'Open Sans', sans-serif;
        margin: 0;
    }

    /*a {*/
    /*    color: #eee;*/
    /*    text-decoration: none;*/
    /*}*/

    /*a:hover {*/
    /*    text-decoration: underline;*/
    /*}*/

    input {
        border: none;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5em;
        padding: 0;
        -webkit-appearance: none;
    }

    p {
        line-height: 1.5em;
    }

    .clearfix {
        *zoom: 1;


    &:before,
    &:after {
         content: ' ';
         display: table;
     }

    &:after {
         clear: both;
     }

    }

    .concon {
        left: 50%;
        position: relative;
        top: 50%;
        direction: ltr;
        transform: translate(-50%, -50%);

    }

/*    !* ---------- LOGIN ---------- *!*/

    #login form{
        width: 430px;
    }
    #login, .logof{
        display:inline-block;
        width:40%;
    }
    #login{
        border-right:1px solid #fff;
        padding: 0px 22px;
        width: 59%;
    }
    .logof{
        color:#fff;
        font-size:50px;
        line-height: 125px;
        align-self: center;
    }

    #login form span.fa {
        background-color: #fff;
        border-radius: 3px 0px 0px 3px;
        color: #000;
        display: block;
        float: left;
        height: 50px;
        font-size:24px;
        line-height: 50px;
        text-align: center;
        width: 50px;
    }

    #login form input {
        height: 50px;


    }
    fieldset{
        padding:0;
        border:0;
        margin: 0;

    }
    #login form input[type="text"], input[type="password"] {
        background-color: #fff;
        border-radius: 0px 3px 3px 0px;
        color: #000;
        margin-bottom: 1em;
        padding: 0 16px;
        width: 200px;
    }

    #login form input[type="submit"] {
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        background-color: #1c64b0;
        color: #eee;
        font-weight: bold;
        /* margin-bottom: 2em; */
        text-transform: uppercase;
        padding: 5px 10px;
        height: 30px;
    }

    #login form input[type="submit"]:hover {
        background-color: #4295cb;
    }

    #login > p {
        text-align: center;
    }

    #login > p span {
        padding-left: 5px;
    }
    .middle {
        display: flex;
        width: 800px;
    }


</style>

@section('content')

    <div class="main mb-5">


        <div class="container concon mt-5">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
<div class="row">

                <div class="middle col-12">
                    <div id="login" class="col-7 bb" >

                        <form action="{{url('sama/fix')}}" method="post">

                            @csrf
                            <fieldset class="clearfix" >


                                <p ><span class="fa fa-user"></span><input type="text" name="name"  Placeholder="يرجى ادخال الاسم" required style="width: 380px;"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                <p ><span class="fa fa-home"></span><input type="text" name="address"  Placeholder="العنوان" required style="width: 380px;"></p> <!-- JS because of IE support; better: placeholder="Username" -->

                                <p ><span class="fa fa-phone"></span><input type="text" name="phone"  Placeholder="رقم الهاتف" required style="width: 380px;"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                <p ><span class="fa fa-typo3"></span><input type="text" name="nameel"  Placeholder="اسم الجهاز " required style="width: 380px;"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                               <p><textarea rows="5" cols="33" placeholder="وصف العطل" name="des" style="width: 430px;"></textarea>
                               </p>

                                <div style="text-align: end">

                                    <span style="width:50%;   display: inline-block;"><input class="btn default-btn border-radius hh" type="submit" style="background-color: #0055d9" value="ارسال"></span>
                                </div>

                            </fieldset>
                            <div class="clearfix"></div>
                        </form>

                        <div class="clearfix"></div>

                    </div> <!-- end login -->
                    <div class="logof col-5"><img src="{{url('air/3.jpg')}}">

                        <div class="clearfix"></div>
                    </div>

                </div>

        </div>
        </div>
    </div>

@endsection
