@inject('Str','Illuminate\Support\Str')
@inject('Date','Illuminate\Support\Facades\Date')

@extends('layouts.frontend.master')
@section('title','خبرگزاری فارس|Farse News Agancy')
@section('head')
<link rel="stylesheet" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa">
<meta name="wot-verification" content="ffd3687b0b6d6de2a2da">
<meta name="description"
    content="در خبرگزاری فارس تازه ترین اخبار ورزشی، حوادث، سیاسی، اجتماعی، اقتصادی ایران و جهان را مطالعه نموده و در بخش فارس من درخواست خود را از مسئولین مطالبه نمایید">
<link rel="alternate" hreflang="fa" href="https://www.farsnews.ir/">
<meta http-equiv="content-language" content="fa">
<meta name="keywords"
    content="سایت خبرگزاری فارس، کلیپ فارسی، اخبار ایران، آخرین نتایج، اخبار فوری، فوتبال ایران و جهان،گزارش تصویری FarsNews,Fars News Agency,Persian Clip,">
<meta name="dc.publisher" content="خبرگزاری فارس  | Fars News Agency">
<meta name="dc.identifier" content="https://www.farsnews.ir">
<meta name="copyright" content="©2020 Fars News Agency (www.farsnews.ir)">
<meta name="dcterms.created" content="2002-10-14T15:24:23+00:00">
<meta name="dcterms.modified" content="2020-09-22 T 11:04:10 +0430">
<meta itemprop="name" content="خبرگزاری فارس | Fars News Agency">
<meta itemprop="description"
    content="،تازه ترین اخبار ورزشی، حوادث، سیاسی و اقتصادی ایران، افغانستان، آسیای مرکزی و سایر مناطق جهان را در اینجا بخوانید. می توانید کلیپ های صوتی و تصویری را از خبرگزاری فارس دریافت کنید. ">
<meta itemprop="image" content="https://farsnews.ir/images/social-logo.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="خبرگزاری فارس | Fars News Agency">
<meta name="twitter:description"
    content="تازه ترین اخبار ورزشی، حوادث، سیاسی و اقتصادی ایران، افغانستان، آسیای مرکزی و سایر مناطق جهان را در اینجا بخوانید. می توانید کلیپ های صوتی و تصویری را از خبرگزاری فارس دریافت کنید.">
<meta name="twitter:site" content="@FarsNews_Agency">
<meta name="twitter:image:src" content="https://farsnews.ir/images/social-logo.jpg">
<meta name="twitter:image" content="https://farsnews.ir/images/social-logo.jpg">
<meta name="twitter:image:alt" content="خبرگزاری فارس | Fars News Agency">
<meta name="twitter:domain" content="https://www.farsnews.ir">

<meta property="og:title" content="خبرگزاری فارس | اخبار ایران و جهان | Fars News Agency">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.farsnews.ir">
<meta property="og:image" content="https://farsnews.ir/images/social-logo-farsnews.jpg">
<meta property="og:description"
    content="،تازه ترین اخبار ورزشی، حوادث، سیاسی و اقتصادی ایران، افغانستان، آسیای مرکزی و سایر مناطق جهان را در اینجا بخوانید. می توانید کلیپ های صوتی و تصویری را از خبرگزاری فارس دریافت کنید. ">
<meta property="og:site_name" content="خبرگزاری فارس">
<meta property="article:published_time" content="2020-09-22 T 11:04:10 +0430">
<meta name="date" content="2020-09-22 T 11:04:10 +0430">
<meta property="og:locale" content="fa_IR">
<meta property="og:article:author" content="خبرگزاری فارس | Fars News Agency">
<meta property="og:article:section" content="صفحه نخست">
<meta name="generator" content="https://www.farsnews.ir">
<meta name="language" content="fa">
<meta name="rating" content="General">
<meta name="expires" content="never">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="publisher" content="خبرگزاری فارس | Fars News Agency">
<link rel="canonical" href="https://www.farsnews.ir/">

<link rel="alternate" type="application/rss+xml" title="آخرین اخبار خبرگزاری فارس" href="https://www.farsnews.ir/rss">
<link rel="alternate" type="application/rss+xml" title="پربازدیدترین اخبار خبرگزاری فارس"
    href="https://www.farsnews.ir/rss/mostvisitednews">
<link rel="alternate" type="application/rss+xml" title="عناوین برتر اخبار خبرگزاری فارس"
    href="https://www.farsnews.ir/rss/topnews">
<link rel="alternate" type="application/rss+xml" title="اخبار برگزیده اخبار خبرگزاری فارس"
    href="https://www.farsnews.ir/rss/chosennews">

<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

<!--Bootstrap Css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- <link href="./assets/bootstrap.min.css" rel="stylesheet"> -->
<link href="./css/bootstrap.css" rel="stylesheet">

<!-- <link href="./assets/index.min.css" rel="stylesheet"> -->
<link href="./css/index.css" rel="stylesheet">
<link href="./css/video-js.css" rel="stylesheet">
@stop
@section('content')
<!-- ########################NavMenu ######################## -->
<div class="main-content  position-relative">
    <main>
        <div class="container position-relative">
            <span class="date position-absolute"> {{$today}} </span>
            <!-- {{ date('l, M d ,Y') }} -->
        </div>





        <div class="container pt-4 main-contain">
            <div class="row">
                <div class="col-12 col-lg-9 float-right main-right-col p-0">
                    <div class="col-12 col-md-8 float-right right-col padding-normal">

                        @if($featured)
                        @foreach($featured->posts()->where('status','فعال')->orderby('id','DESC')->get() as $key=>$item)

                        <!-- ######################################################### خبر ویژه تاپ ######################################################## -->
                        @if($key == 0)
                        <section class="top-news pb-2" itemscope="" itemtype="http://schema.org/CreativeWork">

                            <div class="position-relative">
                                <a href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="url">
                                    <figure><img class="w-100" style="height: 300px;" src="{{asset($item->cover)}}"
                                            alt="{{$item->title}}" itemprop="image"></figure>
                                </a>
                                <h3 class="title">
                                    <a href="{{url('article')}} / {{$item->slug}}" target="_blank">
                                        <div class="caption position-absolute text-right p-3 w-100" itemprop="name"
                                            style="background-color: #3E3E3E;">
                                            {{ Str::limit($item->title,100)}} </div>
                                    </a>
                                </h3>
                            </div>
                        </section>
                        @endif
                        @endforeach
                        <!-- ############################ Ads ##################### -->
                        @if($leaderboard)
                        <section class="pb-2  d-block">
                            <a href="{{$leaderboard->url}}" target="_blank">
                                <img src="{{asset($leaderboard->image)}}" class="w-100" style="height: 50px;"
                                    alt=""></a>
                        </section>
                        @endif
                        <section class="d-md-none">

                            <section class="d-flex flex-column my-fars mb-2 ">

                                <div class="campaigns d-flex flex-column position-relative">


                                    <div class="position-relative w-100 d-flex justify-content-around campaign-logo">

                                        <span class="d-flex align-items-center justify-content-center campaign-count">

                                            اعضا
                                            <span class="count mx-2">۲,۲۰۰,۴۱۸</span>
                                        </span>
                                        <a href="https://www.farsnews.ir/my"> <img src="./assets/MyFarsLogo2.png" alt=""
                                                style="width: 80px;"></a>
                                    </div>
                                    <div
                                        class="campaigns-count d-flex justify-content-around align-items-center pb-1  pt-1">


                                        <span class="d-flex flex-column align-items-center justify-content-center pr-1">

                                            سوژه ها
                                            <span class="count mx-1">۲۱.۸ هزار </span>
                                        </span>
                                        <span class="d-flex flex-column align-items-center justify-content-center pr-1">

                                            حامیان
                                            <span class="count mx-1">۳.۸ میلیون </span>
                                        </span>
                                        <span class="d-flex flex-column align-items-center justify-content-center">
                                            <a href="https://www.farsnews.ir/myfars" class="fars-hover">پیگیری
                                                ها</a>
                                            <span class="count mx-1">۱۵.۳ هزار </span>
                                        </span>
                                    </div>
                                    <a href="https://www.farsnews.ir/my"
                                        class="followed-link d-flex justify-content-center position-relative w-100">
                                        <div class="title d-flex justify-content-center pt-1">

                                            <span class="d-flex justify-content-center w-100 depravity">

                                                ایران را برای مفسدین نا امن کنیم

                                            </span>



                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between mx-2 mb-2 mt-1">
                                        <a class="btn follow d-inline-flex justify-content-center align-items-center py-0"
                                            href="https://www.farsnews.ir/my/campaign/new" target="_blank">
                                            ایجاد کمپین
                                        </a>

                                        <a class="btn start  d-inline-flex justify-content-center align-items-center py-0 BtnDepravity"
                                            href="https://www.farsnews.ir/my/depravity-report" target="_blank">
                                            <span class="tab-none pl-1"> گزارش </span>
                                            فساد
                                        </a>

                                        <a class="btn start  d-inline-flex justify-content-center align-items-center py-0"
                                            href="https://www.farsnews.ir/my/compose" target="_blank">
                                            <span class="tab-none  pl-1"> سایر </span>
                                            موارد
                                        </a>

                                    </div>
                                </div>
                            </section>




                        </section>

                        <!-- ######################################################### پنج خبر ویژه   ######################################################## -->

                        <section class="top-middle-news news-list" itemscope=""
                            itemtype="http://schema.org/CreativeWork">
                            <ul class="list-unstyled p-0 m-0">
                                @foreach($featured->posts()->orderby('id','DESC')->get() as $key=>$item)
                                @if($key > 0 && $key < 6) <li
                                    class="media py-9d border-bottom flex-row position-relative">
                                    <div class="col-5 col-sm-4 px-0 align-self-center position-relative img-box">
                                        <a class="w-100" href="{{url('article')}}/{{$item->slug}}" target="_blank"
                                            itemprop="url">
                                            <figure> <img class="w-100 lazyimage" src="{{asset($item->cover)}}"
                                                    alt="{{$item->title}}" itemprop="image"></figure>

                                        </a>
                                        <a class="category w-100 padding-normal" href="#" target="_blank">
                                            <span class="headline">
                                               
                                            </span>
                                        </a>
                                    </div>


                                    <div
                                        class="col-7 col-sm-8 media-body text-right mr-2 d-flex flex-column justify-content-between align-self-stretch">

                                        <div class="d-flex flex-column">
                                            <span class="headline d-none d-sm-block mb-1"></span>
                                            <h3 class="title" itemprop="name"> <a
                                                    href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                                    {{ Str::limit($item->title,60)}} </a></h3>
                                            <div class="time-category text-left mt-2 d-block d-md-none">
                                                <span
                                                    class="oi oi-clock ml-1"></span><span>{{ $item->created_at->diffForHumans() }}
                                                </span>
                                                <span class="ver-line">
                                                    |
                                                </span>
                                                <span></span>
                                            </div>
                                        </div>


                                        <div class="d-md-flex align-items-start rel-news w-100 mt-2 d-none ">

                                            <span class="diamond position-relative ml-3 mt-square">
                                                <span class="oi oi-caret-top position-absolute">
                                                </span>
                                                <span class="oi oi-caret-bottom position-absolute">
                                                </span>
                                            </span>
                                            <h4>
                                                <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                                    {{ Str::limit($item->meta,40)}}
                                                </a>
                                            </h4>

                                        </div>

                                    </div>
                                    </li>
                                    @endif
                                    @endforeach

                            </ul>
                        </section>
                        @endif
                    </div>
                    <div class="col-12 col-md-4 float-right mid-col d-flex flex-column padding-normal">

                        <section class="fars-plus services d-flex flex-column mb-2">

                            <div class="content" itemscope="" itemtype="http://schema.org/CreativeWork">
                                @foreach($featured->posts()->orderby('id','DESC')->get() as $key=>$item)
                                @if($key == 6 )
                                <div class="text-justify border-bottom position-relative">
                                    <a href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="url">
                                        <figure><img class="w-100" src="{{asset($item->cover)}}" itemprop="image">
                                        </figure>
                                    </a>

                                    <div class="d-flex align-items-center">
                                        <h3 class="top px-3 pb-2 pt-3" itemprop="name">
                                            <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                                {{ Str::limit($item->title,35)}} </a>
                                        </h3>
                                    </div>



                                    <h2 class="headline">
                                        <a class="FarsLink " href="#" target="_blank">
                                            فارس پلاس
                                        </a>
                                    </h2>

                                </div>
                                @endif
                                @endforeach
                                <ul class="list-unstyled m-0 p-0">
                                    @foreach($featured->posts()->orderby('id','DESC')->get() as $key=>$item)
                                    @if($key > 6 && $key < 10 ) <li
                                        class=" d-flex px-3 py-custom-2 border-bottom align-items-start">

                                        <span class="diamond position-relative ml-3 mt-3">
                                            <span class="oi oi-caret-top position-absolute">
                                            </span>
                                            <span class="oi oi-caret-bottom position-absolute">
                                            </span>
                                        </span>
                                        <h3 class="text-right" itemprop="name">
                                            <a class="text-righ" href="{{url('article')}}/{{$item->slug}}"
                                                target="_blank" itemprop="url"> {{ Str::limit($item->title,35)}} &raquo;
                                            </a>
                                        </h3>

                                        </li>
                                        @endif
                                        @endforeach

                                </ul>

                            </div>


                        </section>
                        <!-- ##########################  برگزیده ها ############### -->
                        <section class="most visit-chosen w-100 d-flex flex-column pt-1 position-relative"
                            style="height: 637.734px;">


                            <ul class="nav nav-tabs">
                                <li class="nav-item col-4 p-0 border-left">
                                    <a class="nav-link chosen-news active d-flex justify-content-center align-items-center"
                                        data-toggle="tab" href="https://www.farsnews.ir/#chosen-news">
                                        <h2>برگزیده ها</h2>
                                    </a>
                                </li>
                                <li class="nav-item  col-4 p-0 border-left">
                                    <a class="nav-link most-reads d-flex justify-content-center align-items-center"
                                        data-toggle="tab" href="https://www.farsnews.ir/#nav-most-reads">
                                        <div>
                                            <h2>پر خواننده ها</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item  col-4 p-0">
                                    <a class="nav-link most-views d-flex justify-content-center align-items-center"
                                        data-toggle="tab" href="https://www.farsnews.ir/#nav-most-views">
                                        <div>
                                            <h2>
                                                پر‌بحث‌ترین‌ها
                                            </h2>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content pt-3 news-list-small">
                                <div class="tab-pane active" id="chosen-news" data-simplebar="init"
                                    data-simplebar-auto-hide="true" style="max-height: 637.734px;">

                                    <div class="simplebar-track vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="visibility: visible; top: 0px; height: 380px;"></div>
                                    </div>
                                    <div class="simplebar-track horizontal" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="visibility: visible; left: 0px; width: 25px;"></div>
                                    </div>
                                    <div class="simplebar-scroll-content"
                                        style="padding-left: 17px; margin-bottom: -34px;">
                                        <div class="simplebar-content"
                                            style="padding-bottom: 17px; margin-left: -17px;">
                                            <ul class="list-unstyled w-100 pb-3">
                                                @if(count($most_view) > 0)
                                                @foreach($most_view as $item)
                                                <li
                                                    class="text-right py-1 px-3 word-wrap d-flex align-items-center title">
                                                    <span
                                                        class="diamond position-relative ml-3 mt-0 d-flex float-right"><span
                                                            class="oi oi-caret-top position-absolute"></span><span
                                                            class="oi oi-caret-bottom position-absolute"></span></span><span
                                                        class="oi  ml-1 mt-0 "></span>
                                                    <h3><a class="d-flex" href="{{url('article')}}/{{$item->slug}}"
                                                            target="_blank">
                                                            {{$item->title}}
                                                        </a></h3>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="nav-most-reads" data-simplebar="init"
                                    data-simplebar-auto-hide="true" style="max-height: 637.734px;">
                                    <div class="simplebar-track vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"></div>
                                    </div>
                                    <div class="simplebar-track horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"></div>
                                    </div>
                                    <div class="simplebar-scroll-content"
                                        style="padding-left: 17px; margin-bottom: -34px;">
                                        <div class="simplebar-content"
                                            style="padding-bottom: 17px; margin-left: -17px;">
                                            <ul class="list-unstyled w-100 pb-3">
                                                @if(count($most_comment) > 0)
                                                @foreach($most_comment as $item)
                                                <li
                                                    class="text-right py-1 px-3 word-wrap d-flex align-items-center title">
                                                    <span
                                                        class="diamond position-relative ml-3 mt-0 d-flex float-right"><span
                                                            class="oi oi-caret-top position-absolute"></span><span
                                                            class="oi oi-caret-bottom position-absolute"></span></span><span
                                                        class="oi  ml-1 mt-0 "></span>
                                                    <h3><a class="d-flex" href="{{url('article')}}/{{$item->slug}}"
                                                            target="_blank">
                                                            {{$item->title}}
                                                        </a></h3>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-most-views" data-simplebar="init"
                                    data-simplebar-auto-hide="true" style="max-height: 637.734px;">
                                    <div class="simplebar-track vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"></div>
                                    </div>
                                    <div class="simplebar-track horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"></div>
                                    </div>
                                    <div class="simplebar-scroll-content"
                                        style="padding-left: 17px; margin-bottom: -34px;">
                                        <div class="simplebar-content"
                                            style="padding-bottom: 17px; margin-left: -17px;">
                                            <ul class="list-unstyled w-100 pb-3">
                                                @if(count($bargozideha->posts) > 0)
                                                @foreach($bargozideha->posts()->take(5)->get() as $item)
                                                <li
                                                    class="text-right py-1 px-3 word-wrap d-flex align-items-center title">
                                                    <span
                                                        class="diamond position-relative ml-3 mt-0 d-flex float-right"><span
                                                            class="oi oi-caret-top position-absolute"></span><span
                                                            class="oi oi-caret-bottom position-absolute"></span></span><span
                                                        class="oi  ml-1 mt-0 "></span>
                                                    <h3><a class="d-flex" href="{{url('article')}}/{{$item->slug}}"
                                                            target="_blank">
                                                            {{$item->title}}
                                                        </a></h3>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>
                <div class="col-12 col-lg-3 float-right mt-3 mt-md-0 main-left-col p-0">
                    <div class="adverBox w-100 h-100 padding-normal d-flex flex-column">


                        <section class="d-flex flex-column my-fars mb-2 " itemscope=""
                            itemtype="http://schema.org/CreativeWork">

                            <div class="campaigns d-flex flex-column position-relative">

                                <a class="FarsLink  d-inline-block text-center" href="https://www.farsnews.ir/my"
                                    target="_blank">
                                    <h2 class="headline">
                                        فارس من
                                    </h2>
                                </a>

                                <div id="simple-vertical" class="royalSlider rsDefault rsHor"
                                    style="height: 207.284px;">
                                    <div class="rsOverflow grab-cursor" style="width: 290.5px; height: 207.281px;">
                                        <div class="rsContainer"
                                            style="transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">

                                            @if(count($farsman->posts)>0)
                                            @foreach($farsman->posts()->orderby('id','DESC')->get() as $key=>$item)
                                            @if($key == 0)
                                            <div style="left: 0px;" class="rsSlide ">
                                                <div class="first  d-flex flex-column w-100"
                                                    style="visibility: visible; opacity: 1; transition: opacity 400ms ease-in-out 0s;">
                                                    <div class="position-relative IE-farsme">
                                                        <img class="w-100 lazyimage" src="{{asset($item->cover)}}"
                                                            alt="" itemprop="image">
                                                        <div
                                                            class="owner-data d-flex position-absolute align-items-center">
                                                            <span> حامیان: ۵ نفر</span>
                                                            <img class="avater rounded-circle img-thumbnail lazyimage"
                                                                src="./assets/UI_38e4402f2d8f407d996882b84151f5ed.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <h3 class="w-100 d-block" itemprop="name">
                                                        <a class="title d-block text-right px-2 mb-1"
                                                            href="{{url('article')}}/{{$item->slug}}" itemprop="url">
                                                            {{$item->title}}

                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endif


                                        </div>
                                        <div class="rsArrow rsArrowLeft rsHidden" style="display: block;">
                                            <div class="rsArrowIcn"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative w-100 d-flex justify-content-around campaign-logo">

                                    <span class="d-flex align-items-center justify-content-center campaign-count">

                                        اعضا
                                        <span class="count mx-2">0</span>
                                    </span>
                                    <a href="/"> <img src="./assets/MyFarsLogo2.png" alt="" style="width: 80px;"></a>
                                </div>
                                <div
                                    class="campaigns-count d-flex justify-content-around align-items-center pb-1  pt-1">


                                    <span class="d-flex flex-column align-items-center justify-content-center pr-1">

                                        <a href="/">سوژه ها</a>
                                        <span class="count mx-1">۲۱.۸ هزار </span>
                                    </span>
                                    <span class="d-flex flex-column align-items-center justify-content-center pr-1">

                                        <a href="/">حامیان</a>
                                        <span class="count mx-1">۳.۸ میلیون </span>
                                    </span>
                                    <span class="d-flex flex-column align-items-center justify-content-center">
                                        <a href="/" class="fars-hover">پیگیری ها</a>

                                        <span class="count mx-1">۱۵.۳ هزار </span>
                                    </span>
                                </div>
                                <a href="/" class="followed-link d-flex justify-content-center position-relative w-100">
                                    <div class="title d-flex justify-content-center pt-1">

                                        <span class="d-flex justify-content-center w-100 depravity">


                                        </span>



                                    </div>
                                </a>
                                <div class="d-flex justify-content-between mx-2 mb-2 mt-1">
                                    <a class="btn follow d-inline-flex justify-content-center align-items-center py-0"
                                        href="/" target="_blank">
                                        ایجاد کمپین
                                    </a>

                                    <a class="btn start  d-inline-flex justify-content-center align-items-center py-0 BtnDepravity"
                                        href="/" target="_blank">
                                        <span class="tab-none pl-1"> گزارش </span>
                                        فساد
                                    </a>

                                    <a class="btn start  d-inline-flex justify-content-center align-items-center py-0 "
                                        href="/" target="_blank">
                                        <span class="tab-none  pl-1"> سایر </span>
                                        موارد
                                    </a>

                                </div>
                            </div>
                        </section>















                        <!-- ####################################### یادداشت ها ################################### -->

                        <section class="view-point pt-1 position-relative">

                            <h2 class="headline">
                                <a class="FarsLink padding-normal" href="" target="_blank" style="top: 4px !important">

                                    یادداشت ها
                                </a>
                            </h2>


                            <div id="carousel" class="carousel slide w-100 d-flex flex-column" data-ride="carousel"
                                itemscope="" itemtype="http://schema.org/CreativeWork">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                    <li data-target="#carousel" data-slide-to="3"></li>
                                    <li data-target="#carousel" data-slide-to="4"></li>
                                    <li data-target="#carousel" data-slide-to="5"></li>
                                </ol>

                                <div class="carousel-inner">

                                    @if(count($note->posts)>0)
                                    @foreach($note->posts()->orderby('id','DESC')->get() as $key=>$item)
                                    @if($key == 0)
                                    <div class="carousel-item active">
                                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="url">
                                            <div class="pt-province-2 d-flex px-2 pt-4 pb-2 justify-content-between ">
                                                <div class="d-flex flex-column ml-1"
                                                    style="width: calc(100% - 60px) !important;">

                                                    <span class="title text-right " itemprop="name">
                                                        {{$item->title}}
                                                    </span>
                                                    <span class="headline text-left">
                                                        @foreach($users->where('id',$item->user_id) as $user)
                                                        {{$user->name}}
                                                        @endforeach
                                                    </span>
                                                </div>
                                                <img class="rounded-circle lazyimage" src="{{asset($item->cover)}}"
                                                    alt="" itemprop="image">
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif

                                    @if(count($note->posts)>0)
                                    @foreach($note->posts()->orderby('id','DESC')->get() as $key=>$item)
                                    @if($key > 0 && $key < 5) <div class="carousel-item ">
                                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="url">
                                            <div class="pt-province-2 d-flex px-2 pt-4 pb-2 justify-content-between ">
                                                <div class="d-flex flex-column ml-1"
                                                    style="width: calc(100% - 60px) !important;">

                                                    <span class="title text-right " itemprop="name">
                                                        {{$item->title}}
                                                    </span>
                                                    <span class="headline text-left">
                                                        @foreach($users->where('id',$item->user_id) as $user)
                                                        {{$user->name}}
                                                        @endforeach
                                                    </span>
                                                </div>
                                                <img class="rounded-circle lazyimage" src="{{asset($item->cover)}}"
                                                    alt="" itemprop="image">
                                            </div>
                                        </a>
                                </div>
                                @endif
                                @endforeach
                                @endif

                            </div>


                    </div>





                    </section>

                    <section class="m-tab mt-2 mb-3">
                        <div class="widgets d-flex flex-column w-100">
                            <ul class="d-flex flex-wrap w-100 justify-content-around my-2">
                                <li data-toggle="tooltip" title="" class="mobile" data-original-title="تلفن همراه">
                                    <a href="https://www.farsnews.ir/widgets/mobile/" target="_blank"></a>
                                </li>

                                <li data-toggle="tooltip" title="" class="curreny" data-original-title="ارز"><a
                                        href="https://www.farsnews.ir/widgets/currency/" target="_blank"></a>
                                </li>
                                <li data-toggle="tooltip" title="" class="interior-cars"
                                    data-original-title="خودروهای داخلی"><a href="https://www.farsnews.ir/widgets/cars/"
                                        target="_blank"></a></li>
                                <li data-toggle="tooltip" title="" class="gold" data-original-title="طلا و سکه">
                                    <a href="https://www.farsnews.ir/widgets/gold/" target="_blank"></a>
                                </li>
                                <li data-toggle="tooltip" title="" class="bource" data-original-title="بورس">
                                    <a href="https://www.farsnews.ir/widgets/bource/" target="_blank"></a>
                                </li>

                                <li data-toggle="tooltip" title="" class="more" data-original-title="بیشتر">
                                    <a href="https://www.farsnews.ir/#more-widgets" data-toggle="collapse"></a>
                                </li>

                            </ul>

                            <div class=" collapse" id="more-widgets">
                                <ul class="d-flex flex-wrap w-100 justify-content-around">
                                    <li data-toggle="tooltip" title="" class="leagues" data-original-title="لیگ فوتبال">
                                        <a href="https://www.farsnews.ir/widgets/leagues/" target="_blank"></a>
                                    </li>

                                    <li data-toggle="tooltip" title="" class="foreign-cars"
                                        data-original-title="خودرو خارجی">
                                        <a href="https://www.farsnews.ir/widgets/global-cars/" target="_blank"></a>
                                    </li>

                                    <li data-toggle="tooltip" title="" class="camera"
                                        data-original-title="دوربین عکاسی">
                                        <a href="https://www.farsnews.ir/widgets/camera/" target="_blank"></a>
                                    </li>
                                    <li data-toggle="tooltip" title="" class="console" data-original-title="کنسول بازی">
                                        <a href="https://www.farsnews.ir/widgets/console/" target="_blank"></a>
                                    </li>
                                    <li data-toggle="tooltip" title="" class="construction"
                                        data-original-title="مصالح ساختمانی">
                                        <a href="https://www.farsnews.ir/widgets/construction/" target="_blank"></a>
                                    </li>
                                    <li data-toggle="tooltip" title="" class="laptop" data-original-title="لپ تاپ">
                                        <a href="https://www.farsnews.ir/widgets/laptop/" target="_blank"></a>
                                    </li>
                                </ul>

                                <ul class="d-flex flex-wrap w-100 justify-content-around my-2">
                                    <li class="exc"></li>

                                    <li data-toggle="tooltip" title="" class="metal-iron"
                                        data-original-title="آهن آلات">
                                        <a href="https://www.farsnews.ir/widgets/metal-iron/" target="_blank"></a>
                                    </li>
                                    <li data-toggle="tooltip" title="" class="global-products"
                                        data-original-title="کالاهای عمومی">
                                        <a href="https://www.farsnews.ir/widgets/global-products/" target="_blank"></a>
                                    </li>

                                    <li data-toggle="tooltip" title="" class="tablet" data-original-title="تبلت">
                                        <a href="https://www.farsnews.ir/widgets/tablet/" target="_blank"></a>
                                    </li>
                                    <li data-toggle="tooltip" title="" class="tv" data-original-title="تلویزیون">
                                        <a href="https://www.farsnews.ir/widgets/tv/" target="_blank"></a>
                                    </li>
                                    <li class="exc"></li>

                                </ul>

                            </div>
                        </div>








                    </section>



                    <aside class="ad-mobile-none">


                        <!-- ################################## Ads ###################  -->

                        <a href="http://www.farsnews.com/ads" target="_blank" rel="nofollow">
                            <img class="w-100 mb-1" src="./assets/13970527000465_Test.jpg" data-id="13970527000395"
                                alt="سازمان آگهی">
                        </a>
                        <div id="carousel_adsss" dir="ltr"
                            class="w-100 h-100 slick-initialized slick-slider slick-vertical">
                            @if(count($sidebar_top)>0)
                            @foreach($sidebar_top->take(5) as $item)
                            <section class="my-1">
                                <a href="{{$item->url}}" target="_blank">
                                    <img src="{{asset($item->image)}}" class="w-100" alt="">
                                </a>
                            </section>
                            @endforeach
                            @endif

                        </div>




                    </aside>
                </div>







            </div>
        </div>
</div>
</main>
</div>


<div class="container mt-3 main-contain">
    <div class="row">
        <section class="d-none d-md-flex flex-wrap float-right middle-news w-100">
            <div class="section-title d-flex mb-1 justify-content-between align-items-center col-12 padding-normal">
                <h2 class="title">سایر اخبار مهم</h2>
                <span class="arrow px-1">
                    <span class="oi oi-chevron-bottom"></span>
                </span>
            </div>

            <div class="d-flex flex-wrap w-100" itemscope="" itemtype="http://schema.org/CreativeWork">

                @if(count($general)>0)
                @foreach($general as $key=>$item)
                @if($key == 0)
                <div class="top-news  col-6 float-right my-2 d-flex padding-normal">
                    <div class="position-relative w-100">
                        <a class="w-100" href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="url">
                            <figure> <img class="w-100 lazyimage" src="{{asset($item->cover)}}" alt="{{$item->title}}"
                                    itemprop="image"></figure>
                        </a>
                        <h3 class="title">
                            <div class="caption position-absolute text-right p-3 w-100">
                                <a class="w-100" href="{{url('article')}}/{{$item->slug}}" target="_blank"
                                    itemprop="name">
                                    {{$item->title}}
                                </a>

                            </div>
                        </h3>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($general as $key=>$item)
                @if($key > 0 && $key < 9) <div class="news-list col-3 float-right my-2 d-flex padding-normal">
                    <div class="w-100 d-flex flex-column">
                        <a class="img-box w-100 position-relative " href="{{url('article')}}/{{$item->slug}}"
                            target="_blank" itemprop="url">
                            <figure> <img class="w-100 lazyimage" src="{{asset($item->cover)}}"
                                    alt="رئیس‌جمهور: ثمره 40 سال ایستادگی، بصیرت روزافزون ملت ایران در برابر هجمه دشمنان است"
                                    itemprop="image"></figure>

                        </a>
                        <a class="category w-100 padding-normal" href="#" target="_blank">
                            <span class="headline">
                                <!-- سیاسی -->
                            </span>
                        </a>

                        <div class="p-3 body h-100 d-flex flex-column justify-content-between">
                            <div class="text-justify d-flex flex-column">

                                <h3 class="title" itemprop="name">
                                    <a class="w-100" href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                        {{Str::limit($item->title,60)}}
                                    </a>
                                </h3>
                            </div>

                            <div class="rel-news d-flex align-items-start w-100 mt-2">

                                <span class="diamond position-relative ml-3 mt-square">
                                    <span class="oi oi-caret-top position-absolute">
                                    </span>
                                    <span class="oi oi-caret-bottom position-absolute">
                                    </span>
                                </span>
                                <h4 class=" text-right"> <a class=" text-right"
                                        href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                        {{Str::limit($item->meta,30)}}
                                        </a></h4>

                            </div>
                        </div>
                    </div>
            </div>
            @endif
            @endforeach

            @foreach($general as $key=>$item)
            @if($key == 9)
            <div class="top-news  col-6 float-right my-2 d-flex padding-normal">
                <div class="position-relative w-100">
                    <a class="w-100" href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="url">
                        <figure> <img class="w-100 lazyimage" src="{{asset($item->cover)}}" alt="{{$item->title}}"
                                itemprop="image"></figure>
                    </a>
                    <h3 class="title">
                        <div class="caption position-absolute text-right p-3 w-100">
                            <a class="w-100" href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="name">
                                {{$item->title}}
                            </a>

                        </div>
                    </h3>
                </div>
            </div>
            @endif
            @endforeach

            @foreach($general as $key=>$item)
            @if($key > 9 && $key < 14) <div class="news-list col-3 float-right my-2 d-flex padding-normal">
                <div class="w-100 d-flex flex-column">
                    <a class="img-box w-100 position-relative " href="{{url('article')}}/{{$item->slug}}"
                        target="_blank" itemprop="url">
                        <figure> <img class="w-100 lazyimage" src="{{asset($item->cover)}}"
                                alt="رئیس‌جمهور: ثمره 40 سال ایستادگی، بصیرت روزافزون ملت ایران در برابر هجمه دشمنان است"
                                itemprop="image"></figure>

                    </a>
                    <a class="category w-100 padding-normal" href="#" target="_blank">
                        <span class="headline">
                            سیاسی
                        </span>
                    </a>

                    <div class="p-3 body h-100 d-flex flex-column justify-content-between">
                        <div class="text-justify d-flex flex-column">

                            <h3 class="title" itemprop="name">
                                <a class="w-100" href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    {{$item->title}}
                                </a>
                            </h3>
                        </div>

                        <div class="rel-news d-flex align-items-start w-100 mt-2">

                            <span class="diamond position-relative ml-3 mt-square">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>
                            <h4 class=" text-right"> <a class=" text-right" href="{{url('article')}}/{{$item->slug}}"
                                    target="_blank"> جایزه رسول چرا جایگزین آوینی شد؟ </a></h4>

                        </div>
                    </div>
                </div>
    </div>
    @endif
    @endforeach
</div>
@endif
</section>
</div>
</div>

<!-- ######################################### videos ###################################### -->
<div class="videos mt-2 pb-3">
    <div class="container">
        <div class="row">
            <div class="section-title d-flex m-2 mb-0 justify-content-between align-items-center w-100">
                <a href="https://www.farsnews.ir/multimedia">
                    <h2 class="title">فیلم و صوت</h2>
                </a>
                <span class="arrow px-1">
                    <span class="oi oi-chevron-bottom"></span>
                </span>
            </div>
            <div class="d-flex flex-wrap w-100" itemscope="" itemtype="http://schema.org/CreativeWork">

                @if($videos)
                @foreach($videos as $key=>$item)
                @if($key == 0)
                    <div class="item col-12 col-lg-7 my-2 d-flex flex-column padding-normal">
                        <section class="video-box position-relative d-flex flex-column h-100 w-100">
             <a href="{{route('singlevideo',$item->slug)}}">
                            <div class="player w-100 position-relative h-100 o-hidden">


                                <div class="position-relative w-100 h-100">
                                    <div poster="{{asset($item->image)}}"
                                        preload="auto"
                                        class="video-js w-100 h-100 vjs-paused vjs-controls-enabled vjs-workinghover vjs-v7 vjs-user-active my-video-dimensions"
                                        id="my-video" tabindex="-1" lang="en-us" role="region" aria-label="Video Player">
                                        <video id="my-video_html5_api" class="vjs-tech" preload="auto"
                                            poster="{{asset($item->video)}}"
                                            tabindex="-1">
                                            <source src="{{asset($item->video)}}">
                                        </video>
                                        <div class="vjs-poster" tabindex="-1" aria-disabled="false"
                                            >
                                        </div>
                                        <div class="vjs-text-track-display" aria-live="off" aria-atomic="true">
                                            <div
                                                style="position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; margin: 1.5%;">
                                            </div>
                                        </div>
                                        <div class="vjs-loading-spinner" dir="ltr"><span class="vjs-control-text">Video
                                                Player is loading.</span></div><button class="vjs-big-play-button"
                                            type="button" title="Play Video" aria-disabled="false"><span aria-hidden="true"
                                                class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                aria-live="polite">Play Video</span></button>
                                        <div class="vjs-control-bar" dir="ltr"><button
                                                class="vjs-play-control vjs-control vjs-button" type="button" title="Play"
                                                aria-disabled="false"><span aria-hidden="true"
                                                    class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                    aria-live="polite">Play</span></button>
                                            <div class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal">
                                                <button class="vjs-mute-control vjs-control vjs-button vjs-vol-3"
                                                    type="button" title="Mute" aria-disabled="false"><span
                                                        aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                                        class="vjs-control-text" aria-live="polite">Mute</span></button>
                                                <div class="vjs-volume-control vjs-control vjs-volume-horizontal">
                                                    <div tabindex="0"
                                                        class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal"
                                                        role="slider" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100" aria-label="Volume Level" aria-live="polite"
                                                        aria-valuetext="100%">
                                                        <div class="vjs-volume-level"><span class="vjs-control-text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vjs-current-time vjs-time-control vjs-control"><span
                                                    class="vjs-control-text">Current Time&nbsp;</span><span
                                                    class="vjs-current-time-display" aria-live="off">0:00</span></div>
                                            <div class="vjs-time-control vjs-time-divider">
                                                <div><span>/</span></div>
                                            </div>
                                            <div class="vjs-duration vjs-time-control vjs-control"><span
                                                    class="vjs-control-text">Duration&nbsp;</span><span
                                                    class="vjs-duration-display" aria-live="off">10:52</span></div>
                                            <div class="vjs-progress-control vjs-control">
                                                <div tabindex="0"
                                                    class="vjs-progress-holder vjs-slider vjs-slider-horizontal"
                                                    role="slider" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                    aria-label="Progress Bar">
                                                    <div class="vjs-load-progress" style="width: 0%;"><span
                                                            class="vjs-control-text"><span>Loaded</span>: 0%</span>
                                                        <div style="left: 0%; width: 2.18808%;"></div>
                                                        <div style="left: 98.556%; width: 1.44399%;"></div>
                                                    </div>
                                                    <div class="vjs-mouse-display">
                                                        <div class="vjs-time-tooltip"></div>
                                                    </div>
                                                    <div class="vjs-play-progress vjs-slider-bar">
                                                        <div class="vjs-time-tooltip"></div><span
                                                            class="vjs-control-text"><span>Progress</span>: 0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vjs-live-control vjs-control vjs-hidden">
                                                <div class="vjs-live-display" aria-live="off"><span
                                                        class="vjs-control-text">Stream Type&nbsp;</span>LIVE</div>
                                            </div>
                                            <div class="vjs-remaining-time vjs-time-control vjs-control"><span
                                                    class="vjs-control-text">Remaining Time&nbsp;</span><span
                                                    class="vjs-remaining-time-display" aria-live="off">-10:52</span>
                                            </div>
                                            <div class="vjs-custom-control-spacer vjs-spacer ">&nbsp;</div>
                                            <div
                                                class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                                                <button
                                                    class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button"
                                                    type="button" aria-disabled="false" title="Playback Rate"
                                                    aria-haspopup="true" aria-expanded="false"><span aria-hidden="true"
                                                        class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                        aria-live="polite">Playback
                                                        Rate</span></button>
                                                <div class="vjs-menu">
                                                    <ul class="vjs-menu-content" role="menu"></ul>
                                                </div>
                                                <div class="vjs-playback-rate-value">1x</div>
                                            </div>
                                            <div
                                                class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                                                <button
                                                    class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                                    type="button" aria-disabled="false" title="Chapters"
                                                    aria-haspopup="true" aria-expanded="false"><span aria-hidden="true"
                                                        class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                        aria-live="polite">Chapters</span></button>
                                                <div class="vjs-menu">
                                                    <ul class="vjs-menu-content" role="menu">
                                                        <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                                                <button
                                                    class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                                    type="button" aria-disabled="false" title="Descriptions"
                                                    aria-haspopup="true" aria-expanded="false"><span aria-hidden="true"
                                                        class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                        aria-live="polite">Descriptions</span></button>
                                                <div class="vjs-menu">
                                                    <ul class="vjs-menu-content" role="menu">
                                                        <li class="vjs-menu-item vjs-selected" tabindex="-1"
                                                            role="menuitemradio" aria-disabled="false" aria-checked="true">
                                                            <span class="vjs-menu-item-text">descriptions off</span><span
                                                                class="vjs-control-text" aria-live="polite">,
                                                                selected</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                                                <button
                                                    class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                                    type="button" aria-disabled="false" title="Captions"
                                                    aria-haspopup="true" aria-expanded="false"><span aria-hidden="true"
                                                        class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                        aria-live="polite">Captions</span></button>
                                                <div class="vjs-menu">
                                                    <ul class="vjs-menu-content" role="menu">
                                                        <li class="vjs-menu-item vjs-texttrack-settings" tabindex="-1"
                                                            role="menuitem" aria-disabled="false"><span
                                                                class="vjs-menu-item-text">captions settings</span><span
                                                                class="vjs-control-text" aria-live="polite">, opens
                                                                captions settings dialog</span></li>
                                                        <li class="vjs-menu-item vjs-selected" tabindex="-1"
                                                            role="menuitemradio" aria-disabled="false" aria-checked="true">
                                                            <span class="vjs-menu-item-text">captions off</span><span
                                                                class="vjs-control-text" aria-live="polite">,
                                                                selected</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                                                <button
                                                    class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button"
                                                    type="button" aria-disabled="false" title="Audio Track"
                                                    aria-haspopup="true" aria-expanded="false"><span aria-hidden="true"
                                                        class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                        aria-live="polite">Audio
                                                        Track</span></button>
                                                <div class="vjs-menu">
                                                    <ul class="vjs-menu-content" role="menu"></ul>
                                                </div>
                                            </div><button class="vjs-fullscreen-control vjs-control vjs-button"
                                                type="button" title="Fullscreen" aria-disabled="false"><span
                                                    aria-hidden="true" class="vjs-icon-placeholder"></span><span
                                                    class="vjs-control-text" aria-live="polite">Fullscreen</span></button>
                                        </div>
                                        <div class="vjs-error-display vjs-modal-dialog vjs-hidden " tabindex="-1"
                                            aria-describedby="my-video_component_358_description" aria-hidden="true"
                                            aria-label="Modal Window" role="dialog">
                                            <p class="vjs-modal-dialog-description vjs-control-text"
                                                id="my-video_component_358_description">This is a modal window.</p>
                                            <div class="vjs-modal-dialog-content" role="document"></div>
                                        </div>
                                        <div class="vjs-modal-dialog vjs-hidden  vjs-text-track-settings" tabindex="-1"
                                            aria-describedby="my-video_component_364_description" aria-hidden="true"
                                            aria-label="Caption Settings Dialog" role="dialog">
                                            <p class="vjs-modal-dialog-description vjs-control-text"
                                                id="my-video_component_364_description">Beginning of dialog window.
                                                Escape will cancel and close the window.</p>
                                            <div class="vjs-modal-dialog-content" role="document">
                                                <div class="vjs-track-settings-colors">
                                                    <fieldset class="vjs-fg-color vjs-track-setting">
                                                        <legend id="captions-text-legend-my-video_component_364">Text
                                                        </legend><label
                                                            id="captions-foreground-color-my-video_component_364"
                                                            class="vjs-label">Color</label><select
                                                            aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364">
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-White"
                                                                value="#FFF"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-White">
                                                                White</option>
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-Black"
                                                                value="#000"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-Black">
                                                                Black</option>
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-Red"
                                                                value="#F00"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-Red">
                                                                Red</option>
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-Green"
                                                                value="#0F0"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-Green">
                                                                Green</option>
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-Blue"
                                                                value="#00F"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-Blue">
                                                                Blue</option>
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-Yellow"
                                                                value="#FF0"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-Yellow">
                                                                Yellow</option>
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-Magenta"
                                                                value="#F0F"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-Magenta">
                                                                Magenta</option>
                                                            <option
                                                                id="captions-foreground-color-my-video_component_364-Cyan"
                                                                value="#0FF"
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-color-my-video_component_364 captions-foreground-color-my-video_component_364-Cyan">
                                                                Cyan</option>
                                                        </select><span class="vjs-text-opacity vjs-opacity"><label
                                                                id="captions-foreground-opacity-my-video_component_364"
                                                                class="vjs-label">Transparency</label><select
                                                                aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-opacity-my-video_component_364">
                                                                <option
                                                                    id="captions-foreground-opacity-my-video_component_364-Opaque"
                                                                    value="1"
                                                                    aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-opacity-my-video_component_364 captions-foreground-opacity-my-video_component_364-Opaque">
                                                                    Opaque</option>
                                                                <option
                                                                    id="captions-foreground-opacity-my-video_component_364-SemiTransparent"
                                                                    value="0.5"
                                                                    aria-labelledby="captions-text-legend-my-video_component_364 captions-foreground-opacity-my-video_component_364 captions-foreground-opacity-my-video_component_364-SemiTransparent">
                                                                    Semi-Transparent</option>
                                                            </select></span>
                                                    </fieldset>
                                                    <fieldset class="vjs-bg-color vjs-track-setting">
                                                        <legend id="captions-background-my-video_component_364">
                                                            Background</legend><label
                                                            id="captions-background-color-my-video_component_364"
                                                            class="vjs-label">Color</label><select
                                                            aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364">
                                                            <option
                                                                id="captions-background-color-my-video_component_364-Black"
                                                                value="#000"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-Black">
                                                                Black</option>
                                                            <option
                                                                id="captions-background-color-my-video_component_364-White"
                                                                value="#FFF"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-White">
                                                                White</option>
                                                            <option
                                                                id="captions-background-color-my-video_component_364-Red"
                                                                value="#F00"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-Red">
                                                                Red</option>
                                                            <option
                                                                id="captions-background-color-my-video_component_364-Green"
                                                                value="#0F0"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-Green">
                                                                Green</option>
                                                            <option
                                                                id="captions-background-color-my-video_component_364-Blue"
                                                                value="#00F"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-Blue">
                                                                Blue</option>
                                                            <option
                                                                id="captions-background-color-my-video_component_364-Yellow"
                                                                value="#FF0"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-Yellow">
                                                                Yellow</option>
                                                            <option
                                                                id="captions-background-color-my-video_component_364-Magenta"
                                                                value="#F0F"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-Magenta">
                                                                Magenta</option>
                                                            <option
                                                                id="captions-background-color-my-video_component_364-Cyan"
                                                                value="#0FF"
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-color-my-video_component_364 captions-background-color-my-video_component_364-Cyan">
                                                                Cyan</option>
                                                        </select><span class="vjs-bg-opacity vjs-opacity"><label
                                                                id="captions-background-opacity-my-video_component_364"
                                                                class="vjs-label">Transparency</label><select
                                                                aria-labelledby="captions-background-my-video_component_364 captions-background-opacity-my-video_component_364">
                                                                <option
                                                                    id="captions-background-opacity-my-video_component_364-Opaque"
                                                                    value="1"
                                                                    aria-labelledby="captions-background-my-video_component_364 captions-background-opacity-my-video_component_364 captions-background-opacity-my-video_component_364-Opaque">
                                                                    Opaque</option>
                                                                <option
                                                                    id="captions-background-opacity-my-video_component_364-SemiTransparent"
                                                                    value="0.5"
                                                                    aria-labelledby="captions-background-my-video_component_364 captions-background-opacity-my-video_component_364 captions-background-opacity-my-video_component_364-SemiTransparent">
                                                                    Semi-Transparent</option>
                                                                <option
                                                                    id="captions-background-opacity-my-video_component_364-Transparent"
                                                                    value="0"
                                                                    aria-labelledby="captions-background-my-video_component_364 captions-background-opacity-my-video_component_364 captions-background-opacity-my-video_component_364-Transparent">
                                                                    Transparent</option>
                                                            </select></span>
                                                    </fieldset>
                                                    <fieldset class="vjs-window-color vjs-track-setting">
                                                        <legend id="captions-window-my-video_component_364">Window
                                                        </legend><label id="captions-window-color-my-video_component_364"
                                                            class="vjs-label">Color</label><select
                                                            aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364">
                                                            <option id="captions-window-color-my-video_component_364-Black"
                                                                value="#000"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-Black">
                                                                Black</option>
                                                            <option id="captions-window-color-my-video_component_364-White"
                                                                value="#FFF"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-White">
                                                                White</option>
                                                            <option id="captions-window-color-my-video_component_364-Red"
                                                                value="#F00"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-Red">
                                                                Red</option>
                                                            <option id="captions-window-color-my-video_component_364-Green"
                                                                value="#0F0"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-Green">
                                                                Green</option>
                                                            <option id="captions-window-color-my-video_component_364-Blue"
                                                                value="#00F"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-Blue">
                                                                Blue</option>
                                                            <option id="captions-window-color-my-video_component_364-Yellow"
                                                                value="#FF0"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-Yellow">
                                                                Yellow</option>
                                                            <option
                                                                id="captions-window-color-my-video_component_364-Magenta"
                                                                value="#F0F"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-Magenta">
                                                                Magenta</option>
                                                            <option id="captions-window-color-my-video_component_364-Cyan"
                                                                value="#0FF"
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-color-my-video_component_364 captions-window-color-my-video_component_364-Cyan">
                                                                Cyan</option>
                                                        </select><span class="vjs-window-opacity vjs-opacity"><label
                                                                id="captions-window-opacity-my-video_component_364"
                                                                class="vjs-label">Transparency</label><select
                                                                aria-labelledby="captions-window-my-video_component_364 captions-window-opacity-my-video_component_364">
                                                                <option
                                                                    id="captions-window-opacity-my-video_component_364-Transparent"
                                                                    value="0"
                                                                    aria-labelledby="captions-window-my-video_component_364 captions-window-opacity-my-video_component_364 captions-window-opacity-my-video_component_364-Transparent">
                                                                    Transparent</option>
                                                                <option
                                                                    id="captions-window-opacity-my-video_component_364-SemiTransparent"
                                                                    value="0.5"
                                                                    aria-labelledby="captions-window-my-video_component_364 captions-window-opacity-my-video_component_364 captions-window-opacity-my-video_component_364-SemiTransparent">
                                                                    Semi-Transparent</option>
                                                                <option
                                                                    id="captions-window-opacity-my-video_component_364-Opaque"
                                                                    value="1"
                                                                    aria-labelledby="captions-window-my-video_component_364 captions-window-opacity-my-video_component_364 captions-window-opacity-my-video_component_364-Opaque">
                                                                    Opaque</option>
                                                            </select></span>
                                                    </fieldset>
                                                </div>
                                                <div class="vjs-track-settings-font">
                                                    <fieldset class="vjs-font-percent vjs-track-setting">
                                                        <legend id="captions-font-size-my-video_component_364" class="">
                                                            Font Size</legend><select
                                                            aria-labelledby="captions-font-size-my-video_component_364">
                                                            <option id="captions-font-size-my-video_component_364-50"
                                                                value="0.50"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-50">
                                                                50%</option>
                                                            <option id="captions-font-size-my-video_component_364-75"
                                                                value="0.75"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-75">
                                                                75%</option>
                                                            <option id="captions-font-size-my-video_component_364-100"
                                                                value="1.00"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-100">
                                                                100%</option>
                                                            <option id="captions-font-size-my-video_component_364-125"
                                                                value="1.25"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-125">
                                                                125%</option>
                                                            <option id="captions-font-size-my-video_component_364-150"
                                                                value="1.50"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-150">
                                                                150%</option>
                                                            <option id="captions-font-size-my-video_component_364-175"
                                                                value="1.75"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-175">
                                                                175%</option>
                                                            <option id="captions-font-size-my-video_component_364-200"
                                                                value="2.00"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-200">
                                                                200%</option>
                                                            <option id="captions-font-size-my-video_component_364-300"
                                                                value="3.00"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-300">
                                                                300%</option>
                                                            <option id="captions-font-size-my-video_component_364-400"
                                                                value="4.00"
                                                                aria-labelledby="captions-font-size-my-video_component_364 captions-font-size-my-video_component_364-400">
                                                                400%</option>
                                                        </select>
                                                    </fieldset>
                                                    <fieldset class="vjs-edge-style vjs-track-setting">
                                                        <legend id="my-video_component_364" class="">Text Edge Style
                                                        </legend><select aria-labelledby="my-video_component_364">
                                                            <option id="my-video_component_364-None" value="none"
                                                                aria-labelledby="my-video_component_364 my-video_component_364-None">
                                                                None</option>
                                                            <option id="my-video_component_364-Raised" value="raised"
                                                                aria-labelledby="my-video_component_364 my-video_component_364-Raised">
                                                                Raised</option>
                                                            <option id="my-video_component_364-Depressed" value="depressed"
                                                                aria-labelledby="my-video_component_364 my-video_component_364-Depressed">
                                                                Depressed</option>
                                                            <option id="my-video_component_364-Uniform" value="uniform"
                                                                aria-labelledby="my-video_component_364 my-video_component_364-Uniform">
                                                                Uniform</option>
                                                            <option id="my-video_component_364-Dropshadow"
                                                                value="dropshadow"
                                                                aria-labelledby="my-video_component_364 my-video_component_364-Dropshadow">
                                                                Dropshadow</option>
                                                        </select>
                                                    </fieldset>
                                                    <fieldset class="vjs-font-family vjs-track-setting">
                                                        <legend id="captions-font-family-my-video_component_364" class="">
                                                            Font Family</legend><select
                                                            aria-labelledby="captions-font-family-my-video_component_364">
                                                            <option
                                                                id="captions-font-family-my-video_component_364-ProportionalSansSerif"
                                                                value="proportionalSansSerif"
                                                                aria-labelledby="captions-font-family-my-video_component_364 captions-font-family-my-video_component_364-ProportionalSansSerif">
                                                                Proportional Sans-Serif</option>
                                                            <option
                                                                id="captions-font-family-my-video_component_364-MonospaceSansSerif"
                                                                value="monospaceSansSerif"
                                                                aria-labelledby="captions-font-family-my-video_component_364 captions-font-family-my-video_component_364-MonospaceSansSerif">
                                                                Monospace Sans-Serif</option>
                                                            <option
                                                                id="captions-font-family-my-video_component_364-ProportionalSerif"
                                                                value="proportionalSerif"
                                                                aria-labelledby="captions-font-family-my-video_component_364 captions-font-family-my-video_component_364-ProportionalSerif">
                                                                Proportional Serif</option>
                                                            <option
                                                                id="captions-font-family-my-video_component_364-MonospaceSerif"
                                                                value="monospaceSerif"
                                                                aria-labelledby="captions-font-family-my-video_component_364 captions-font-family-my-video_component_364-MonospaceSerif">
                                                                Monospace Serif</option>
                                                            <option id="captions-font-family-my-video_component_364-Casual"
                                                                value="casual"
                                                                aria-labelledby="captions-font-family-my-video_component_364 captions-font-family-my-video_component_364-Casual">
                                                                Casual</option>
                                                            <option id="captions-font-family-my-video_component_364-Script"
                                                                value="script"
                                                                aria-labelledby="captions-font-family-my-video_component_364 captions-font-family-my-video_component_364-Script">
                                                                Script</option>
                                                            <option
                                                                id="captions-font-family-my-video_component_364-SmallCaps"
                                                                value="small-caps"
                                                                aria-labelledby="captions-font-family-my-video_component_364 captions-font-family-my-video_component_364-SmallCaps">
                                                                Small Caps</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                                <div class="vjs-track-settings-controls"><button type="button"
                                                        class="vjs-default-button"
                                                        title="restore all settings to the default values">Reset<span
                                                            class="vjs-control-text"> restore all settings to the
                                                            default values</span></button><button type="button"
                                                        class="vjs-done-button">Done</button></div>
                                            </div><button class="vjs-close-button vjs-control vjs-button" type="button"
                                                aria-disabled="false" title="Close Modal Dialog"><span aria-hidden="true"
                                                    class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                    aria-live="polite">Close Modal
                                                    Dialog</span></button>
                                            <p class="vjs-control-text">End of dialog window.</p>
                                        </div>
                                    </div>
                                    <span class="end px-2 py-1 d-none">
                                        رد شدن از آگهی
                                        <span class="count">(۵)</span>
                                        <span class="oi oi-media-step-forward d-none"></span>
                                    </span>

                                    <span class="more px-2 py-1 d-none">
                                        <a href="https://www.farsnews.ir/" target="_blank">
                                            اطلاعات بیشتر
                                        </a>
                                    </span>


                                </div>

                                <div class="video-intro position-absolute w-100 h-100 d-none">
                                    <video class="video-js h-100 w-100" muted="muted" loop="loop"
                                        src="{{asset($item->video)}}"></video>
                                </div>

                                <div class="caption2 position-absolute w-100 d-flex align-items-end justify-content-end TopvideoCaption">
                                    <span class="oi oi-media-play mb-2 px-2 mr-2"></span>
                                    <div
                                        class="title d-none d-lg-inline-flex flex-column text-justify p-3 w-100 position-absolute">

                                        <h3>
                                            <a href="{{route('singlevideo',$item->slug)}}"
                                                target="_blank">
                                               {{Str::limit($item->title,60)}}
                                            </a>
                                        </h3>


                                    </div>

                                </div>
                            </div>
                        </section>
                        <div class="video-title d-flex flex-column d-lg-none text-justify py-3 pb-0 w-100">

                            <h3 class="title">
                                <a href="https://www.farsnews.ir/media/13990631000005/%D9%85%D8%A7%D8%AC%D8%B1%D8%A7%DB%8C-%D9%85%D8%B3%D8%AA%D9%86%D8%AF-%DA%A9%D9%88%D8%AF%D8%AA%D8%A7%DB%8C-%D8%AE%D8%B2%D9%86%D8%AF%D9%87-%D8%A8%DB%8C%E2%80%8C%D8%A8%DB%8C%E2%80%8C%D8%B3%DB%8C%E2%80%8C-%D9%81%D8%A7%D8%B1%D8%B3%DB%8C"
                                    target="_blank">
                                    ماجرای مستند "کودتای خزنده" بی‌بی‌سی‌ فارسی
                                </a>
                            </h3>

                        </div>
                    </div>
               </a>     
                @endif
                @endforeach
                @endif

                <div class="news-list col-12 col-lg-5 my-2 d-flex flex-wrap padding-normal">
                @if($videos)
                @foreach($videos as $key=>$item)
                @if($key > 0 && $key < 3)
                    <div class="item col-12 col-sm-6 padding-normal  mb-3">
                        <div class="d-flex flex-row flex-sm-column w-100 align-items-center">
                            <div class="col-6 col-sm-12 px-0 position-relative IE-video">
                                <a class="d-flex o-hidden"
                                    href="{{route('singlevideo',$item->slug)}}"
                                    target="_blank" itemprop="url">
                                    <figure> <img class="video-poster w-100  lazyimage"
                                            src="{{asset($item->image)}}"
                                          
                                            itemprop="image" style="height: 135px;">
                                        </figure>
                                    <div
                                        class="caption2  position-absolute w-100 d-flex align-items-end justify-content-end">
                                        <span class="oi oi-media-play py-1 px-2 mr-2"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="w-100 px-3 px-sm-0 pt-2 text-justify d-flex flex-column">

                                <h3 itemprop="title">
                                    <a class="title"
                                        href="{{route('singlevideo',$item->slug)}}"
                                        target="_blank">
                                        {{Str::limit($item->title,40)}}
                                    </a>
                                </h3>


                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
                @endif

                @if($videos)
                @foreach($videos as $key=>$item)
                @if($key > 2 && $key < 5)
                    <div class="item col-12 col-sm-6 padding-normal d-none d-lg-block ">
                        <div class="d-flex flex-row flex-sm-column w-100 align-items-center">
                            <div class="col-6 col-sm-12 px-0 position-relative IE-video">
                                <a class="d-flex o-hidden"
                                    href="{{route('singlevideo',$item->slug)}}"
                                    target="_blank" itemprop="url">
                                    <figure> <img class="video-poster w-100 lazyimage"
                                            src="{{asset($item->image)}}"
                                            data-src="{{asset($item->image)}}" style="height: 135px;"
                                            alt="" itemprop="image"></figure>
                                    <div
                                        class="video-intro position-absolute w-100 h-100 d-none align-items-center o-hidden">
                                        <video class="video-js w-100" muted="muted" loop="loop"
                                            src="{{route('singlevideo',$item->slug)}}"></video>
                                    </div>
                                    <div
                                        class="caption2  position-absolute w-100 d-flex align-items-end justify-content-end">
                                        <span class="oi oi-media-play py-1 px-2 mr-2"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="w-100 px-3 px-sm-0 pt-2 text-justify d-flex flex-column">

                                <h3 itemprop="title">
                                    <a class="title"
                                        href="{{route('singlevideo',$item->slug)}}"
                                        target="_blank">
                                        {{Str::limit($item->title,40)}}
                                    </a>
                                </h3>


                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
                @endif    


                </div>

            </div>



        </div>
    </div>

</div>



<div class="container">
    <section class="top-services mt-3">

        <div class="row">
            <div class="services col-12 col-sm-6 col-md-4 float-right d-flex flex-column mb-3 padding-normal"
                itemscope="" itemtype="http://schema.org/CreativeWork">
            <!-- ############################################## استانها ############################################## -->
                <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                    <a href="{{url('category')}}/{{$provinces->slug}}">
                        <h2 class="title">استانها</h2>
                    </a>
                    <span class="arrow px-1">
                        <span class="oi oi-chevron-bottom"></span>
                    </span>
                </div>

                <div class="content h-100">
                    @if(count($provinces->posts) > 0)
                    @foreach($provinces->posts()->orderby('id','DESC')->get() as $key=>$item)
                    @if($key == 0)
                    <div class="text-justify border-bottom">
                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                            <figure> <img class="w-100 lazyimage"
                                    src="{{asset($item->cover)}}"
                                    alt="{{$item->title}}" itemprop="image"></figure>
                        </a>
                        <div class="d-flex align-items-center">
                            <h3 class="top px-3 py-2" itemprop="name"><a
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    {{Str::limit($item->title,40)}}
                                </a>
                            </h3>
                        </div>

                    </div>
                    @endif
                    @endforeach
                    @endif
                    <ul class="list-unstyled m-0 p-0">
                    @if(count($provinces->posts) > 0)
                    @foreach($provinces->posts()->orderby('id','DESC')->get() as $key=>$item)
                    @if($key > 0 && $key< 4) 
                        <li class="d-flex px-3 py-2 border-bottom align-items-center">

                            <span class="diamond position-relative ml-3 mt-0">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>

                            <h3 itemprop="name"> <a class="text-justify d-flex"
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank" itemprop="url">
                                    {{Str::limit($item->title,60)}}
                                 </a></h3>

                        </li>
                    @endif
                    @endforeach
                    @endif   
                    </ul>
                </div>


            </div>
            <div class="services col-12 col-sm-6 col-md-4 float-right d-flex flex-column mb-3 padding-normal"
                itemscope="" itemtype="http://schema.org/CreativeWork">

                <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                    <a href="{{url('category')}}/{{$sports->slug}}">
                        <h2 class="title">ورزشی</h2>
                    </a>
                    <span class="arrow px-1">
                        <span class="oi oi-chevron-bottom"></span>
                    </span>
                </div>

                <div class="content h-100">
                @if(count($sports->posts)> 0)
                @foreach($sports->posts()->orderby('id','DESC')->get() as $key=>$item)
                @if($key == 0)
                    <div class="text-justify border-bottom">
                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                            <figure> <img class="w-100 lazyimage"
                                    src="{{asset($item->cover)}}"
                                    alt="{{$item->title}}" itemprop="image" ></figure>
                        </a>
                        <div class="d-flex align-items-center">
                            <h3 class="top px-3 py-2" itemprop="name"><a
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    {{Str::limit($item->title,40)}}
                                </a>
                            </h3>
                        </div>

                    </div>
                @endif
                @endforeach
                @endif
                    <ul class="list-unstyled m-0 p-0">
                @if(count($sports->posts)>0)
                @foreach($sports->posts()->orderby('id','DESC')->get() as $key=>$item)
                @if($key > 0 && $key< 4) 
                        <li class="d-flex px-3 py-2 border-bottom align-items-center">

                            <span class="diamond position-relative ml-3 mt-0">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>

                            <h3 itemprop="name"> <a class="text-justify d-flex"
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank"
                                    itemprop="url">   {{Str::limit($item->title,60)}} </a></h3>

                        </li>
                @endif
                @endforeach
                @endif      
                    </ul>
                </div>


            </div>
            <div class="services col-12 col-sm-6 col-md-4 float-right d-flex flex-column mb-3 padding-normal"
                itemscope="" itemtype="">

                <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                    <a href="{{url('category')}}/{{$international->slug}}">
                        <h2 class="title">بین الملل</h2>
                    </a>
                    <span class="arrow px-1">
                        <span class="oi oi-chevron-bottom"></span>
                    </span>
                </div>

                <div class="content h-100">
                    @if(count($international->posts)>0)
                    @foreach($international->posts()->orderby('id','DESC')->get() as $key=>$item)
                    @if($key == 0)
                    <div class="text-justify border-bottom">
                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                            <figure> <img class="w-100 lazyimage"
                                    src="{{asset($item->cover)}}"
                                     itemprop="image" ></figure>
                        </a>
                        <div class="d-flex align-items-center">
                            <h3 class="top px-3 py-2" itemprop="name"><a
                                    href="{{url('article')}}/{{$item->slug}}"
                                    target="_blank">
                                    {{Str::limit($item->title,40)}}
                                </a>
                            </h3>
                        </div>

                    </div>
                    @endif
                    @endforeach
                    @endif     
                    <ul class="list-unstyled m-0 p-0">
                    @if(count($international->posts)>0)
                    @foreach($international->posts()->orderby('id','DESC')->get() as $key=>$item)
                    @if($key > 0 && $key< 4)
                        <li class="d-flex px-3 py-2 border-bottom align-items-center">

                            <span class="diamond position-relative ml-3 mt-0">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>

                            <h3 itemprop="name"> <a class="text-justify d-flex"
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank"
                                    itemprop="url"> 
                                    {{Str::limit($item->title,60)}}
                                    </a></h3>

                        </li>
                    @endif
                    @endforeach
                    @endif     
                       
                    </ul>
                </div>


            </div>
            <div class="services col-12 col-sm-6 col-md-4 float-right d-flex flex-column mb-3 padding-normal"
                itemscope="" itemtype="http://schema.org/CreativeWork">

                <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                    <a href="{{url('category')}}/{{$international->slug}}">
                        <h2 class="title">فارس من</h2>
                    </a>
                    <span class="arrow px-1">
                        <span class="oi oi-chevron-bottom"></span>
                    </span>
                </div>

                <div class="content h-100">
                @if(count($farsman->posts)>0)
                @foreach($farsman->posts()->orderby('id','DESC')->get() as $key=>$item)
                @if($key == 0)
                    <div class="text-justify border-bottom">
                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                            <figure> <img class="w-100 lazyimage"
                                    src="{{asset($item->cover)}}"
                                    alt="" itemprop="image" ></figure>
                        </a>
                        <div class="d-flex align-items-center">
                            <h3 class="top px-3 py-2" itemprop="name"><a
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    {{Str::limit($item->title,40)}}
                                </a>
                            </h3>
                        </div>

                    </div>
                @endif
                @endforeach
                @endif         
                    <ul class="list-unstyled m-0 p-0">

                @if(count($farsman->posts)>0)
                @foreach($farsman->posts()->orderby('id','DESC')->get() as $key=>$item)
                @if($key > 0 && $key< 4)
                        <li class="d-flex px-3 py-2 border-bottom align-items-center">

                            <span class="diamond position-relative ml-3 mt-0">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>

                            <h3 itemprop="name"> <a class="text-justify d-flex"
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank"
                                    itemprop="url">   {{ Str::limit($item->title,60)}} </a></h3>

                        </li>
                @endif
                @endforeach
                @endif       
                    </ul>
                </div>


            </div>
            <div class="services col-12 col-sm-6 col-md-4 float-right d-flex flex-column mb-3 padding-normal"
                itemscope="" itemtype="http://schema.org/CreativeWork">

                <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                    <a href="{{url('category')}}/{{$goodnews->slug}}">
                        <h2 class="title">خبر خوب</h2>
                    </a>
                    <span class="arrow px-1">
                        <span class="oi oi-chevron-bottom"></span>
                    </span>
                </div>

                <div class="content h-100">
                @if(count($goodnews->posts)>0)
                @foreach($goodnews->posts()->orderby('id','DESC')->get() as $key=>$item)
                @if($key == 0)
                    <div class="text-justify border-bottom">
                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                            <figure> <img class="w-100 lazyimage"
                                    src="{{asset($item->cover)}}"
                                    alt="" itemprop="image" ></figure>
                        </a>
                        <div class="d-flex align-items-center">
                            <h3 class="top px-3 py-2" itemprop="name"><a
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    {{ Str::limit($item->title,40)}}
                                </a>
                            </h3>
                        </div>

                    </div>
                @endif
                @endforeach
                @endif     
                    <ul class="list-unstyled m-0 p-0">
                    @if(count($goodnews->posts)>0)
                    @foreach($goodnews->posts()->orderby('id','DESC')->get() as $key=>$item)
                    @if($key > 0 && $key< 4)
                        <li class="d-flex px-3 py-2 border-bottom align-items-center">

                            <span class="diamond position-relative ml-3 mt-0">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>

                            <h3 itemprop="name"> <a class="text-justify d-flex"
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank"
                                    itemprop="url">  {{ Str::limit($item->title,60)}} </a></h3>

                        </li>
                    @endif
                    @endforeach
                    @endif      
                    </ul>
                </div>


            </div>
            <div class="services col-12 col-sm-6 col-md-4 float-right d-flex flex-column mb-3 padding-normal"
                itemscope="" itemtype="http://schema.org/CreativeWork">

                <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                    <a href="{{url('category')}}/{{$other_provinces->slug}}">
                        <h2 class="title">دیگر رسانه ها</h2>
                    </a>
                    <span class="arrow px-1">
                        <span class="oi oi-chevron-bottom"></span>
                    </span>
                </div>

                <div class="content h-100">
                @if($other_provinces)
                @foreach($other_provinces->posts()->orderby('id','DESC')->get() as $key=>$item)
                @if($key == 0)
                    <div class="text-justify border-bottom">
                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                            <figure> <img class="w-100 lazyimage"
                                    src="{{asset($item->cover)}}"
                                    alt="" itemprop="image" ></figure>
                        </a>
                        <div class="d-flex align-items-center">
                            <h3 class="top px-3 py-2" itemprop="name"><a
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    {{ Str::limit($item->title,40)}}
                                </a>
                            </h3>
                        </div>

                    </div>
                @endif
                @endforeach
                @endif     
                    <ul class="list-unstyled m-0 p-0">
                    @if($other_provinces)
                    @foreach($other_provinces->posts()->orderby('id','DESC')->get() as $key=>$item)
                    @if($key > 0 && $key< 4) 
                        <li class="d-flex px-3 py-2 border-bottom align-items-center">

                            <span class="diamond position-relative ml-3 mt-0">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>

                            <h3 itemprop="name"> <a class="text-justify d-flex"
                                    href="{{url('article')}}/{{$item->slug}}" target="_blank"
                                    itemprop="url"> 
                                    {{ Str::limit($item->title,60)}}
                                     </a></h3>

                        </li>
                    @endif
                    @endforeach
                    @endif      
                    </ul>
                </div>


            </div>
        </div>

    </section>
</div>

<!-- ###################################################################### "گالری تصاویر " ################################################## -->

<div class="photos mb-3 pb-4">
    <section class="container">

        <div class="row" itemscope="" itemtype="http://schema.org/CreativeWork">
            <div class="section-title d-flex m-2 mb-0 justify-content-between align-items-center w-100">
                <a href="/photo">
                    <h2 class="title">عکس</h2>
                </a>
                <span class="arrow px-1">
                    <span class="oi oi-chevron-bottom"></span>
                </span>
            </div>


            @if(count($gallary) > 0)
            @foreach($gallary as $key=>$item)
            @if($key == 0)
            <div class="item col-12 col-md-6 float-right mb-2  padding-normal">
                <div class="position-relative">
                    <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank" itemprop="url">
                        <figure>
                            @foreach($item->images as $key=>$image)
                            @if($key == 0)
                            <img class="w-100 lazyimage" src="{{asset($image->image)}}" alt="{{$item->title}}"
                                itemprop="image">
                            @endif
                            @endforeach
                        </figure>
                    </a>
                    <h3 class="title top" itemprop="name">
                        <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank">
                            <div class="caption position-absolute text-justify p-3 w-100">
                                {{$item->title}}
                            </div>
                        </a>
                    </h3>
                    <span class="oi oi-camera-slr position-absolute"></span>
                </div>
            </div>
            @endif
            @endforeach
            @endif



            @if(count($gallary) > 0)
            @foreach($gallary as $key=>$item)
            @if($key == 1)
            <div class="item col-12 col-md-6 float-right mb-2  padding-normal">
                <div class="position-relative">
                    <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank" itemprop="url">
                        <figure>
                            @foreach($item->images as $key=>$image)
                            @if($key == 0)
                            <img class="w-100 lazyimage" src="{{asset($image->image)}}" alt="{{$item->title}}"
                                itemprop="image">
                            @endif
                            @endforeach
                        </figure>
                    </a>
                    <h3 class="title top" itemprop="name">
                        <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank">
                            <div class="caption position-absolute text-justify p-3 w-100">
                                {{$item->title}}
                            </div>
                        </a>
                    </h3>
                    <span class="oi oi-camera-slr position-absolute"></span>
                </div>
            </div>
            @endif
            @endforeach
            @endif

            @if(count($gallary) > 0)
            @foreach($gallary as $key=>$item)
            @if($key > 1 && $key < 5) <div
                class="item col-6 col-md-4 d-inline-block mt-1 float-right padding-normal other">
                <div class="position-relative">
                    <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank" itemprop="url">
                        <figure>
                            @foreach($item->images as $key=>$image)
                            @if($key == 0)
                            <img class="w-100 lazyimage" src="{{asset($image->image)}}" alt="{{$item->title}}"
                                class="card-img-top" style="width: 100% ; height: 200px; background-size: cover;"
                                itemprop="image">

                            @endif
                            @endforeach
                        </figure>
                    </a>
                    <div class="py-2 w-100 d-flex flex-column text-box">
                        <h3 class="title text-justify d-flex align-items-center">
                            <span class="diamond position-relative ml-3 mt-0">
                                <span class="oi oi-caret-top position-absolute">
                                </span>
                                <span class="oi oi-caret-bottom position-absolute">
                                </span>
                            </span>
                            <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank" itemprop="name">
                                {{$item->title}}
                            </a>
                        </h3>
                        <time class="publish-time text-left" datetime="">{{$item->created_at->diffForHumans()}}</time>
                    </div>
                    <span class="oi oi-camera-slr position-absolute"></span>

                </div>
        </div>
        @endif
        @endforeach
        @endif


</div>

</section>
</div>





<div class="other-sites">
    <div class="container">
        <div class="row mx-1 mx-sm-0">
            <h2 class="section-title d-block text-right mt-3 w-100">سایت های دیگر</h2>
            <section class="news d-flex flex-wrap pb-3 w-100">
                <div class="row my-2 w-100">
                    <article class="col-sm-6 col-md-3 float-right text-right mb-3 mb-md-0 d-flex flex-column">
                        <h2 class="site-name mt-2 mb-1 rtl d-block"><a class="d-block" href="http://ar.farsnews.ir/"
                                target="_blank">العربیة</a></h2>
                        <h3><a class="title d-block mr-2" href="http://ar.farsnews.ir/allnews/news/13990631000332"
                                target="_blank">قائد الثورة: واجهنا الشرق والغرب وليس صدام وحزب البعث فقط في الحرب
                                المفروضة</a></h3>
                    </article>
                    <article class="col-sm-6 col-md-3 float-right text-right mb-3 mb-md-0 d-flex flex-column">
                        <h2 class="site-name mt-2 mb-1 rtl d-block"><a class="d-block" href="http://af.farsnews.ir/"
                                target="_blank">افغانستان</a></h2>
                        <h3><a class="title d-block mr-2" href="http://af.farsnews.ir/allnews/news/13990631001149"
                                target="_blank">غنی: صلح واقعی خشونت‌های میراثی چهل ساله را در افغانستان پایان
                                می‌دهد</a></h3>
                    </article>
                    <article class="col-sm-6 col-md-3 float-right text-left mb-3 mb-md-0">
                        <h2 class="site-name mt-2 mb-1 ltr d-block"><a class="d-block" href="http://en.farsnews.ir/"
                                target="_blank">English</a></h2>
                        <h3><a class="title d-block ml-2" href="http://en.farsnews.ir/newstext.aspx?nn=13990701000169"
                                target="_blank">Sanction-Enlisted AEOI Spokesman Scoffs at US Desperate Moves</a>
                        </h3>
                    </article>
                    <article class="col-sm-6 col-md-3 float-right text-left mb-3 mb-md-0">
                        <h2 class="site-name mt-2 mb-1 ltr d-block"><a class="d-block" href="http://tr.farsnews.ir/"
                                target="_blank">Türkçe</a></h2>
                        <h3><a class="title d-block ml-2" href="http://tr.farsnews.ir/allnews/news/13990631001135"
                                target="_blank">Silah ambargosu bitince, ihracat yolu açılır</a></h3>
                    </article>
                </div>
            </section>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 style="font-size: 13px !important; font-family: irsans; color:#a3a3a3">خبرگزاری فارس | اخبار
                    ایران و جهان | Fars News Agency</h1>
            </div>
        </div>
    </div>

</div>

<div class="links mt-3 d-none d-md-block">
    <div class="container">
        <section class="py-3">
        <div class="news-serv d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-between">

                @foreach($allcategory as $key=>$item)
                @if($key == 0)
                    <div class="service mb-4">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                            @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach    

                @foreach($allcategory as $key=>$item)
                @if($key == 1)
                    <div class="service mb-4">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                            @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach    

                @foreach($allcategory as $key=>$item)
                @if($key == 2)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>  
                            @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                @endif   
                @endforeach 
                </div>

                <div class="d-flex flex-column justify-content-between">
                    
                @foreach($allcategory as $key=>$item)
                @if($key == 3)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                          @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                          
                        </ul>
                    </div>
                @endif   
                @endforeach 

                       
                @foreach($allcategory as $key=>$item)
                @if($key == 4)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                        @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif   
                @endforeach 

            
                @foreach($allcategory as $key=>$item)
                @if($key == 5)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                        @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach 



                </div>

                <div class="d-flex flex-column justify-content-between">
                @foreach($allcategory as $key=>$item)
                @if($key == 6)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                           @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach 

                @foreach($allcategory as $key=>$item)
                @if($key == 7)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                            @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach 

                @foreach($allcategory as $key=>$item)
                @if($key == 8)
                    <div class="service">
                        <span>{{$item->title}}</span>
                        <ul>
                           @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach 

                </div>

                <div class="d-flex flex-column justify-content-between">
                @foreach($allcategory as $key=>$item)
                @if($key == 9)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                            @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                @endif   
                @endforeach 



                </div>

                <div class="d-flex flex-column justify-content-between">
                @foreach($allcategory as $key=>$item)
                @if($key == 10)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                        @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach 
                



                @foreach($allcategory as $key=>$item)
                @if($key == 11)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                        @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach 

                @foreach($allcategory as $key=>$item)
                @if($key == 12)
                    <div class="service">
                        <span><a href="{{url('category')}}/{{$item->slug}}">{{$item->title}}</a></span>
                        <ul>
                        @foreach($item->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif   
                @endforeach 
                </div>
  

            </div>

        </section>
    </div>
</div>

<aside class="adver d-block d-lg-none">




    <div class="d-flex flex-wrap justify-content-between align-items-center">


        <a style="width: 49%" class="" href="http://bit.ly/2MLWlo8" target="_blank">
            <img class="w-100 mb-2" src="./assets/13990623000360_Test.gif" data-id="13980430000669" alt="مدیران خودرو">
        </a>
        <a style="width: 49%" class=""
            href="http://reg.daliranbroker.com/?utm_campaign=onlineregister&amp;utm_medium=referral&amp;utm_source=farsnews.ir"
            target="_blank">
            <img class="w-100 mb-2" src="./assets/13990615000760_Test.gif" data-id="13990615000981"
                alt="بنر دلیران پارس">
        </a>

        <a style="width: 49%" class="" href="http://www.kisheramhotel.com/FA" target="_blank">
            <img class="w-100 mb-2" src="./assets/13990528000892_Test.gif" data-id="13980419000819" alt="هتل ارم کیش">
        </a>
        <a style="width: 49%" class="" href="http://alborzinsurance.ir/Story/DetailStory/537" target="_blank">
            <img class="w-100 mb-2" src="./assets/13990514000840_Test.gif" data-id="13970523000960"
                alt="بیمه البرزجدید">
        </a>
        <a style="width: 49%" class="" href="http://bank-day.ir/index.aspx?siteid=1&amp;pageid=1428" target="_blank">
            <img class="w-100 mb-2" src="./assets/13990401000555_Test.gif" data-id="13980329000983" alt="بنر بانک دی">
        </a>
        <a style="width: 49%" class="" href="http://parsian-bank.ir/" target="_blank">
            <img class="w-100 mb-2" src="./assets/13990519000733_Test.gif" data-id="13971008000732" alt="بانک پارسیان">
        </a>
        <a style="width: 49%" class="" href="http://pasargadfilmfest.ir/" target="_blank">
            <img class="w-100 mb-2" src="./assets/13990623000340_Test.gif" data-id="13970521001024" alt="پاسارگاد جدید">
        </a>
        <a style="width: 49%" class="" href="http://www.iranol.ir/fa/chooseoil.html" target="_blank">
            <img class="w-100 mb-2" src="./assets/13980927000304_Test.gif" data-id="13980402000831" alt="ایرانول">
        </a>
        <a style="width: 49%" class=""
            href="http://www.rightel.ir/first-sim?utm_source=Reportage&amp;utm_medium=banner&amp;utm_content=fars"
            target="_blank">
            <img class="w-100 mb-2" src="./assets/13990610000836_Test.gif" data-id="13980427000124" alt="رایتل">
        </a>
        <a style="width: 49%" class="" href="http://www.shahrvand.ir/" target="_blank">
            <img class="w-100 mb-2" src="./assets/13990202000142_Test.gif" data-id="13971211000099" alt="بنر شهروند">
        </a>
        <a style="width: 49%" class="" href="http://sbank.ir/" target="_blank">
            <img class="w-100 mb-2" src="./assets/13970624000626_Test.gif" data-id="13970521001048"
                alt="بانک سرمایه جدید">
        </a>

    </div>








</aside>

<input id="multimediaUrl" name="multimediaUrl" type="hidden"
    value="https://media.farsnews.ir/Uploaded/Files/Video/1399/06/31/13990631001146_240P.mp4">
<input id="multimediaPoster" name="multimediaPoster" type="hidden"
    value="https://media.farsnews.ir/Uploaded/Files/Images/1399/06/31/13990631001138_Test_PhotoI.png">
<input id="AdsUrl" name="AdsUrl" type="hidden"
    value="https://media.farsnews.ir/Uploaded/Files/Video/1399/06/30/13990630001209_240P.mp4">
<input id="AdsId" name="AdsId" type="hidden" value="4837062">
<input id="AdsCode" name="AdsCode" type="hidden" value="13990630000781">
<input id="AdsClickUrl" name="AdsClickUrl" type="hidden" value="najm.cfss.ir">

@stop

@section('scripts')
<script src="https://use.fontawesome.com/5ec4b26272.js"></script>

<script type="text/javascript" async="" src="./assets/analytics.js"></script>
<script type="text/javascript" async="" src="./assets/atrk.js"></script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Fars News Agency",
        "legalName": "Fars News Agency",
        "description": "Iran's leading independent news agency in Iran, founded in 2003. In addition to Persian reporting, the agency also provides news in English, Turkish, Arabic, and Dari. Farsnews Newsource is the Iran 's most extensively utilized news service partnering with hundreds of local organizations and one of the most popular news agency in Iran and middle-east region ",
        "logo": "https://www.farsnews.ir/images/farsnewslogo.jpg",
        "url": "https://www.farsnews.ir",
        "foundingDate": "2003",
        "telephone": "+982142082000",
        "sameAs": ["https://twitter.com/farsnews_agency",
            "https://www.linkedin.com/company/farsnews-ir",
            "https://www.instagram.com/fars_news/?hl=en",
            "https://www.facebook.com/FNA.english",
            "https://en.wikipedia.org/wiki/Fars_News_Agency",
            "https://telegram.me/farsna"
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "No1, Shahrod Street, Ferdosi Square",
            "addressLocality": "Tehran",
            "postalCode": "15999-36717",
            "addressCountry": "Iran"
        }
    }
</script>



<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
    _atrk_opts = {
        atrk_acct: "Hli5s1Fx9f207i",
        domain: "farsnews.com",
        dynamic: true
    };
    (function () {
        var as = document.createElement('script');
        as.type = 'text/javascript';
        as.async = true;
        as.src = "https://certify-js.alexametrics.com/atrk.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(as, s);
    })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=Hli5s1Fx9f207i" style="display:none" height="1"
        width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./javasctipt/js.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-131012460-1');
</script>




<script src="./assets/jquery.min.js"></script>
<script src="./assets/bootstrap.min.js"></script>
<script src="./assets/Stat.js"></script>

<script src="./assets/index.min.js"></script>

<script>
    $(".lazyimage").lazy({
        effect: "fadeIn",
        effectTime: 1000,
        threshold: 0,

    });


    $(document).ready(function () {
        $("img").each(function (i, ele) {
            $("<img/>").attr("src", $(ele).attr("src")).on('error', function () {
                $(ele).attr("src", "./images/placeholder-photo-o.png");
            })
        });

        $("img").on("error", function () {
            $(this).attr("src", "./images/placeholder-photo-o.png");
        });
    });

    $(document).foundation();
</script>

<link rel="manifest" href="https://www.farsnews.ir/manifest.json">
@stop