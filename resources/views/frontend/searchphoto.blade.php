@extends('layouts.frontend.master')
@section('title','خبرگزاری فارس|Farse News Agancy')
@section('head')

<head>

    <title> | خبرگزاری فارس</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="/css/search.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/5ec4b26272.js"></script>


    <style>
        .search-time .active {
            background: #ff8000;
            color: #fff;
            border-radius: 4px;
            padding: 2px 20px;
        }
    </style>
</head>
@stop
@section('content')


<div class="main-content position-relative">
    <main>
        <div class="container position-relative">
            <span class="date position-absolute">{{$today}}</span>
        </div>

        <form method="get" action="/search/photo">

            <div class=" back-search">
                <div class="container">
                    <div class="row">
                    <div class="mb-1 col-md-12 w-100">
                       
                        <h1 class="py-1 px-2" style="text-align: right; font-size: 18px; font-weight: bold;">
                              <i class="fa fa-search" style="margin-left: 1%;"></i>جستجوی تصویر</h1>
                       
                       
                        
                    </div>
                        <div class="col-sm-8 col-md-9 col-lg-10 padding-normal mt-1">
                            <div class="search-item d-flex align-items-center">

                                <input class="w-100 ml-3" id="search-posts" name="q" type="text" placeholder="متن مورد نظر برای جستجو ..."
                                    value="{{$searchinfo}}" />

                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 col-lg-2 padding-normal mt-1">
                            <div class="search-item d-flex align-items-center">

                                <div id="detail"
                                    class="detailedSearchActive detailed w-100 d-flex justify-content-center align-items-center">
                                    جستجوی دقیق
                                </div>
                                <input  type="hidden" value="on" name="o" />

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>


        <div class="boxItems">
            <div class="container">
                <div class="row py-4">
                @if($searchinfo)           
                    @if(count($gallary) > 0)
                        @foreach($gallary as $item)    
                <div class="col-md-6 col-lg-3 mb-3 px-2" >
                            <div class="photo-box bg-white d-flex flex-column">
                                @foreach($item->images as $key=>$image)
                                @if($key == 0)
                                    <div class="img">
                                        <a href="{{url('imageview')}}/{{$item->slug}}" class="d-flex justify-content-center align-items-center w-100 h-100">
                                        <img src="{{asset($image->image)}}" style="width: 100% ; height: 200px; background-size: cover;"></a>
                                    </div>
                                @endif
                                @endforeach
                                <div class="info  p-3 d-flex flex-column justify-content-between">
                                    <h3 class="">
                                        <a href="{{url('imageview')}}/{{$item->slug}}">
                                        {{$item->title}}
                                        </a>
                                    </h3>
                                    <div class="inforow d-flex align-items-center justify-content-center">
                                        <span> ناشناس  | </span>
                                        <span dir="rtl">
                                        {{$item->created_at->format('H:m')}}  | 
                                        </span>
                                        <span>
                                        {{$item->created_at->format('Y:m:d')}} 

                                        </span>


                                    </div>
                                </div>
                                
                            </div>
                    

                </div>

                @endforeach
                @endif
                @endif
                     

             
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>

        </div>


        <a href="#" id="back-to-top" title="Back to top"><span class="oi oi-chevron-top"></span></a>
    </main>
    <div class="w-100 bottom-banner d-none">
        <a target="_blank" class="w-100"
            href="https://www.mci.ir/prepaidtopostpaid?utm_source=fars&utm_medium=web&utm_campaign=farsetebari">
            <img class="w-100" src="/images/hamraheaval-103.gif" alt="همراه اول" />
        </a>
        <span class="close">
            <span aria-hidden="true">&times;</span>
        </span>
    </div>

    <div class="blur d-none">
    </div>
</div>


@section('scripts')


<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/search.min.js"></script>




<script>

$('#detail').click(function(e){
    alert(':(');

});
</script>
@stop


@stop