@extends('layouts.frontend.master')
@section('خبرگزاری فارس|')

<!-- ################################################### Head ################################################## -->
@section('head')
@include('frontend.videofolder.singlevideo_head')
@stop

<!-- ################################################### Content ################################################## -->

@section('content')

<div class="main-content  position-relative">
    <main>
        <div class="container position-relative">
            <span class="date position-absolute"> {{$today}}</span>
        </div>





        <div class="container pt-4 d-flex flex-wrap px-0">

            <div class="top-video d-flex flex-wrap w-100">
                <div class="col-12 col-md-9 p-0">

                    <div class="player w-100 position-relative h-100 w-100 o-hidden video-box">

                        <div class="position-relative w-100 h-100">
                            <video id="my-video" class="video-js w-100 h-100" controls preload="auto">
                                <source src="{{asset($singlevideo->video)}}" >

                            </video>


                        </div>

                        <div class="caption2 position-absolute w-100 d-flex align-items-end justify-content-end">
                            <span class="fa fa-play mb-2 px-2 mr-2"></span>
                        </div>


                    </div>

                </div>
                <div class="col-12 col-md-3 d-none d-md-inline-block px-0">

                    <!-- ######################################### Most Visit ################################## -->
                    <div class="most-visit">
                        <div class="section-title d-flex justify-content-end">
                            <span class="px-2">
                                <span>پربازدیدها</span>
                                <span class="fa fa-arrow-up mr-1"></span>
                            </span>
                        </div>
            
                        <ul class="d-flex flex-column" data-simplebar="init" data-simplebar-auto-hide="false">
                     
                        @foreach($lastvideos as $item)

                        <li class="p-2 ">
                            <div class="media item">
                                <a class="d-flex flex-column-reverse flex-sm-row-reverse w-100"
                                    href="{{route('singlevideo',$item->slug)}}">
                                    <div
                                        class="video-poster-box col-12 col-sm-4 p-0 align-self-center mx-3 ml-sm-0">
                                        <img src="{{asset($item->image)}}"
                                            class="video-poster w-100" alt="">
                                    </div>
                                    <div class="media-body col-12 col-sm-8 pl-0 text-justify">
                                        <span>
                                        {{Str::limit($item->title,40)}}
                                        </span>
                                        <div class="d-flex justify-content-end align-items-center stats">
                                            <span></span>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </li>
                        @endforeach
                        </ul>

                    </div>

                </div>

            </div>

            <div class="d-flex flex-wrap w-100">

                <div class="top-video col-12 col-md-9">
                    <div class="text d-flex flex-column text-justify">
                        <div class="mb-1">
                            <span class="headline my-2 d-block"></span>
                            <span class="title my-2 d-block">
                                {{$singlevideo->title}}
                            </span>
                            <span class="lead">
                                {{$singlevideo->descryption}}
                            </span>
                        </div>
                        <div class="d-flex justify-content-between mt-3 flex-wrap flex-column flex-sm-row">
                            <div class="category-name-multimedia">
                                <span>
                                    <a href="{{route('videocat.index')}}" target="_blank">
                                       @foreach($singlevideo->subcategories as $item)
                                                    {{$item->title}}
                                       @endforeach
                                    </a>
                                </span>
                              
                              
                               
                            </div>
                            <span class="publish-time text-center">
                               {{$singlevideo->created_at->format('Y:m')}}
                                
                            </span>


                            <span class="short-url my-1 mx-1 btn-copy d-flex justify-content-center align-items-center"
                                data-toggle="tooltip" title="کپی" data-clipboard-target="#surl">
                                <span id="surl"></span>

                            </span>

                           

                            <div class="time d-flex justify-content-center align-items-center mr-1">
                             {{ $singlevideo->created_at->format('H:m') }} 
                                <span class="fa fa-clock-o mr-1"></span>
                            </div>

                        </div>

                        <div class="nt-body text-right mt-4">
                            <p class="rtejustify"> </p>
                        </div>

                        <div class="download-box mt-3">
                         
                                    <div class="title px-2 py-1 mb-3 d-flex align-items-center">
                                        <span class="fa fa-list ml-5"></span>
                                        دانلود
                                    </div>
                          
                            <div class="dl">
                                <div class="row">
                                    <ul class="d-flex flex-wrap w-100">

                                        <li class="col-12 col-sm-6 mb-2">
                                        
                                            <a class="d-flex align-items-center flex-wrap" 
                                                href="{{url('videodownload')}}/{{$singlevideo->video}}"
                                                target="_blank">
                                                <span class="fa fa-download ml-2"></span>
                                               
                                              لینک دانلود
                                            </a>


                                        </li>
                                     


                                    </ul>
                                </div>

                            </div>



                        </div>

                    </div>


                    <div class="rel-news mt-4">
                        <div class="title px-2 py-1 mb-2 d-flex align-items-center">
                            <span class="fa fa-file ml-4"></span>
                            اخبار مرتبط
                        </div>

                        <ul>
                        @if(count($related->videos)>0)
                            @foreach($related->videos()->whereNotin('title',[$singlevideo->title])->take(1)->get() as $key=>$rel)
                        
                                <li class="mb-1">
                                    <a class="d-flex text-justify"
                                        href="{{route('singlevideo',$rel->slug)}}"
                                        target="_blank">
                                        <span class="diamond position-relative ml-3 mt-2">
                                            <span class="fa fa-caret-top position-absolute">
                                            </span>
                                            <span class="fa fa-caret-down position-absolute">
                                            </span>
                                        </span>
                                    {{$rel->title}}
                                    </a>
                                </li>
                        
                            @endforeach  
                       @endif   
                        </ul>
                    </div>


<!-- ######################## comments ##################### -->

                </div>

                <div class="col-12 col-md-3 px-0">
                    <div class="w-100 d-block d-md-none px-0">

                        <div class="most-visit">
                            <div class="section-title d-flex justify-content-end">
                                <span class="px-2">
                                    <span>پربازدیدها</span>
                                    <span class="fa fa-arrow-up mr-1"></span>
                                </span>
                            </div>
                            <ul class="d-flex flex-column" data-simplebar="init" data-simplebar-auto-hide="false">

                                @foreach($lastvideos as $item)
                                <li class="p-2 ">
                                    <div class="media item">
                                        <a class="d-flex flex-column-reverse flex-sm-row-reverse w-100"
                                            href="{{route('singlevideo',$item->slug)}}">
                                            <div
                                                class="video-poster-box col-12 col-sm-4 p-0 align-self-center mx-3 ml-sm-0">
                                                <img src="{{asset($item->image)}}" class="video-poster w-100" alt="">
                                            </div>
                                            <div class="media-body col-12 col-sm-8 pl-0 text-justify">
                                                <span>
                                                    {{$item->title}}

                                                </span>
                                                <div class="d-flex justify-content-end align-items-center stats">
                                                    <span></span>
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                </li>
                                @endforeach

                            </ul>

                        </div>

                    </div>


                    <div class="last-video mt-3">
                        <div class="section-title d-flex justify-content-end">
                            <span class="px-2">
                                <span>آخرین ویدئوها</span>
                                <span class="fa fa-arrow-down mr-1"></span>
                            </span>
                        </div>
                        <ul class="d-flex flex-column">
                            @foreach($lastvideos as $item)
                            <li class="item d-flex text-justify py-2 px-2 px-sm-0 ">
                                <div class="text-justify d-flex flex-column w-100">
                                    <a href="{{route('singlevideo',$item->slug)}}" target="_blank">
                                        <div class="position-relative w-100">
                                            <img class="video-poster w-100" src="{{asset($item->image)}}" alt="" style="height: 160px;" />

                                            <div
                                                class="caption2 position-absolute w-100 d-flex align-items-end justify-content-end">
                                                <span class="oi oi-media-play py-1 px-2 mr-2"></span>
                                            </div>
                                        </div>
                                        <div class="title position-relative mt-2">
                                            {{$item->title}}
                                        </div>
                                    </a>
                                </div>
                            </li>
                            @endforeach

                        </ul>

                    </div>

                </div>

            </div>

        </div>
        <input id="CategoryId" name="CategoryId" type="hidden" value="8" />
        <input id="StoryCode" name="StoryCode" type="hidden" value="13990926000965" />
        <input id="StoryId" name="StoryId" type="hidden" value="4946403" />
        <input id="StoryPublishDate" name="StoryPublishDate" type="hidden" value="12/16/2020 6:40:30 PM" />
        <input id="ParentId" name="ParentId" type="hidden" value="0" />
        <input id="RefererPage" name="RefererPage" type="hidden" value="" />
        <input id="IsOther" name="IsOther" type="hidden" value="False" />

        <input id="multimediaUrl" name="multimediaUrl" type="hidden"
            value="https://media.farsnews.ir/Uploaded/Files/Video/1399/09/26/13990926000990_480P.mp4" />
        <input id="multimediaPoster" name="multimediaPoster" type="hidden"
            value="https://media.farsnews.ir/Uploaded/Files/Images/1399/09/26/13990926000986_Test_PhotoI.jpg" />
        <input id="AdsUrl" name="AdsUrl" type="hidden" value="" />
        <input id="AdsId" name="AdsId" type="hidden" value="" />
        <input id="AdsCode" name="AdsCode" type="hidden" value="" />
        <input id="AdsClickUrl" name="AdsClickUrl" type="hidden" value="" />

        <input id="Reporter" name="Reporter" type="hidden" value="" />
        <input id="Publisher" name="Publisher" type="hidden" value="" />

        <script id="comments-children-template" type="text/x-handlebars-template">
            <div class="border-bottom pb-3 mb-3 reply-item position-relative" data-id="@{{id}}">
        <span class="fa fa-arrow-up position-absolute"></span>
        <div class="d-flex flex-column p-3">
            <div class="d-flex justify-content-between">
                <span class="name">@{{name}}<span> در پاسخ </span>@{{parentName}}</span>
                <span class="date">@{{persianCreateDate}}</span>
            </div>
            <span class="cmnt my-3">@{{text}}</span>
            <div class="reply-like d-flex justify-content-between align-items-center">
                <div class="reply-btn">
                    <span class="fa fa-share ml-1 mt-1"></span>
                    <button type="button" class="open-reply-modal btn" data-toggle="modal" data-target="#reply-modal" data-id="@{{id}}">پاسخ</button>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="like-box">
                        <span class="ml-1 like-count">@{{likeCount}}</span><span class="fa fa-heart" data-id="@{{id}}" data-count="@{{likeCount}}"></span>
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
                <span class="name">@{{name}}</span>
                <span class="date">@{{persianCreateDate}}</span>
            </div>
            <span class="cmnt my-3">@{{text}}</span>
            <div class="reply-btn">
                <div class="reply-like d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <span class="oi oi-share ml-1 mt-1"></span>
                        <button type="button" class="open-reply-modal btn" data-toggle="modal" data-target="#reply-modal" data-id="@{{id}}">پاسخ</button>
                    </div>
                    <div class="like-box">
                        <span class="ml-1 like-count">@{{likeCount}}</span>
                        <span class="oi oi-heart" data-id="@{{id}}" data-count="@{{likeCount}}"></span>
                    </div>
                </div>
            </div>
        </div>


    </div>

   


</script>






        <a href="#" id="back-to-top" title="Back to top"><span class="oi oi-chevron-top"></span></a>
    </main>
    <div class="w-100 bottom-banner d-none">
        <a target="_blank" class="w-100"
            href="https://mci.ir/big-prize?utm_source=mci&utm_medium=preroll&utm_campaign=bigpriza">
            <img class="w-100" src="/images/hamrah-aval-new4.gif" alt="همراه اول" />
        </a>
        <span class="close">
            <span aria-hidden="true">&times;</span>
        </span>
    </div>

    <div class="blur d-none">
    </div>
</div>
<input id="ReloadPage" name="ReloadPage" type="hidden" value="no" />
@stop

<!-- ################################################### Script ################################################## -->

@section('scripts')
@include('frontend.videofolder.singlevideo_script')
@stop