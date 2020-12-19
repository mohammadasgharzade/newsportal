
@extends('layouts.frontend.master')
@section('title','خبرگزاری فارس|Farse News Agancy')
@section('head')
    <head>
    
    <script src="https://use.fontawesome.com/5ec4b26272.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="fa" />
        <meta name="wot-verification" content="ffd3687b0b6d6de2a2da" />
        

        <link href="/css/imagebootstrap.min.css" rel="stylesheet" />
        

        <link href="/css/imagephoto.min.css?v=1" rel="stylesheet" />



        <!-- Start Alexa Certify Javascript -->
        <script type="text/javascript">
            _atrk_opts = { atrk_acct: "Hli5s1Fx9f207i", domain: "farsnews.com", dynamic: true };
            (function () { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(as, s); })();
        </script>
        <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=Hli5s1Fx9f207i" style="display:none" height="1" width="1" alt="" /></noscript>
        <!-- End Alexa Certify Javascript -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131012460-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());

            gtag('config', 'UA-131012460-1');
        </script>


    </head>
@stop

@section('content')


        <div class="main-content  position-relative">
        <main>

            <div class="container position-relative">
                <span class="date position-absolute">{{$today}}</span>
            </div>


    <section class="photo-box w-100">

    <div class="photo-header container pt-4 pb-3 p-0">
        <div class="d-flex flex-wrap justify-content-around justify-content-sm-between align-items-center py-2">
        <ul class="menu d-flex justify-content-start align-items-center flex-wrap">
                        <li id="1" class="menu-selected"><a href="/imagecat">صفحه اصلی عکس</a></li>
                    
                        @foreach($category->subcategories as $item)
                        <li id="2"><a href="{{route('singleimage.show',$item->slug)}}">{{$item->title}}</a></li>
                        @endforeach
                 

                </ul>

            <div class="d-none d-sm-flex flex-wrap align-items-center p-0">

                <form target="_blank" class="search-photo d-flex justify-content-center align-items-center" action="/search/photo" dir="ltr">
                   
                    <input type="text" name="q" placeholder="جستجو ..." class="sh" />
                    <button type="submit" class="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>






            </div>
        </div>
    </div>
    <div class="container px-0 overflow-hidden">


     <div class="row p-3 p-sm-0" dir="ltr">
        <div class="col-md-12 pt-1  mb-3">
            <div class="Photo-slider" dir="ltr">
                @if(count($gallary) > 0)
                @foreach($gallary as $key=>$item)
                @if($key >= 0 && $key < 4)
                    <div class="px-3  item-photo-slider position-relative active">
                        <a class="" href="{{url('imageview')}}/{{$item->slug}}" target="_blank">
                        @foreach($item->images as $key=>$image)
                            @if($key == 0)
                            <img class="  w-100" src="{{asset($image->image)}}" alt="{{$item->title}}">
                             @endif
                            @endforeach
                            
                        </a>
                        <div class="innr position-absolute px-3">
                            <div class="d-flex justify-content-center align-items-center flex-column py-3">
                                <h3 class="header-slider" dir="rtl">
                                    <a href="#">
                                        {{$item->title}}
                                        </a>
                                </h3>
                                <a href="{{url('imageview')}}/{{$item->slug}}" class="mt-2 custom-border">
                                  
                                    <span dir="rtl">
                                    {{$item->created_at->diffForHumans()}}
                                    </span>

                                    <span>
                                  
                                    {{$item->created_at->format('Y:m:d')}}

                                    <span> </span>

                                </a>
                            </div>
                        </div>
                    

                    </div>
                @endif
                 @endforeach
                 @endif

            </div>
        </div>
    </div>




        <div class="last-news   overflow-hidden mt-3">
            

    <div class="row px-3 px-sm-0">
        @if(count($gallary) > 0)
        @foreach($gallary as $key=>$item)
         @if($key >= 4  )
            <div class="item col-12 col-sm-6 col-md-3 mb-4">
                <div class="bg-white d-flex  flex-column h-100">
                    <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank">
                        <figure> 
                        @foreach($item->images as $key=>$image)
                            @if($key == 0)
                            <img class=" w-100" src="{{asset($image->image)}}" alt="{{$item->title}}" >
                             @endif
                            @endforeach
                        </figure>
                    </a>
                    <div class="info d-flex flex-column justify-content-between align-items-center text-center p-3 h-100">
                        <h3>
                            <a href="{{url('imageview')}}/{{$item->slug}}">
                            {{$item->title}}
    
                        </a>
                        </h3>
                        <span class="d-flex justify-content-center width align-items-center pt-2">
                            <span>
                                
                            </span>
                           
                            <span dir="rtl">
                             {{$item->created_at->diffForHumans()}}
                            </span>
                            <time>
                               
                                 {{$item->created_at->format('Y:m:d')}}
                            </time>
                

                        </span>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
        @endif    
        <div class="col-md-12">
                      
        </div>

        <input id="NewsCount" name="NewsCount" type="hidden" value="29" />
    </div>

        </div>

        <div class="news border-bottom pt-5 pb-3">
                    <div class="title d-flex text-justify mb-4">
                        <span class="pl-2">پر بازدیدها</span>
                    </div>
                    <div class="px-4">
                        <div class="d-flex align-items-center flex-row-reverse align-content-end most-visited slick-initialized slick-slider">
                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button">Previous</button>
                            <div class="slick-list draggable">
                                <div class="slick-track" >
                                
                                @if(count($gallary_most_view)>0)
                                @foreach($gallary_most_view->take(4) as $item)
                                    <div class="item col-12 col-sm-6 mb-4 float-right slick-slide slick-cloned"  style="width: 288px;">
                                        <div class="position-relative w-100">
                                        <a href="{{url('imageview')}}/{{$item->slug}}" target="_blank">
                                        @foreach($item->images as $key=>$image)
                                        @if($key == 0)
                                        <img class=" w-100" src="{{asset($image->image)}}" alt="{{$item->title}}" >
                                        @endif
                                        @endforeach
                                                <h4 class="caption text-justify px-3 align-items-center justify-content-center w-100 position-absolute">
                                                            {{$item->title}}
                                                    </h4>
                                            </a></div>
                                    </div>
                                @endforeach
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>


    </section>






            <a href="#" id="back-to-top" title="Back to top"><span class="fa fa-chevron-up"></span></a>
        </main>
        <div class="w-100 bottom-banner d-none">
            <a target="_blank" class="w-100" href="https://mci.ir/big-prize?utm_source=mci&utm_medium=preroll&utm_campaign=bigpriza">
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


@section('scripts')
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<script src="/js/imagejquery.min.js"></script>
            <script src="/js/imagebootstrap.min.js"></script>
            <script src="https://stat.farsnews.ir/matomo/Stat.js"></script>
            
            <script type="text/javascript" src="/js/imagephoto.min.js"></script>

            <link rel="manifest" href="/manifest.json">


@stop
