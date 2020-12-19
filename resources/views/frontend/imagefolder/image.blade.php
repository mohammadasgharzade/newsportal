@extends('layouts.frontend.master')
@section('خبرگزاری فارس|')

<!-- ################################################### Head ################################################## -->
@section('head')
<script src="https://use.fontawesome.com/5ec4b26272.js"></script>

@include('frontend.imagefolder.image_head')
@stop

<!-- ################################################### Content ################################################## -->

@section('content')

<body>


    <div class="main-content  position-relative">
        <main>
            <div class="container position-relative">
                <span class="date position-absolute">{{$today}}</span>
            </div>

            <!-- ############################################## تصاویر ################################# -->
            <section class="photo-box">
                <!-- <div class="photo-header container pt-4 p-0">
                    <div
                        class="d-flex flex-wrap justify-content-around justify-content-sm-between align-items-center py-2">
                        <ul class="menu p-0 pb-2 text-justify">
                            <li id="1" class="menu-selected"><a href="/photo">صفحه اصلی عکس</a></li>
                            <li id="2"><a href="/photo/provinces">استان‌ها</a></li>
                            <li id="3"><a href="/photo/journalism">خبری</a></li>
                            <li id="4"><a href="/photo/documentary">مستند</a></li>
                            <li id="5"><a href="/photo/sports">ورزشی</a></li>
                            <li id="13"><a href="/photo/culture">فرهنگ‌و‌هنر</a></li>
                            <li id="14"><a href="/photo/tourism">گردشگری</a></li>
                            <li id="15"><a href="/photo/interview">با فارس</a></li>
                        </ul>

                        <div class="d-none d-sm-flex flex-wrap align-items-center p-0">
                            <form target="_blank" class="search-photo d-flex justify-content-center align-items-center"
                                action="https://search.farsnews.ir/photo" dir="ltr">
                                <input type="text" name="end" placeholder="تا :" class="end pdp-el"
                                    pdp-id="pdp-3083940">
                                <input type="text" name="from" placeholder="از :" class="from pdp-el"
                                    pdp-id="pdp-9793434">
                                <input type="text" name="q" placeholder="جستجو ..." class="sh">
                                <button type="submit" class="submit">
                                    <i class="oi oi-magnifying-glass"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div> -->

                <div class="container">

                    <div class="gallery  pt-3">

                        <div class="text d-flex flex-column text-justify mb-5 ">
                            <h1 class="title d-block mb-2 mt-4">{{$gallary->title}}</h1>

                            <p class="lead">
                                {{$gallary->descryption}}
                            </p>
                            <div class="d-flex justify-content-lg-between align-items-center mt-3 flex-wrap">
                                <div class="data-box d-flex justify-content-start align-items-center">
                                    <span>

                                        {{$gallary->user}}
                                        <a href="http://pics.farsnews.ir/?nn=13990901000934" target="_blank"
                                            title="دریافت کل گزارش تصویری">
                                        </a>
                                    </span>

                                    <span>
                                        {{$gallary->created_at->format('H:i')}}
                                    </span>
                                    <span>
                                        {{$gallary->created_at->format('d.m.Y')}}
                                    </span>
                                    <span>
                                        <a href="http://pics.farsnews.ir/?nn=13990901000934" target="_blank"
                                            title="دریافت کل گزارش تصویری">
                                            <span class="oi oi-data-transfer-download mr-1"></span>
                                        </a>
                                    </span>
                                </div>
                                <span class="my-1">
                                    <span id="shrl">http://127.0.0.1:8000/</span>
                                    <button data-clipboard-target="#shrl" class="btn-shrl ml-2" data-toggle="tooltip"
                                        data-placement="right" title="" data-original-title="کپی">
                                        <span class="oi oi-clipboard"></span>
                                    </button>


                                </span>
                            </div>
                        </div>

                        <div class="row photos d-flex flex-wrap">
                            @if($gallary->images)
                            @foreach($peg as $item)
                            <div class="col-12 col-sm-6 col-lg-3 mb-3 px-2 ">
                                <a class="hw-fix bg-white position-relative ">
                                    <img src="{{asset($item->image)}}" width="100%" height="200px"
                                        alt="{{$item->title}}" class="custom-border">
                                    <span class="num"></span>
                                </a>
                            </div>
                            @endforeach
                            @endif


                        </div>
                    </div>

                    <div class="col-md-12" style="margin-bottom: 3%;">
                         {{$peg->links()}}
                        
                    </div>
                 

                </div>



                <div class="container px-5 mt-2" dir="rtl">

                    <div class="row">
                        <div class="col-md-12 text-right">
                         <!-- ############################################### نظرات ################################# -->

                        </div>
                    </div>
                </div>

            </section>

            <input id="StoryPublishDate" name="StoryPublishDate" type="hidden" value="11/21/2020 5:37:47 PM">
            <input id="CategoryId" name="CategoryId" type="hidden" value="1199">
            <input id="StoryId" name="StoryId" type="hidden" value="4913431">
            <input id="StoryCode" name="StoryCode" type="hidden" value="13990901000934">
            <input id="type" name="type" type="hidden" value="photo">
            <input id="RefererPage" name="RefererPage" type="hidden" value="">
            <input id="IsOther" name="IsOther" type="hidden" value="False">
            <input id="ParentId" name="ParentId" type="hidden" value="0">
            <input id="Reporter" name="Reporter" type="hidden" value="">
            <input id="Publisher" name="Publisher" type="hidden" value="">


            <script id="comments-children-template" type="text/x-handlebars-template">
                <div class="border-bottom pb-3 mb-3 reply-item position-relative" data-id="@{{id}}">
        <span class="oi oi-caret-top position-absolute"></span>
        <div class="d-flex flex-column p-3">
            <div class="d-flex justify-content-between">
                <span class="name">@{{name}}<span> در پاسخ </span>@{{parentName}}</span>
                <span class="date">@{{persianCreateDate}}</span>
            </div>
            <span class="cmnt my-3">@{{text}}</span>
            <div class="reply-like d-flex justify-content-between align-items-center">
                <div class="reply-btn">
                    <span class="oi oi-share ml-1 mt-1"></span>
                    <button type="button" class="open-reply-modal btn" data-toggle="modal" data-target="#reply-modal" data-id="@{{id}}">پاسخ</button>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="like-box">
                        <span class="ml-1 like-count">@{{likeCount}}</span><span class="oi oi-heart" data-id="@{{id}}" data-count="@{{likeCount}}"></span>
                    </div>
                </div>

            </div>

        </div>
    </div>

   

</script>


            <script id="comments-template" type="text/x-handlebars-template">

                <div class="border-bottom mb-3 item" data-id="@{{id}}">

        <div class="d-flex flex-column p-3">
            <div class="d-flex justify-content-between">
                <span class="name"></span>
                <span class="date"></span>
            </div>
            <span class="cmnt my-3"></span>
            <div class="reply-btn">
                <div class="reply-like d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <span class="oi oi-share ml-1 mt-1"></span>
                        <button type="button" class="open-reply-modal btn" data-toggle="modal" data-target="#reply-modal" data-id="@{{id}}">پاسخ</button>
                    </div>
                    <div class="like-box">
                        <span class="ml-1 like-count"></span>
                        <span class="oi oi-heart" data-id="" data-count=""></span>
                    </div>
                </div>
            </div>
        </div>


    </div>

   


</script>



            <a href="#" id="back-to-top" title="Back to top"><span class="fa fa-arrow-up"></span></a>
        </main>
        <div class="w-100 bottom-banner d-none">
            <a target="_blank" class="w-100"
                href="https://mci.ir/big-prize?utm_source=mci&amp;utm_medium=preroll&amp;utm_campaign=bigpriza">
                <img class="w-100" src="/images/hamrah-aval-new4.gif" alt="همراه اول">
            </a>
            <span class="close">
                <span aria-hidden="true">×</span>
            </span>
        </div>

        <div class="blur d-none">
        </div>
    </div>
    <input id="ReloadPage" name="ReloadPage" type="hidden" value="no">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://stat.farsnews.ir/matomo/Stat.js"></script>

    <script src="/js/handlebars-v4.1.2.min.js"></script>
    <script src="/js/photo-news.min.js?v=1"></script>
    <div id="pdp-9793434" class="pdp-default" style="display: none; top: 114px; left: 181.094px;">
        <div class="">
            <ul class="monthSelect" style="margin-top: 20px; height: 160px; font-size: 11px; display: none;">
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    فروردین</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    اردیبهشت</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    خرداد</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    تیر</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    مرداد</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    شهریور</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    مهر</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    آبان</li>
                <li style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;"
                    class="selected">آذر</li>
                <li class="disableMonth"
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    دی</li>
                <li class="disableMonth"
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    بهمن</li>
                <li class="disableMonth"
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    اسفند</li>
            </ul>
            <ul class="yearSelect" style="margin-top: 20px; height: 160px; font-size: 11px; display: none;">
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1380">۱۳۸۰</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1381">۱۳۸۱</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1382">۱۳۸۲</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1383">۱۳۸۳</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1384">۱۳۸۴</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1385">۱۳۸۵</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1386">۱۳۸۶</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1387">۱۳۸۷</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1388">۱۳۸۸</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1389">۱۳۸۹</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1390">۱۳۹۰</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1391">۱۳۹۱</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1392">۱۳۹۲</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1393">۱۳۹۳</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1394">۱۳۹۴</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1395">۱۳۹۵</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1396">۱۳۹۶</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1397">۱۳۹۷</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1398">۱۳۹۸</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    class="selected" value="1399">۱۳۹۹</li>
            </ul>
        </div>
        <div class="pdp-header" style="height:20px;line-height:20px; font-size:17px;">
            <div class="nextArrow disabled" title="ماه بعد">►</div>
            <div class="monthYear"><span>آذر</span><span>&nbsp;&nbsp;</span><span>۱۳۹۹</span></div>
            <div class="prevArrow" title="ماه قبل">◄</div>
        </div>
        <div class="dows">
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">ش</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">ی</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">د</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">س</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">چ</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">پ</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">ج</div>
        </div>
        <div class="days">
            <div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/1" data-gdate="2020/11/21">۱</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/2" data-gdate="2020/11/22">۲</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/3" data-gdate="2020/11/23">۳</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/4" data-gdate="2020/11/24">۴</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/5" data-gdate="2020/11/25">۵</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/6" data-gdate="2020/11/26">۶</div>
                <div class="day cell friday today selday "
                    style="width:25px;height:20px;line-height:20px; font-size:13px; " data-jdate="1399/9/7"
                    data-gdate="2020/11/27">۷</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/8" data-gdate="2020/11/28">۸</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/9" data-gdate="2020/11/29">۹</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/10" data-gdate="2020/11/30">۱۰</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/11" data-gdate="2020/12/1">۱۱</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/12" data-gdate="2020/12/2">۱۲</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/13" data-gdate="2020/12/3">۱۳</div>
                <div class="day cell friday   disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/14" data-gdate="2020/12/4">۱۴</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/15" data-gdate="2020/12/5">۱۵</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/16" data-gdate="2020/12/6">۱۶</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/17" data-gdate="2020/12/7">۱۷</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/18" data-gdate="2020/12/8">۱۸</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/19" data-gdate="2020/12/9">۱۹</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/20" data-gdate="2020/12/10">۲۰</div>
                <div class="day cell friday   disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/21" data-gdate="2020/12/11">۲۱</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/22" data-gdate="2020/12/12">۲۲</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/23" data-gdate="2020/12/13">۲۳</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/24" data-gdate="2020/12/14">۲۴</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/25" data-gdate="2020/12/15">۲۵</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/26" data-gdate="2020/12/16">۲۶</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/27" data-gdate="2020/12/17">۲۷</div>
                <div class="day cell friday   disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/28" data-gdate="2020/12/18">۲۸</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/29" data-gdate="2020/12/19">۲۹</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/30" data-gdate="2020/12/20">۳۰</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
            </div>
            <div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
            </div>
        </div>
        <div class="pdp-footer" style="height:20px;line-height:20px; font-size:13px;"><a class="goToday"
                data-jdate="1399/9/7/6" data-gdate="Fri Nov 27 2020 10:31:37 GMT+0330 (Iran Standard Time)"
                href="javascript:;">هم اکنون</a></div>
    </div>
    <div id="pdp-3083940" class="pdp-default" style="display: none; top: 114px; left: 76.2969px;">
        <div class="">
            <ul class="monthSelect" style="margin-top: 20px; height: 160px; font-size: 11px; display: none;">
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    فروردین</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    اردیبهشت</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    خرداد</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    تیر</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    مرداد</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    شهریور</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    مهر</li>
                <li
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    آبان</li>
                <li style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;"
                    class="selected">آذر</li>
                <li class="disableMonth"
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    دی</li>
                <li class="disableMonth"
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    بهمن</li>
                <li class="disableMonth"
                    style="height:36.75px;line-height:36.75px; width:55.833333333333336px;width:55.833333333333336px\9;">
                    اسفند</li>
            </ul>
            <ul class="yearSelect" style="margin-top: 20px; height: 160px; font-size: 11px; display: none;">
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1380">۱۳۸۰</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1381">۱۳۸۱</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1382">۱۳۸۲</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1383">۱۳۸۳</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1384">۱۳۸۴</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1385">۱۳۸۵</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1386">۱۳۸۶</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1387">۱۳۸۷</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1388">۱۳۸۸</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1389">۱۳۸۹</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1390">۱۳۹۰</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1391">۱۳۹۱</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1392">۱۳۹۲</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1393">۱۳۹۳</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1394">۱۳۹۴</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1395">۱۳۹۵</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1396">۱۳۹۶</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1397">۱۳۹۷</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    value="1398">۱۳۹۸</li>
                <li style="height:25px;line-height:25px; width:51.166666666666664px;width:50.833333333333336px\9;"
                    class="selected" value="1399">۱۳۹۹</li>
            </ul>
        </div>
        <div class="pdp-header" style="height:20px;line-height:20px; font-size:17px;">
            <div class="nextArrow disabled" title="ماه بعد">►</div>
            <div class="monthYear"><span>آذر</span><span>&nbsp;&nbsp;</span><span>۱۳۹۹</span></div>
            <div class="prevArrow" title="ماه قبل">◄</div>
        </div>
        <div class="dows">
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">ش</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">ی</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">د</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">س</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">چ</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">پ</div>
            <div class="dow cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">ج</div>
        </div>
        <div class="days">
            <div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/1" data-gdate="2020/11/21">۱</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/2" data-gdate="2020/11/22">۲</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/3" data-gdate="2020/11/23">۳</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/4" data-gdate="2020/11/24">۴</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/5" data-gdate="2020/11/25">۵</div>
                <div class="day cell    " style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/6" data-gdate="2020/11/26">۶</div>
                <div class="day cell friday today selday "
                    style="width:25px;height:20px;line-height:20px; font-size:13px; " data-jdate="1399/9/7"
                    data-gdate="2020/11/27">۷</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/8" data-gdate="2020/11/28">۸</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/9" data-gdate="2020/11/29">۹</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/10" data-gdate="2020/11/30">۱۰</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/11" data-gdate="2020/12/1">۱۱</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/12" data-gdate="2020/12/2">۱۲</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/13" data-gdate="2020/12/3">۱۳</div>
                <div class="day cell friday   disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/14" data-gdate="2020/12/4">۱۴</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/15" data-gdate="2020/12/5">۱۵</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/16" data-gdate="2020/12/6">۱۶</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/17" data-gdate="2020/12/7">۱۷</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/18" data-gdate="2020/12/8">۱۸</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/19" data-gdate="2020/12/9">۱۹</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/20" data-gdate="2020/12/10">۲۰</div>
                <div class="day cell friday   disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/21" data-gdate="2020/12/11">۲۱</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/22" data-gdate="2020/12/12">۲۲</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/23" data-gdate="2020/12/13">۲۳</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/24" data-gdate="2020/12/14">۲۴</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/25" data-gdate="2020/12/15">۲۵</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/26" data-gdate="2020/12/16">۲۶</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/27" data-gdate="2020/12/17">۲۷</div>
                <div class="day cell friday   disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/28" data-gdate="2020/12/18">۲۸</div>
            </div>
            <div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/29" data-gdate="2020/12/19">۲۹</div>
                <div class="day cell    disday" style="width:25px;height:20px;line-height:20px; font-size:13px; "
                    data-jdate="1399/9/30" data-gdate="2020/12/20">۳۰</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
            </div>
            <div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
                <div class="nul cell " style="width:25px;height:20px;line-height:20px; font-size:13px; ">&nbsp;</div>
            </div>
        </div>
        <div class="pdp-footer" style="height:20px;line-height:20px; font-size:13px;"><a class="goToday"
                data-jdate="1399/9/7/6" data-gdate="Fri Nov 27 2020 10:31:37 GMT+0330 (Iran Standard Time)"
                href="javascript:;">هم اکنون</a></div>
    </div>

    <link rel="manifest" href="/manifest.json">




    <div id="uvpn_rate_us" style="display: none;">
        <div class="uvpn_wrap">
            <div class="uvpn_logo-ext">
                <div class="uvpn_logo-wrap"> <img src="chrome-extension://jaoafpkngncfpfggjefnekilbkcpjdgp/img/128.png">
                </div>
            </div>
            <div class="uvpn_title"> Don’t Forget to Rate Us </div>
            <div class="uvpn_desc"> If you enjoy our product, give us 5 stars. It helps so much! </div>
            <div class="stars"> <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175"
                    viewBox="0 0 1235 1175">
                    <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>
                </svg> <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">
                    <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>
                </svg> <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">
                    <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>
                </svg> <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">
                    <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>
                </svg> <svg xmlns="http://www.w3.org/2000/svg" width="1235" height="1175" viewBox="0 0 1235 1175">
                    <path fill="#cf6218" d="M0,449h1235l-999,726 382-1175 382,1175z"></path>
                </svg> </div> <a target="_blank"
                href="https://chrome.google.com/webstore/detail/uvpn-free-and-unlimited-v/jaoafpkngncfpfggjefnekilbkcpjdgp/reviews"
                id="rate_btn_rateus" class="uvpn_rate-btn uvpn_btn"> Rate Us </a>
            <div id="close_btn_rateus" class="uvpn_later-btn uvpn_btn"> Not Now </div>
        </div>
    </div>
</body>
@stop

<!-- ################################################### Script ################################################## -->

@section('scripts')
@include('frontend.categoryfolder.category_scripts')
@stop