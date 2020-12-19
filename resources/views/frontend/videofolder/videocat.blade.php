@extends('layouts.frontend.master')
@section('خبرگزاری فارس|')

<!-- ################################################### Head ################################################## -->
@section('head')
@include('frontend.videofolder.videohead')
@stop

<!-- ################################################### Content ################################################## -->

@section('content')

    <div class="main-content  position-relative">
        <main>
            <div class="container position-relative">
                <span class="date position-absolute">{{$today}}</span>
            </div>

            


    <section class="top-video py-4">
        <div class="container p-0">
            <div class="page-title-box col-12 mb-3 padding-normal border-bottom d-flex justify-content-between">
                <h1 class="page-title">
                        <span>گروه فیلم</span>
                </h1>
             
            </div>



                <div class="d-flex flex-wrap w-100" itemscope="" itemtype="http://schema.org/CreativeWork">
              @if(count($videos) > 0)
                @foreach($videos as $key=>$item)
                    @if($key == 0)
                    <div class="item col-12 col-lg-7 my-2 d-flex flex-column padding-normal">
                        <section class="video-box position-relative d-flex flex-column h-100 w-100">

                            <div class="player w-100 position-relative h-100 o-hidden">

                                <div class="position-relative w-100 h-100">
                                    <video id="my-video" class="video-js w-100 h-100" controls preload="auto" >
                                        <source src="{{asset($item->video)}}" >
                                    </video>                             
                                </div>


                                <div class="caption2 position-absolute w-100 d-flex align-items-end justify-content-end TopvideoCaption">
                                    <span class="fa fa-play mb-2 px-2 mr-2"></span>
                                    <div class="title d-none d-lg-inline-flex flex-column text-justify p-3 w-100 position-absolute">
                                
                                        <h3>
                                            <a href="{{route('singlevideo',$item->slug)}}" target="_blank">
                                               {{$item->title}}
                                        </a>
                                        </h3>


                                    </div>

                                </div>
                            </div>

                                                </section>
                        <div class="video-title d-flex flex-column d-lg-none text-justify py-3 pb-0 w-100">
                        
                            <h3 class="title">
                                <a href="{{route('singlevideo',$item->slug)}}" target="_blank">
                                {{$item->title}}
                                </a>
                            </h3>

                        </div>
                    </div>
                    @endif
                @endforeach
             @endif
            <div class="news-list col-12 col-lg-5 my-2 d-flex flex-wrap padding-normal">
            @if(count($videos) > 0)
                @foreach($videos as $key=>$item)
                    @if($key > 0 && $key < 5 )
                    <div class="item col-12 col-sm-6 padding-normal  mb-3">
                        <div class="d-flex flex-row flex-sm-column w-100 align-items-center">
                            <div class="col-6 col-sm-12 px-0 position-relative IE-video">
                                <a class="d-flex o-hidden" href="{{route('singlevideo',$item->slug)}}" target="_blank" itemprop="url">
                                    <figure> 

                                     <img class="video-poster w-100 " src="{{asset($item->image)}}"  alt=""  style="height: 160px; width: 100%;" itemprop="image" />
                                     </figure>
                                        
                                    <div class="caption2  position-absolute w-100 d-flex align-items-end justify-content-end">
                                        <span class="fa fa-play py-1 px-2 mr-2"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="w-100 px-3 px-sm-0 pt-2 text-justify d-flex flex-column">
                        
                                <h3 itemprop="title">
                                    <a class="title" href="{{route('singlevideo',$item->slug)}}" target="_blank">
                                       {{$item->title}}
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



    </section>

<div class="container pt-4 d-flex flex-column px-0">



    <section class="last-video mt-2 d-flex flex-wrap">
        
    <div class="row">
    @if(count($videos) > 0)
                @foreach($videos as $key=>$item)
                    @if($key > 4 )
                        <div class="item d-flex col-12 col-sm-6 col-md-4 col-lg-3 float-right py-2">
                                <div class="text-justify d-flex flex-column w-100">
                                    <a href="{{route('singlevideo',$item->slug)}}" target="_blank">
                                        <div class="position-relative w-100">
                                        |<figure>  <img class="video-poster w-100" src="{{asset($item->image)}}" alt="" /></figure>
                                                <div class="video-intro position-absolute w-100 h-100 d-none align-items-center o-hidden">
                                                    <video class="w-100" muted="muted" loop="loop" src="{{asset($item->image)}}"></video>
                                                </div>
                                            <div class="caption2 position-absolute w-100 d-flex align-items-end justify-content-end">
                                                <span class="fa fa-play py-1 px-2 mr-2"></span>
                                            </div>
                                        </div>

                                        <div class="body d-flex flex-column mt-2">
                                            <h3 class="title position-relative">
                                            
                                            </h3>
                                            
                                            <span class="date text-left mt-2">{{$item->created_at->format('H:m')}} |  {{$item->created_at->format('Y:m')}}</span>

                                        </div>
                                    </a>
                                </div>
                        </div>
                     @endif
                @endforeach
    @endif    
    </div>





    </section>
   
</div>





            <a href="#" id="back-to-top" title="Back to top"><span class="fa fa-arrow-up"></span></a>
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
@stop

<!-- ################################################### Script ################################################## -->

@section('scripts')
@include('frontend.videofolder.videoScript')
@stop