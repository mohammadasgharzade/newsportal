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
            <span class="date position-absolute">{{$today}}}</span>
        </div>






        <div class="container pt-4">
            <div class="row">
                <div class="col-12 col-lg-9 float-right">
                    <div class="row">
                        <div class="col-12 mb-3 padding-normal">
                            <div class="page-title border-bottom d-flex justify-content-between flex-wrap">
                                <span>کلمات کلیدی : {{$tag->name}}</span>
                                <span>تعداد اخبار: {{$tagcount}}</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap w-100 col-12 mb-3 padding-normal">
                            <div class=" w-100 mb-2">
                                <ul class="last-news news-list list-unstyled p-0 m-0">

                                    @if(count($tag->posts) > 0)
                                    @foreach($tag->posts as $item)
                                    <li class="media py-3 border-bottom  align-items-start">

                                        <a class="col-4 px-0 mb-2 mb-sm-0" href="{{url('article')}}/{{$item->slug}}"
                                            target="_blank">
                                            <img class="w-100" src="{{asset($item->cover)}}" alt="">
                                        </a>

                                        <div
                                            class="col-8 media-body text-justify mr-0 mr-sm-2 mb-0 d-flex flex-column justify-content-between align-self-stretch">

                                            <a class="d-flex flex-column h-100 justify-content-between"
                                                href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                                <div>
                                                    <span class="title d-block mb-2">
                                                        {{ Str::limit($item->title,100)}}
                                                    </span>
                                                    <span class="lead d-none d-sm-block mb-2">
                                                        {{ Str::limit($item->meta,100)}}
                                                    </span>
                                                </div>
                                                <span class="publish-time align-self-end">
                                                    {{$item->created_at->format('H:m')}} -
                                                    {{$item->created_at->format('Y:m:d')}}</span>

                                            </a>
                                            <p class="tags mb-0 text-justify mt-2">
                                                @foreach($item->tags as $tag)
                                                <a class="ml-2" href="{{url('tag')}}/{{$tag->id}}">
                                                    {{$tag->name}}
                                                </a>
                                                @endforeach
                                            </p>

                                        </div>
                                    </li>

                                    @endforeach
                                    @endif
                                </ul>



                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-lg-3 float-right mt-3 mt-md-0 d-flex flex-column my-4">
                    <div class="row padding-normal">
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
                                        <li
                                            class="border-bottom text-justify px-2 py-2 d-flex align-items-center title">
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



                        <!-- ##############################################  پر بازدید ها ################################# -->




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

        <input id="NewsCount" name="NewsCount" type="hidden" value="1">



        <a href="#" id="back-to-top" title="Back to top" class=""><span class="oi oi-chevron-top"></span></a>
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
@stop

<!-- ################################################### Script ################################################## -->

@section('scripts')
@include('frontend.categoryfolder.category_scripts')
@stop