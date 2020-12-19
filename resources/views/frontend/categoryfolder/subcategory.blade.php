@extends('layouts.frontend.master')
@section('خبرگزاری فارس|')

<!-- ################################################### Head ################################################## -->
@section('head')
@include('frontend.categoryfolder.category_head')
@stop

<!-- ################################################### Content ################################################## -->

@section('content')
<div class="main-content  position-relative">
    <main>
        <div class="container position-relative">
            <span class="date position-absolute">{{$today}}</span>
        </div>




        <div class="container pt-4">
            <div class="row">
                <div class="col-12 float-right">
                    <div class="row">
                        <div class="col-12 mb-3 padding-normal">
                            <h1 class="page-title border-bottom">
                                <span>
                                    <a href="{{url('subcategory')}}/{{$subcategory->slug}}" target="_blank">
                                        گروه {{$subcategory->title}}
                                    </a>
                                </span>
                            </h1>
                        </div>




                    </div>


                    <!-- ###################################################################### اخبار ################################################### -->

                    <div class="row">
                        <div class="col-12 px-0">
                            @if(count($subcategory->posts)>0)
                            @foreach($subcategory->posts()->orderby('id','DESC')->get() as $key=>$item)
                            @if($key == 0)
                            <div class="top-news d-flex flex-wrap w-100 mb-2">
                                <div class="float-right mb-2 padding-normal col-12 col-md-8 col-lg-6">
                                    <div class="position-relative h-100 image-box">
                                        <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                            <img class="w-100 h-100" src="{{asset($item->cover)}}"
                                                alt="{{$item->title}}">
                                            <div class="caption position-absolute text-justify p-3 w-100">
                                                <h2 class="title">
                                                    {{ Str::limit($item->title,90)}}
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                                @foreach($subcategory->posts()->orderby('id','DESC')->get() as $key=>$item)
                                @if($key > 0 && $key < 7) <div
                                    class="news-list float-right mb-2 d-flex top-news-middle padding-normal col-12 col-md-4 col-lg-3 ">
                                    <div class="w-100 d-flex d-md-inline-block">
                                        <a class="w-100 col-5 col-md-12 px-0 d-flex align-items-center"
                                            href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                            <img class="w-100" src="{{asset($item->cover)}}" alt="{{$item->title}}">
                                        </a>
                                        <div
                                            class="p-3 text d-flex flex-column justify-content-center justify-content-md-between">

                                            <div class="text-box text-justify d-flex flex-column">
                                                <h3 class="title">
                                                    <a class="w-100" href="{{url('article')}}/{{$item->slug}}"
                                                        target="_blank">
                                                        {{ Str::limit($item->title,60)}}
                                                    </a>
                                                </h3>
                                            </div>


                                            <div class="rel-news d-flex align-items-start  w-100 mt-2 d-none">

                                                <span class="diamond position-relative ml-3 mt-square">
                                                    <span class="oi oi-caret-top position-absolute">
                                                    </span>
                                                    <span class="oi oi-caret-bottom position-absolute">
                                                    </span>
                                                </span>
                                                <h4 class="d-block text-right"> <a class="text-justify"
                                                        href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                                        {{ Str::limit($item->meta,50)}} </a></h4>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endif
                            @endforeach

                        </div>

                        @endif
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-9 float-right">
                <div class="row">
                    <div class="d-flex flex-wrap w-100 col-12 mb-3 padding-normal">
                        <div class="last-news w-100 mb-2">

                            <ul class="news-list list-unstyled p-0 m-0">
                                @if(count($subcategory->images) >0)
                                @foreach($pagination->take(20) as $key=>$item)


                                <li class="media py-3 border-bottom align-items-start">

                                    <a class="col-4 px-0 mb-2 mb-sm-0" href="{{url('article')}}/{{$item->slug}}"
                                        target="_blank">
                                        <img class="w-100 lazyimage" src="{{asset($item->cover)}}"
                                            alt="{{$item->title}}">
                                    </a>

                                    <div
                                        class="col-8 media-body text-justify mr-0 mr-sm-2 mb-0 d-flex flex-column justify-content-between align-self-stretch">

                                        <a class="d-flex flex-column h-100 justify-content-between"
                                            href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                            <div>
                                                <span class="headline d-block mb-2"></span>
                                                <h3 class="title d-block mb-2">
                                                    {{ Str::limit($item->title,60)}}
                                                </h3>
                                                <p class="lead d-none d-sm-block mb-0 text-justify">
                                                    {{ Str::limit($item->meta,200)}}
                                                </p>
                                            </div>
                                            <time class="publish-time align-self-end"
                                                datetime="{{$item->created_at}}">{{$item->created_at}}</time>

                                        </a>

                                    </div>
                                </li>

                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12">
                        {{$pagination->links()}}
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-3 float-right mt-3 mt-md-0 d-flex flex-column">
                <div class="row padding-normal  pb-3">

                    <div class="widgets d-flex flex-column w-100">
                        <ul class="d-flex flex-wrap w-100 justify-content-around my-2">
                            <li data-toggle="tooltip" title="" class="mobile" data-original-title="تلفن همراه">
                                <a href="https://www.farsnews.ir/widgets/mobile/" target="_blank"></a>
                            </li>

                            <li data-toggle="tooltip" title="" class="curreny" data-original-title="ارز"><a
                                    href="https://www.farsnews.ir/widgets/currency/" target="_blank"></a></li>
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
                                <a href="https://www.farsnews.ir/politics#more-widgets" data-toggle="collapse"></a>
                            </li>

                        </ul>

                        <div class=" collapse" id="more-widgets">
                            <ul class="d-flex flex-wrap w-100 justify-content-around">
                                <li data-toggle="tooltip" title="" class="leagues" data-original-title="لیگ فوتبال"><a
                                        href="https://www.farsnews.ir/widgets/leagues/" target="_blank"></a>
                                </li>

                                <li data-toggle="tooltip" title="" class="foreign-cars"
                                    data-original-title="خودرو خارجی">
                                    <a href="https://www.farsnews.ir/widgets/global-cars/" target="_blank"></a>
                                </li>

                                <li data-toggle="tooltip" title="" class="camera" data-original-title="دوربین عکاسی">
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

                                <li data-toggle="tooltip" title="" class="metal-iron" data-original-title="آهن آلات">
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








                    <!-- ################################# اخبار کسب و کار ############################ -->

                    <div class="business_div">
                        <div class="title-box d-flex justify-content-between align-items-center px-2 py-1">

                            <span class="business_title">اخبار کسب و کار</span>
                            <img src="{{asset('/images/worklogo.jpg')}}">
                        </div>

                        <div class="news-list-small">
                            <ul class="list-unstyled w-100">
                                @if($business->posts)
                                @foreach($business->posts()->orderby('id','DESC')
                                ->take(6)->get() as $item)
                                <li class="border-bottom text-justify px-3 py-2 d-flex align-items-center title">
                                    <a class="d-flex align-items-center" href="{{url('article')}}/{{$item->slug}}"
                                        target="_blank">
                                        <img class="col-5 pr-0" src="{{asset($item->cover)}}" alt="{{$item->title}}" />
                                        {{ Str::limit($item->title,80)}} </a>
                                </li>

                                @endforeach
                                @endif
                            </ul>
                        </div>

                    </div>




                    <aside class=" d-none d-lg-block">

                        <a href="http://www.hoteltara.com/" target="_blank">
                            <img class="w-100 mt-3" src="{{url('farse_category/assets/13980811000120_Test.gif')}}"
                                data-id="13970729000395" alt="هتل تارا">
                        </a>



                    </aside>




                    <div class="chosen-news position-relative mt-3 d-flex flex-column w-100">


                        <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                            <span class="title">برگزیده ها</span>
                            <span class="arrow px-1">
                                <span class="oi oi-chevron-bottom"></span>
                            </span>
                        </div>
                        <div class="news-list content p-3">
                            @if(count($bargozideha->posts) > 0)
                            @foreach($bargozideha->posts()->take(4)->get() as $item)
                            <div class="d-flex flex-column text-justify mb-4 item">
                                <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    <img class="w-100" src="{{asset($item->cover)}}" alt="">
                                    <h3 class="title">
                                        {{Str::limit($item->title)}}
                                    </h3>
                                </a>
                            </div>
                            @endforeach
                            @endif
                        </div>

                    </div>
                    <div class="mt-3 w-100">

                        <div class="most w-100">
                            <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                                <span class="title"> پر بازدید ها</span>
                                <span class="arrow px-1">
                                    <span class="oi oi-chevron-bottom"></span>
                                </span>
                            </div>
                            @if(count($most_view) > 0)
                            @foreach($most_view->take(10) as $item)
                            <div class="category-visited news-list-small">
                                <ul class="list-unstyled w-100">
                                    <li class="border-bottom text-justify px-2 py-2 d-flex align-items-center title">
                                        <a class="d-flex align-items-center justify-content-between w-100"
                                            href="{{url('article')}}/{{$item->slug}}" target="_blank"><span
                                                class="index"><i class="fa fa-dot-circle-o"></i></span>
                                            <h3 class="text">
                                                {{Str::limit($item->title)}}
                                            </h3>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            @endforeach
                            @endif
                        </div>







                    </div>


                    <div class="top-fars d-flex flex-column mt-3">

                        <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                            <span class="title">پربحث ترین ها</span>
                            <span class="arrow px-1">
                                <span class="oi oi-chevron-bottom"></span>
                            </span>
                        </div>
                        @if(count($most_comment) > 0)
                        @foreach($most_comment->take(3) as $item)
                        <div class="content">
                            <div class="text-justify border-bottom">
                                <a href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                    <img class="w-100" src="{{asset($item->cover)}}" alt="">
                                    <div class="d-flex align-items-center">
                                        <h3 class="top px-3 py-2">
                                            {{Str::limit($item->title,40)}}
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <ul class="list-unstyled m-0 p-0">
                                <li class=" d-flex align-items-center px-3 py-2 border-bottom align-items-center">

                                    <span class="diamond position-relative ml-3 mt-0">
                                        <span class="oi oi-caret-top position-absolute">
                                        </span>
                                        <span class="oi oi-caret-bottom position-absolute">
                                        </span>
                                    </span>
                                    <h3> <a class="text-justify d-flex" href="{{url('article')}}/{{$item->slug}}"
                                            target="_blank">
                                            {{Str::limit($item->meta,60)}}
                                        </a></h3>

                                </li>

                            </ul>
                        </div>
                        @endforeach
                        @endif
                    </div>


                </div>
            </div>
        </div>


</div>
<input id="CategoryName" name="CategoryName" type="hidden" value="سیاسی">
<input id="SubcategoryName" name="SubcategoryName" type="hidden" value="">
<input id="CategoryId" name="CategoryId" type="hidden" value="1">
<input id="SubcategoryId" name="SubcategoryId" type="hidden" value="">
<input id="HighlightService" name="HighlightService" type="hidden" value="4">
<input id="Type" name="Type" type="hidden" value="category">


</main>
<div class="w-100 bottom-banner d-none">
    <a target="_blank" class="w-100"
        href="https://shop.mci.ir/simcard/general/prepaid?utm_source=mci&amp;utm_medium=banner&amp;utm_campaign=etebari&amp;utm_term=etebarii">
        <img class="w-100" src="./assets/hamraheaval-104.gif" alt="همراه اول">
    </a>
    <span class="close">
        <span aria-hidden="true">×</span>
    </span>
</div>

<div class="blur d-none">
</div>
</div>
<input id="ReloadPage" name="ReloadPage" type="hidden" value="no">
@stop

<!-- ################################################### Script ################################################## -->

@section('scripts')
@include('frontend.categoryfolder.category_scripts')
@stop