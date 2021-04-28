@extends('layout')

@section('title','about us')

@section('link')



    <style>

        .breadcrumb-image {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 104px 0 110px;
            position: relative;
            width:100%;
        }
        .breadcrumb-image::before {
            background: rgba(0, 0, 0, 0.80) none repeat scroll 0 0;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 0;
        }
        .breadcrumb-image h1 {
            color: #ffffff;
            font-size: 33px;
            font-weight: 600;
            line-height: 40px;
            position: relative;
            text-transform: uppercase;
        }
        .gg{
            color: #ffffff;
            font-size: 20px;
            font-weight: 600;
            line-height: 40px;
            position: relative;
            text-transform: uppercase;
        }
        .breadcrumbs_path {
            color: #fff;
            margin-top: 8px;
            position: relative;
            z-index: 9;
        }
        /*.breadcrumbs_path > a {*/
        /*    color: #fff;*/
        /*    transition: all 0.3s ease 0s;*/
        /*}*/
        body{
         overflow-x: hidden;
        }
        .para{
            color:#183673;
            font-size:20px;
        }

    </style>

@endsection



@section('content')
<div class="container-fluid mb-5 mt-5" style="max-width: 100%;!important">
    <div class="banner-breadcum section">
        <div class="row">
            <div class="breadcrumb-image" style="background-image: url(https://images.pexels.com/photos/544117/pexels-photo-544117.jpeg?w=940&h=650&auto=compress&cs=tinysrgb);">
                <div class="container text-center">
                    <h1>عن الشركه</h1>
<h4 class="gg"> معا سما للتكييف مفيش مستحيل</h4>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container ">
        <div class="row">
            <div class="col-8  " style="text-align:justify;!important;padding: 20px; " >
              <p class="para">كلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق "ليتراسيت</p>
            </div>
            <div class="col-4  " style="padding:20px;text-align: center;">
                <h2 style="color: #004085;">شركة سما للتكييف</h2>
                <p class="para"> ننقل لكم خبرة ثمانى سنوات من الخبره</p>
            </div>
        </div>
    </div>


    @endsection
