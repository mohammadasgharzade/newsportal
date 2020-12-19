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

        <form method="get" action="/search">

            <div class=" back-search">
                <div class="container">
                    <div class="row">
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

                    <!-- <div class="row search-time" dir="rtl">
                        <div class="col-md-3 padding-normal  mt-3">
                            <div class="search-filter d-flex flex-column text-right">
                                <label>جستجو در :</label>
                                <div class="filterBody  w-100 d-flex justify-content-around">
                                    <input id="filterBody-Title" type="button" data-value="Title" value="تیتر" />
                                    <input id="filterBody-Lead" type="button" data-value="Lead" value="لید" />
                                    <input id="filterBody-Body" type="button" data-value="Body" value="خبر" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 padding-normal  mt-3">
                            <div class="search-filter d-flex flex-column text-right">
                                <label>جستجو در زمان :</label>
                                <div class="filterTime w-100 d-flex justify-content-around">
                                    <input id="filterTime-all" type="button" data-value="all" value="همه زمان ها" />
                                    <input id="filterTime-today" type="button" data-value="today" value="امروز" />
                                    <input id="filterTime-lastWeek" type="button" data-value="lastWeek"
                                        value="هفته اخیر" />
                                    <input id="filterTime-oneMonth" type="button" data-value="oneMonth"
                                        value="یک ماه" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 padding-normal  mt-3">
                            <div class="search-filter d-flex flex-column text-right">
                                <label>از تاریخ :</label>
                                <div class=" calender w-100 d-flex justify-content-around">
                                    <input id="fromDate" class="text-center w-100" type="text" value="" name="from"
                                        autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 padding-normal  mt-3">
                            <div class="search-filter d-flex flex-column text-right">
                                <label>تا تاریخ :</label>
                                <div class=" calender w-100 d-flex justify-content-around">
                                    <input id="endDate" class="text-center w-100" type="text" value="" name="end"
                                        autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>

        </form>


        <div class="boxItems">
            <div class="container">
                <div class="row">
                <div class="col-md-12 px-0">

                <div id="dynamic_card">
                    @if($searchinfo)           
                    @if(count($posts) > 0)
                        @foreach($posts as $item)               
                        <div class="searchItemBox w-100 d-flex my-2 ">
                                    <div class="imgSearchItem w-25 d-flex align-items-center py-3 pr-3">
                                        <a href="{{url('article')}}/{{$item->slug}}">
                                            <img src="{{asset($item->cover)}}" class="w-100">
                                        </a>
                                    </div>
                                    <div class="searchItem w-75 text-right px-3">
                                        <a href="{{url('article')}}/{{$item->slug}}">
                                            <h3 class="mt-4">{{$item->title}}</h3>
                                        </a>
                                        <p>
                                        {!! Str::limit($item->meta,100) !!}
                                        </p>
                                        <ul>
                                            @foreach($item->tags as $tag)
                                                        <li>
                                                            <a href="#">{{$tag->name}}</a>
                                                        </li>
                                            @endforeach          
                                        </ul>
                                    <span>{{$item->created_at->diffForHumans()}}</span>
                          </div>



                        </div>
                        @endforeach

                
                    @else
                            <div class="alert alert-danger text-center mt-3">
                                خبری یافت نشد
                            </div>

                    @endif
                    @endif
                    
             </div> 

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


<script type="text/javascript">
    $('body').on('keyup', '#search-posts', function () {
        var searchQuesr = $(this).val();
        console.log(searchQuesr);
        $.ajax({
            method: 'POST',
            url: '{{route("search_post")}}',
            dataType: 'json',
            data: {
                '_token': '{{ csrf_token() }}',
                searchQuesr: searchQuesr
            },
            success: function (res) {
                var cardrow = '';
                $('#dynamic_card').html('');
                $.each(res, function (index, value) {
                    cardrow = '<div class="searchItemBox w-100 d-flex my-2"><div class="imgSearchItem w-25 d-flex align-items-center py-3 pr-3"><a href="/article/'+value.slug+'"><img src="'+ value.cover +'" class="w-100"></a></div><div class="searchItem w-75 text-right px-3"><a href="/article/'+value.slug+'"><h3 class="mt-4">'+value.title+'</h3></a><p>'+value.meta+'</div></div> ';
                    $('#dynamic_card').append(cardrow);
                });

            }
        });
    });
</script>

<script>

$('#detail').click(function(e){
    alert(':(');

});
</script>
@stop


@stop