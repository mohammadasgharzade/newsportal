@extends('layouts.frontend.master')

<!-- ################################################# Head ################################################## -->
@section('head')
@include('frontend.articlefolder.article_head')
@stop

<!-- ################################################# Content ################################################## -->

@section('content')

<body>

    <div class="main-content  position-relative">
        <main>
            <div class="container position-relative">
                <span class="date position-absolute">{{$today}}</span>
            </div>






            <div class="container pt-4">
                <div class="row">
                    <div class="col-12 col-lg-8 d-flex pr-3 pr-sm-0 pl-sm-0">
                        <div class="news-box w-100">
                            <div class="nt-frame">
                                <div class="d-flex w-100 flex-column-reverse flex-sm-row">
                                    <div class="w-100">
                                        <div
                                            class="header py-2 mb-4 d-flex flex-wrap justify-content-between align-items-center text-right px-2 border-bottom">
                                            <h2 class="category-name d-flex justify-content-center">
                                                <span></span>
                                                <!-- #################################### newsHeadBoard ########################## -->
                                                <span>
                                                    @foreach($post->categories()->whereNotIn('title',['اخبار ویژه'])->get() as $item)
                                                    <a href="{{url('category')}}/{{$item->slug}}" target="_blank">
                                                       . {{$item->title}}
                                                    </a>
                                                   
                                                    @endforeach


                                                </span>
                                                <span>
                                                    &nbsp;&raquo;&nbsp;
                                                </span>
                                                <span>
                                                    @foreach($post->subcategories as $item)
                                                    <a href="{{url('category')}}/{{$item->slug}}" target="_blank">

                                                        {{$item->title}} .
                                                    </a>
                                                    @endforeach

                                                </span>
                                            </h2>

                                            <div itemprop="datePublished"
                                                class="publish-time d-flex justify-content-center">
                                                <time datetime="" style="font-size: 15px;">{{$post->created_at}}</time>
                                            </div>


                                            <div class="print-surl d-flex align-items-center justify-content-center">
                                                <div class="print ml-2">
                                                    <a href="/printnews/13990815000189" target="_blank">
                                                        <span class="oi oi-print"></span>
                                                    </a>
                                                </div>
                                                <div class="short-url position-relative">
                                                    <span class="oi oi-link-intact mr-1"></span>
                                                    <div class="position-absolute justify-content-between d-none">
                                                        <button class="btn btn-link btn-copy p-0"
                                                            data-clipboard-target="#surl" title="کپی"
                                                            data-toggle="tooltip" data-placement="right">
                                                            <span class="oi oi-clipboard"></span>
                                                        </button>
                                                        <span id="surl">http://fna.ir/f0ot65</span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="cmnt-other d-flex flex-wrap align-items-center justify-content-center">
                                                <div class="cmnt-count ml-3 d-flex align-items-center ml-4">
                                                    <a class="d-flex align-items-center" href="#show-comments">
                                                        <span class="oi oi-comment-square ml-1"></span>
                                                        <span class="num"
                                                            style="font-size: 15px;">{{$allcomments}}</span>
                                                    </a>
                                                </div>
                                                <div class="font-size d-flex align-items-center">
                                                    <span class="plus-minus ml-2"><span
                                                            class="oi oi-plus"></span></span>
                                                    <span class="oi oi-pencil"></span>
                                                    <span class="plus-minus mr-2"><span
                                                            class="oi oi-minus"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ############################################################### خبر ##################################################### -->
                                        <div class="news-data d-flex flex-column text-right">
                                            <div class="top">
                                                <span class="headline d-block mb-1"></span>
                                                <h1 itemprop="headline" class="title mb-2 d-block text-justify">
                                                    {{$post->title}}
                                                </h1>
                                                <p itemprop="description" class="lead p-2 text-justify">
                                                    <span class="news-template" style="color:#ff8000"></span>
                                                    {{$post->meta}}

                                                </p>
                                                <figure> <img itemprop="thumbnailUrl" class="w-100"
                                                        src="{{asset($post->cover)}}" alt="{{$post->title}}"></figure>
                                            </div>
                                        </div>
                                        <div class="social-share-mob d-block d-lg-none">
                                            <ul class="d-flex flex-wrap justify-content-center w-100 mt-3 ltr">
                                            <li class="whatsapp" share-id="1">
                                <a data-toggle="tooltip" title="اشتراک در واتس اپ"
                                    href="whatsapp://send?text=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    data-action="share/whatsapp/share" target="_blank"></a>
                            </li>

                            <li class="gmail" share-id="2">
                                <a data-toggle="tooltip" title="اشتراک در جی میل"
                                    href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&body=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>

                            <li class="telegram" share-id="3">
                                <a data-toggle="tooltip" title="اشتراک در تلگرام"
                                    href="https://t.me/share/url?url=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>

                            <li class="twitter" share-id="4">
                                <a data-toggle="tooltip" title="اشتراک در توییتر"
                                    href="https://twitter.com/share?url=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>
                            <li class="fb" share-id="5">
                                <a data-toggle="tooltip" title="اشتراک در فیسبوک"
                                    href="http://www.facebook.com/sharer.php?u=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                <div itemprop="articleBody" class="nt-body text-right mt-4">
                                    <p class="rtejustify">{!! $post->descryption !!}</p>
                                    <p class="rtejustify">انتهای پیام/</p>
                                    <span class="news-reporter"></span>
                                    <span class="news-approver"></span>
                                </div>

                                <!-- ##################### تگ ها ####################### -->
                                <div class="tags mt-4 text-right d-flex flex-wrap">

                                    @foreach($post->tags as $item)
                                    <a class="ml-2 mb-2" href="{{url('tag')}}/{{$item->id}}" target="_blank">
                                        {{$item->name}}
                                    </a>
                                    @endforeach
                                </div>
                                <div id="parent-campaigns">

                                </div>

                                <!-- ############################################################################ related ############################################ -->

                                <div class="rel-news mt-4">
                                    <h2 class="title py-1 mb-2 d-flex align-items-center">
                                        اخبار مرتبط
                                    </h2>

                                    <ul class="d-flex flex-column">
                                        @if($related)
                                        @foreach($related->posts()->take(3)->get() as $item)
                                        <li class="py-2 border-bottom">
                                            <a class="d-flex text-justify justify-content-between flex-wrap"
                                                href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                                <div class="d-flex">
                                                    <span class="diamond position-relative ml-3 mt-2">
                                                        <span class="oi oi-caret-top position-absolute">
                                                        </span>
                                                        <span class="oi oi-caret-bottom position-absolute">
                                                        </span>
                                                    </span>
                                                    <h3>
                                                        {{ Str::limit($item->title,60)}}
                                                    </h3>

                                                </div>

                                                <time class="mr-3">
                                                    {{$item->created_at}}
                                                    <!-- ->diffForHumans() -->
                                                </time>
                                            </a>
                                        </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>

                            </div>
                            <div class="d-flex flex-wrap mt-4">
                                <div
                                    class="a2a_kit a2a_kit_size_32 a2a_default_style col-12 col-sm-6 d-none d-sm-flex align-items-center justify-content-center">
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_google_plus"></a>
                                    <a class="a2a_button_linkedin"></a>
                                    <a class="a2a_button_telegram"></a>
                                    <a class="a2a_button_email"></a>
                                    <a class="a2a_button_google_gmail"></a>
                                    <a class="a2a_button_yahoo_mail"></a>
                                </div>
                                <div class="share d-flex col-12 col-sm-6 pl-0">
                                    <div data-toggle="tooltip" title="کپی"
                                        class="short-url w-100 d-flex justify-content-center align-items-center p-3 btn-copy"
                                        data-clipboard-target="#surl2">
                                        <span id="surl2">http://fna.ir/f0ot65</span>
                                        <span class="oi oi-link-intact mr-1"></span>
                                    </div>
                                </div>


                            </div>

                            <!-- ################################### Ads ########################### -->

                    @if($sidebar_bottom)
                            <div id="mediaad-cTtF" class="mt-3" style="display: inline-block; width:100%;">
                                <div class="mediaad-bnr-container-728">
                                    <a href="{{$sidebar_bottom->url}}"
                                        target="_blank" rel="nofollow">
                                        <img class="mediaad-bnr-img" style="width:100%; height: 100%;"
                                            src="{{asset($sidebar_bottom->image)}}"
                                            width="100%">
                                 </a>
                                </div>
                               
                            </div>
                    @endif
                            <!-- ######################################################################## مطالب پیشنهادی ################################################## -->

                            <div class="yn-bnr w-100 mt-3">
                                <div class="offercontent">

                                    <h4 class="offercontent_head"><i class="fa fa-save"></i> مطالب پیشنهادی</h4>

                                </div>
                                <div class="row">
                                    @foreach($content->take(6) as $item)



                                    <div class="col-md-4">
                                        <div class="card mb-2 box-shadow">
                                            <a href="{{$item->url}}">
                                                <img class="card-img-top"
                                                    style="width:100%; height: 200px; background-size: cover;"
                                                    src="{{asset($item->cover)}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" style="text-align: right; font-weight: bold;">
                                                        {{Str::limit($item->title,30) }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--  <a href="{{$item->url}}">
                                         <img src="{{asset($item->cover)}}" alt="{{$item->title}}" style="width:100%">
                                         <p class="pull-right" style="font-weight: bold;">{{$item->title}}</p>
                                     </a> -->


                                @endforeach
                            </div>
                        </div>

                        <!-- ####################################################### Comments ########################################## -->

                        <div id="comments" class="comments d-flex flex-column mt-4">
                            <div class="title px-2 py-1 d-flex align-items-center">
                                <span class="oi oi-comment-square ml-5"></span>
                                نظرات
                            </div>
                            <div class="desc d-flex flex-column my-2">
                                <span>دیدگاه های ارسال شده توسط شما، پس از تایید توسط خبرگزاری فارس در وب سایت منتشر
                                    خواهد شد</span>
                                <span>پیام هایی که حاوی تهمت یا افترا باشد منتشر نخواهد شد</span>
                            </div>

                            <div class="send-comment">
                                <form action="{{route('comment.add')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    <div class="form-group w-100">
                                        <textarea class="form-control" rows="5" id="Text"
                                             data-val="true"
                                            data-val-required="&#x644;&#x637;&#x641;&#x627; &#x646;&#x638;&#x631; &#x62E;&#x648;&#x62F; &#x631;&#x627; &#x62B;&#x628;&#x62A; &#x646;&#x645;&#x627;&#x6CC;&#x6CC;&#x62F;"
                                            name="text">
                                            </textarea>
                                    </div>
                                    <div class="d-flex flex-wrap align-content-between">
                                        <div class="input-group mb-3 col-12 col-sm-6 pr-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <span
                                                        class="oi oi-person"></span></span>
                                            </div>
                                            <input type="text" id="name" class="form-control"
                                                placeholder="نام و نام خانوادگی" name="name" value="">
                                        </div>

                                        <div class="input-group mb-3 col-12 col-sm-6 pl-0">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span
                                                        class="oi oi-envelope-closed"></span></span>
                                            </div>
                                            <input type="email" id="email" class="form-control" placeholder="آدرس ایمیل"
                                                name="email" value="">
                                        </div>

                                        <div class="col-md-6  mb-2 pr-0 d-flex align-items-center">
                                            <div class="captcha">
                                                <div class="form-group refereshrecapcha" style="display: inline;">
                                                    {!! captcha_img('math') !!}
                                                </div>
                                                <a href="javascript:void(0)" onclick="refreshCaptcha()"
                                                    style="display: inline;">Refresh</a>
                                                <input id="captcha" style="display: inline;"
                                                    class="form-control col-md-2 pt-2 @error('captcha') is-invalid @enderror"
                                                    type="text" name="captcha">
                                                @error('captcha')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="form-group w-100">
                                            <div class="w-100 ml-2">
                                                <button type="submit" class="btn btn-success btn-submit">ارسال</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                                <!-- //# Session # -->
                                @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session('message')}}
                                </div>
                                @endif

                                <!-- //# Error # -->
                                @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <hr>
                                <ul>
                                    <li class="btn btn-danger">{{$error}}</li>
                                </ul>

                                @endforeach
                                @endif
                            </div>

                            <!-- ######################################## Reply ############################### -->

                            <div class="modal fade" id="reply-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{route('reply.add',46)}}" method="POST" id="formform">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                                <input type="hidden" name="parent_id" id="hid_comment_id">
                                                <div class="form-group w-100">
                                                    <textarea class="form-control" rows="5" id="text"
                                                        placeholder="نظرتان را بیان کنید" data-val="true"
                                                        data-val-required="&#x644;&#x637;&#x641;&#x627; &#x646;&#x638;&#x631; &#x62E;&#x648;&#x62F; &#x631;&#x627; &#x62B;&#x628;&#x62A; &#x646;&#x645;&#x627;&#x6CC;&#x6CC;&#x62F;"
                                                        name="text">
</textarea>
                                                </div>
                                                <div class="d-flex flex-wrap align-content-between">
                                                    <div class="input-group mb-3 col-12 col-sm-6 pr-0">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <span
                                                                    class="oi oi-person"></span></span>
                                                        </div>
                                                        <input type="text" id="name" class="form-control"
                                                            placeholder="نام و نام خانوادگی" name="name" value="">
                                                    </div>

                                                    <div class="input-group mb-3 col-12 col-sm-6 pl-0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><span
                                                                    class="oi oi-envelope-closed"></span></span>
                                                        </div>
                                                        <input type="email" id="email" class="form-control"
                                                            placeholder="آدرس ایمیل" name="email" value="">
                                                    </div>

                                                    <div class="col-md-6  mb-2 pr-0 d-flex align-items-center">
                                                        <div class="captcha">
                                                            <div class="form-group refereshrecapcha"
                                                                style="display: inline;">
                                                                {!! captcha_img('math') !!}
                                                            </div>
                                                            <a href="javascript:void(0)" onclick="refreshCaptcha()"
                                                                style="display: inline;">Refresh</a>
                                                            <input id="captcha" style="display: inline;"
                                                                class="form-control col-md-2 pt-2 @error('captcha') is-invalid @enderror"
                                                                type="text" name="captcha">
                                                            @error('captcha')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="form-group w-100">
                                                        <div class="w-100 ml-2">
                                                            <button type="submit"
                                                                class="btn btn-success btn-submit">ارسال</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>




                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="show-comments" class="show-comments">


                                @foreach($post->comments->whereNull('parent_id') as $comment)
                                <div class="mb-3 item" data-id="5fbe98603fba300954cc8651">

                                    <div class="d-flex flex-column p-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="name">{{$comment->name}}</span>
                                            <span class="date">{{$comment->created_at}}</span>
                                        </div>
                                        <span class="commentText">
                                            {{$comment->text}}
                                        </span>
                                        <div class="reply-btn">
                                            <div class="reply-like d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <span class="oi oi-share ml-1 mt-1"></span>
                                                    <button type="button" class="open-reply-modal btn comment_id"
                                                        data-id="{{ $comment->id }}" data-toggle="modal"
                                                        data-target="#reply-modal">
                                                        پاسخ
                                                    </button>
                                                </div>
                                                <div class="like-box">
                                                    <span class="ml-1 like-count">0</span>
                                                    <span class="oi oi-heart" data-id="5fbe98603fba300954cc8651"
                                                        data-count="0"></span>
                                                </div>

                                            </div>
                                        </div>
                                        @include('frontend.articlefolder.replypartial', ['comments' =>
                                        $comment->replies])

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                    </div>





                    <div class="social-share col-1 d-none d-lg-block">
                        <ul class="d-flex align-items-center flex-column ltr">

                            <li class="whatsapp" share-id="1">
                                <a data-toggle="tooltip" title="اشتراک در واتس اپ"
                                    href="whatsapp://send?text=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    data-action="share/whatsapp/share" target="_blank"></a>
                            </li>

                            <li class="gmail" share-id="2">
                                <a data-toggle="tooltip" title="اشتراک در جی میل"
                                    href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&body=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>

                            <li class="telegram" share-id="3">
                                <a data-toggle="tooltip" title="اشتراک در تلگرام"
                                    href="https://t.me/share/url?url=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>

                            <li class="twitter" share-id="4">
                                <a data-toggle="tooltip" title="اشتراک در توییتر"
                                    href="https://twitter.com/share?url=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>
                            <li class="fb" share-id="5">
                                <a data-toggle="tooltip" title="اشتراک در فیسبوک"
                                    href="http://www.facebook.com/sharer.php?u=http://www.farsnews.ir/news/13990815000189/%D8%AF%D9%88%D9%84%D8%AA-%D8%A8%D8%B9%D8%AF%DB%8C-%D8%A2%D9%85%D8%B1%DB%8C%DA%A9%D8%A7-%D8%A8%D8%B1%D8%A7%D8%A8%D8%B1-%D9%85%D8%B1%D8%AF%D9%85-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%D8%AA%D8%B3%D9%84%DB%8C%D9%85-%D9%85%DB%8C%E2%80%8C%D8%B4%D9%88%D8%AF-%D9%85%DB%8C%E2%80%8C%D8%AA%D9%88%D8%A7%D9%86%DB%8C%D9%85-%D8%AF%D8%B4%D9%85%D9%86%D8%A7%D9%86-%D8%B1%D8%A7"
                                    target="_blank"></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-12 col-lg-4 float-right mt-3 mt-md-0 d-flex pl-3 px-sm-0">
                    <div class="col-12 col-lg-9 pr-0">



                        <section class="mt-3 most">

                            <div class="section-title d-flex mb-1 justify-content-between align-items-center">
                                <h2 class="title">پر بازدید ها</h2>
                                <span class="arrow px-1">
                                    <span class="oi oi-chevron-bottom"></span>
                                </span>
                            </div>

                            <div class="most-visit news-list-small">
                                <ul class="list-unstyled w-100">
                                @if(count($most_view) > 0)
                                                @foreach($most_view->take(10) as $item)
                                                <li
                                                    class="text-right py-1 px-3 word-wrap d-flex align-items-center title">
                                                    <span
                                                        class="diamond position-relative ml-3 mt-0 d-flex float-right"><span
                                                            class="oi oi-caret-top position-absolute"></span><span
                                                            class="oi oi-caret-bottom position-absolute"></span></span><span
                                                        class="oi  ml-1 mt-0 "></span>
                                                    <h3><a class="d-flex"
                                                            href="{{url('article')}}/{{$item->slug}}"
                                                            target="_blank">
                                                            {{$item->title}}
                                                        </a></h3>
                                                </li>
                                                @endforeach
                                                @endif
                                </ul>
                            </div>



                            <div
                                class="section-title d-flex mb-1 justify-content-between align-items-center mt-3 w-100">
                                <h2 class="title">پر بحث ترین ها</h2>
                                <span class="arrow px-1">
                                    <span class="oi oi-chevron-bottom">
                                    </span>
                                </span>
                            </div>

                            <div class="most-comment news-list-small">
                                <ul class="list-unstyled w-100">
                                @if(count($most_comment) > 0)
                                                @foreach($most_comment->take(10) as $item)
                                                <li
                                                    class="text-right py-1 px-3 word-wrap d-flex align-items-center title">
                                                    <span
                                                        class="diamond position-relative ml-3 mt-0 d-flex float-right"><span
                                                            class="oi oi-caret-top position-absolute"></span><span
                                                            class="oi oi-caret-bottom position-absolute"></span></span><span
                                                        class="oi  ml-1 mt-0 "></span>
                                                    <h3><a class="d-flex"
                                                            href="{{url('article')}}/{{$item->slug}}"
                                                            target="_blank">
                                                            {{$item->title}}
                                                        </a></h3>
                                                </li>
                                                @endforeach
                                                @endif
                                </ul>
                            </div>



                            <div class="section-title d-flex mb-1 justify-content-between align-items-center mt-3">
                                <h2 class="title">برگزیده ها </h2>
                                <span class="arrow px-1">
                                    <span class="oi oi-chevron-bottom"></span>
                                </span>
                            </div>

                            <div class="most-shared news-list-small">
                                <ul class="list-unstyled w-100">
                                @if(count($bargozideha->posts) > 0)
                                                @foreach($bargozideha->posts()->take(5)->get()  as $item)
                                                <li
                                                    class="text-right py-1 px-3 word-wrap d-flex align-items-center title">
                                                    <span
                                                        class="diamond position-relative ml-3 mt-0 d-flex float-right"><span
                                                            class="oi oi-caret-top position-absolute"></span><span
                                                            class="oi oi-caret-bottom position-absolute"></span></span><span
                                                        class="oi  ml-1 mt-0 "></span>
                                                    <h3><a class="d-flex"
                                                            href="{{url('article')}}/{{$item->slug}}"
                                                            target="_blank">
                                                            {{$item->title}}
                                                        </a></h3>
                                                </li>
                                                @endforeach
                                                @endif
                                </ul>
                            </div>


                            <div id="pos-article-display-13394 mt-3"></div>

                            <!-- ###########################################################################  بازار ############################################################################# -->

                            <div class="ads-native">
                                <div class="title-box d-flex justify-content-between align-items-center mt-3 px-2">
                                    <span class="title">بازار</span>
                                    <img src="/images/globe.png" alt="globe" />
                                </div>

                                <div class="news-list-small">
                                    <ul class="list-unstyled w-100">
                                        <li class="border-bottom text-justify py-2 d-flex align-items-center title">
                                            <a class="d-flex flex-column justify-content-center align-items-center"
                                                href="http://alamotsport.com/fa" target="_blank">
                                                <img class="w-100 d-block"
                                                    src="https://media.farsnews.ir//Uploaded/Files/Images/1399/07/16/13990716000402_Test_PhotoO.jpeg"
                                                    alt="وسیله ورزشی خونتو از اینجا انتخاب کن" />
                                                <span class="d-block text-center pt-2">وسیله ورزشی خونتو از اینجا
                                                    انتخاب کن</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </div>







                            <div class="widgets d-flex flex-column w-100">
                                <ul class="d-flex flex-wrap w-100 justify-content-around my-2">
                                    <li data-toggle="tooltip" title="تلفن همراه" class="mobile">
                                        <a href="#" target="_blank"></a>
                                    </li>

                                    <li data-toggle="tooltip" title="ارز" class="curreny"><a href="#"
                                            target="_blank"></a></li>
                                    <li data-toggle="tooltip" title="خودروهای داخلی" class="interior-cars"><a href="#"
                                            target="_blank"></a></li>
                                    <li data-toggle="tooltip" title="طلا و سکه" class="gold">
                                        <a href="#" target="_blank"></a>
                                    </li>
                                    <li data-toggle="tooltip" title="بورس" class="bource">
                                        <a href="#" target="_blank"></a>
                                    </li>

                                    <li data-toggle="tooltip" title="بیشتر" class="more">
                                        <a href="#more-widgets" data-toggle="collapse"></a>
                                    </li>

                                </ul>

                                <div class=" collapse" id="more-widgets">
                                    <ul class="d-flex flex-wrap w-100 justify-content-around">
                                        <li data-toggle="tooltip" title="لیگ فوتبال" class="leagues"><a href="#"
                                                target="_blank"></a></li>

                                        <li data-toggle="tooltip" title="خودرو خارجی" class="foreign-cars">
                                            <a href="#" target="_blank"></a>
                                        </li>

                                        <li data-toggle="tooltip" title="دوربین عکاسی" class="camera">
                                            <a href="#" target="_blank"></a>
                                        </li>
                                        <li data-toggle="tooltip" title="کنسول بازی" class="console">
                                            <a href="#" target="_blank"></a>
                                        </li>
                                        <li data-toggle="tooltip" title="مصالح ساختمانی" class="construction">
                                            <a href="#" target="_blank"></a>
                                        </li>
                                        <li data-toggle="tooltip" title="لپ تاپ" class="laptop">
                                            <a href="#" target="_blank"></a>
                                        </li>
                                    </ul>

                                    <ul class="d-flex flex-wrap w-100 justify-content-around my-2">
                                        <li class="exc"></li>

                                        <li data-toggle="tooltip" title="آهن آلات" class="metal-iron">
                                            <a href="#" target="_blank"></a>
                                        </li>
                                        <li data-toggle="tooltip" title="کالاهای عمومی" class="global-products">
                                            <a href="#" target="_blank"></a>
                                        </li>

                                        <li data-toggle="tooltip" title="تبلت" class="tablet">
                                            <a href="#" target="_blank"></a>
                                        </li>
                                        <li data-toggle="tooltip" title="تلویزیون" class="tv">
                                            <a href="#" target="_blank"></a>
                                        </li>
                                        <li class="exc"></li>

                                    </ul>

                                </div>
                            </div>





                            <!-- ########################### اخبار کسب و کار ######################### -->

                            <div class="work_title">
                                <div class="title-box d-flex justify-content-between align-items-center px-2 py-1">
                                    <span class="work_title">اخبار کسب و کار</span>
                                    <img src="{{asset('/images/worklogo.jpg')}}">
                                </div>

                                <div class="news-list-small">
                                    <ul class="list-unstyled w-100">
                                        @if($business->posts)
                                        @foreach($business->posts()->orderby('id','DESC')
                                        ->take(6)->get() as $item)
                                        <li
                                            class="border-bottom text-justify px-3 py-2 d-flex align-items-center title">
                                            <a class="d-flex align-items-center"
                                                href="{{url('article')}}/{{$item->slug}}" target="_blank">
                                                <img class="col-5 pr-0" src="{{asset($item->cover)}}"
                                                    alt="{{$item->title}}" />
                                                {{ Str::limit($item->title,80)}} </a>
                                        </li>

                                        @endforeach
                                        @endif
                                    </ul>
                                </div>

                            </div>


                        </section>
                    </div>
                    <div class="col-3 d-none d-lg-inline-block p-0">
<!-- ################################### Ads ########################### -->
                        @if(count($sidebar_top)>0)
                        @foreach($sidebar_top as $item)
                        <a href="{{$item->url}}" target="_blank">
                            <img class="mb-2 w-100 border" style="height: 100px;" src="{{asset($item->image)}}"
                                alt="" />
                        </a>
                        @endforeach
                        @endif





                    </div>

                </div>
            </div>
    </div>


    <input id="CategoryId" name="CategoryId" type="hidden" value="1" />
    <input id="SubCategoryId" name="SubCategoryId" type="hidden" value="52" />
    <input id="StoryCode" name="StoryCode" type="hidden" value="13990815000189" />
    <input id="StoryId" name="StoryId" type="hidden" value="4893351" />
    <input id="StoryPublishDate" name="StoryPublishDate" type="hidden" value="11/5/2020 11:08:06 AM" />
    <input id="ParentId" name="ParentId" type="hidden" value="0" />
    <input id="DontShowImg" name="DontShowImg" type="hidden" value="False" />
    <input id="brwsname" name="brwsname" type="hidden"
        value="Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36" />
    <input id="RefererPage" name="RefererPage" type="hidden" value="" />
    <input id="IsOther" name="IsOther" type="hidden" value="False" />
    <input id="Reporter" name="Reporter" type="hidden" value="" />
    <input id="Publisher" name="Publisher" type="hidden" value="" />



    <script id="related-campaigns" type="text/x-handlebars-template">

        <section class="related-campaign d-flex justify-content-between align-items-center  p-3 mt-4">
        <div class="w-75 d-flex justify-content-center align-items-start flex-column info">
            <span class="sub">این مطلب را هم از دست ندهید</span>
            <h5><a href="@{{Camp.Page_Path}}" target="_blank"></a></h5>
            <div class="d-flex justify-content-start align-items-center items">
                <span class="ml-3">
                    <i class="oi oi-map-marker"></i>
                    تهران
                </span>
                <span class="ml-3">
                    <i class="oi oi-clock"></i>
                    در انتظار حمایت بیشتر
                </span>
                <span class="ml-3">
                    <i class="oi oi-timer"></i>
                   
                </span>
            </div>
        </div>
        <div class="w-25 d-flex justify-content-center align-items-center ">

            <span class="count"></span>
            <span class="like"><a href="https://gw.farsnews.ir/Api-Apps/Set/Sign/Set/0/@{{Camp.StoryId}}"><img src="/images/like-myfars.png" /></a> </span>

        </div>
    </section>
</script>


    <script id="comments-children-template" type="text/x-handlebars-template">
        <div class="border-bottom pb-3 mb-3 reply-item position-relative" data-id="">
        <span class="oi oi-caret-top position-absolute"></span>
        <div class="d-flex flex-column p-3">
            <div class="d-flex justify-content-between">
                <span class="name"><span> در پاسخ </span></span>
                <span class="date"></span>
            </div>
            <span class="cmnt my-3"></span>
            <div class="reply-like d-flex justify-content-between align-items-center">
                <div class="reply-btn">
                    <span class="oi oi-share ml-1 mt-1"></span>
                    <button type="button" class="open-reply-modal btn" data-toggle="modal" data-target="#reply-modal" data-id="">پاسخ</button>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="like-box">
                        <span class="ml-1 like-count"></span><span class="oi oi-heart" data-id="" data-count=""></span>
                    </div>
                </div>

            </div>

        </div>
    </div>

  

</script>


    <script id="comments-template" type="text/x-handlebars-template">

        <div class="border-bottom mb-3 item" data-id="">

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






    </main>
    <div class="w-100 bottom-banner d-none">
        <a target="_blank" class="w-100"
            href="https://shop.mci.ir/simcard/general/prepaid?utm_source=mci&utm_medium=banner&utm_campaign=etebari&utm_term=etebarii">
            <img class="w-100" src="/images/hamraheaval-104.gif" alt="همراه اول" />
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

    <!-- ################################################# Scripts ################################################## -->

    @section('scripts')
    @include('frontend.articlefolder.article_scripts')
    @stop