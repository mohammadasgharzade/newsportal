 <header class="">
     <div class="container px-0 position-relative d-flex justify-content-between align-items-center py-2">
         <div class="logo-right d-flex position-relative">
             <a class="w-100" href="https://www.farsnews.ir/">
             </a>
         </div>

         <div class="logo-right-small position-relative d-none">
             <a class="w-100" href="">
             </a>
         </div>

         <nav class="man-menu-box mx-2 d-none d-lg-flex h-100 align-items-center">

             <ul class="main-menu d-flex align-items-center list-unstyled">
             @if(count($categories)>0)
            @foreach($categories as $key=>$cat)

             @if($key == 0)
                 <li>
                     <a class="d-none d-lg-inline" href="/" style="color: rgb(255, 128, 0);">{{$cat->title}}</a>
                     <a class="d-inline d-lg-none mt-1" href="/" style="color: rgb(255, 128, 0);"><span
                             class="oi oi-home"></span></a>
                     <div style="display: none; opacity: 0;">
                         <ul>
                            @foreach($cat->subcategories as $key=>$subcat)
                            @if($key >= 0 && $key < 4)
                            <li><a href="{{url('subcategory')}}/{{$subcat->slug}}" style="font-size: 13px;">{{$subcat->title}}</a></li>
                             @endif
                            @endforeach
                         </ul>
                         <ul>
                         @foreach($cat->subcategories as $key=>$subcat)
                            @if($key >= 4 && $key <= 9)
                            <li><a href="{{url('category')}}/{{$subcat->slug}}" style="font-size: 13px;">{{$subcat->title}}</a></li>
                             @endif
                            @endforeach
                         </ul>
                         <ul>
                         @foreach($cat->subcategories as $key=>$subcat)
                            @if($key >= 10 && $key <= 15)
                            <li><a href="{{url('category')}}/{{$subcat->slug}}" style="font-size: 13px;">{{$subcat->title}}</a></li>
                             @endif
                            @endforeach
                         </ul>
                     </div>
                 </li>
                @endif
            @endforeach
            @endif

            @if(count($categories)>0)
            @foreach($categories as $key=>$cat)
            @if($key > 0)
                 <!-- # get the Images Category # -->
                @if($cat->title == 'عکس')
                <li>
                    <a href="{{url('imagecat')}}" style="font-size: 13px;">{{$cat->title}}</a>
                    <div style="top: 21px; display: none; opacity: 0;">
                        <ul>

                            @foreach($cat->subcategories as $subcat)
                            <li><a href="{{url('singleimagecat')}}/{{$subcat->slug}}" style="font-size: 13px;">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @elseif($cat->title == 'فیلم')

                <li>
                    <a href="{{url('videocat')}}" style="font-size: 13px;">{{$cat->title}}</a>
                    <div style="top: 21px; display: none; opacity: 0;">
                        <ul>

                            @foreach($cat->subcategories as $subcat)
                            <li><a href="{{url('videocat')}}" style="font-size: 13px;">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                @else

                <li>
                    <a href="{{url('category')}}/{{$cat->slug}}" style="font-size: 13px;">{{$cat->title}}</a>
                    <div style="top: 21px; display: none; opacity: 0;">
                        <ul>
                           <li><a href="{{url('category')}}/{{$cat->title}}" style="font-size: 13px;">صفحه اصلی گروه</a></li>
                            @foreach($cat->subcategories as $subcat)
                            <li><a href="{{url('category/subcategory/')}}/{{$subcat->slug}}" style="font-size: 13px;">{{$subcat->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endif
                @endif
            @endforeach
            @endif
         </nav>

         <div class="left-box d-flex align-items-center">
             <div class="desktop d-inline-block d-lg-none w-50 d-flex justify-content-start mx-2">
                 <span class="oi oi-monitor ml-1"></span>
                 <span class="text align-self-end">
                     نسخه اصلی
                 </span>
             </div>

             <div class="search-box mx-2 mt-1">
                 <div class="expander">
                     <span class="oi oi-magnifying-glass"></span>
                     <span class="oi oi-x d-none"></span>
                 </div>
                 <div class="search-bar col-auto position-absolute">
                     <form action="/search" method="GET">
                         <div class="input-group mb-2">
                             <button type="submit">
                                 <span class="oi oi-magnifying-glass"></span>
                             </button>
                             <input type="text" class="search form-control" name="q" placeholder="جستجو">
                         </div>
                     </form>
                 </div>
             </div>

             <div class="dropdown lang mt-1 mx-1">
                 <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                 </button>
                 <div class="dropdown-menu">
                     <a class="dropdown-item" href="http://af.farsnews.ir/">افغانستان</a>
                     <a class="dropdown-item" href="http://ar.farsnews.ir/">العربیة</a>
                     <a class="dropdown-item" href="http://en.farsnews.ir/">English</a>
                     <a class="dropdown-item" href="http://tr.farsnews.ir/">Türkçe</a>
                 </div>
             </div>

             <div class="menu-expander mx-2">
                 <span class="oi oi-menu"></span>
                 <span class="oi oi-x d-none"></span>
             </div>

         </div>
        
         <div class="logo-left d-flex position-absolute">
             @if($setting->image)
             <img src="/settings/{{$setting->image}}" alt="roozname logo" style="width: 100%;">
             @endif
          
         </div>

         <div class="logo-left-small d-none position-absolute">
             <a class="w-100" href="">
             </a>
         </div>


     </div>

     <div class="nav-space">
     </div>


 </header>

 <div class="nav-menu  links p-3 d-none">
    <div class="container d-flex flex-column">
        <div class="search my-3 d-none">
            <form action="https://search.farsnews.ir/" method="GET">
                <div class="input-group ltr">
                    <div class="input-group-prepend">
                        <button type="submit">
                            <span class="oi oi-magnifying-glass ml-1"></span>
                        </button>
                    </div>

                    <input type="text" name="q" class="form-control text-right py-0" placeholder="جستجو">
                </div>
            </form>
        </div>

        <div class="social-box d-flex flex-column align-items-center mt-2 mb-4">
            <div class="social">
                <ul class="list-unstyled social-group">
                    @if($setting->social)
                    @foreach($setting->social as $key=>$social)
                    <li><a href="{{$urls[$key]}}" class="social-icon" style="color: white;"><i
                                class="fa fa-{{$icons[$key]}}"></i></a></li>
                    @endforeach
                    @endif

                </ul>
            </div>
        </div>

        <div class="d-none d-md-block">
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
                @if($key == 8)
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
                



                @foreach($allcategory->where('id',13) as $key=>$item)
                    <div class="service">
                        <span>
                            <a href="{{route('imagecat.index')}}">{{$item->title}}</a>
                        </span>
                        <ul>
                          @foreach($item->subcategories as $subcat)
                            <li><a href="{{route('singleimage.show',$subcat->slug)}}">{{$subcat->title}}</a></li>
                          @endforeach
                        </ul>
                    </div>
                @endforeach

                @foreach($allcategory->where('id',14) as $key=>$item)

                <div class="service">
                        <span>
                            <a href="{{route('videocat.index')}}">{{$item->title}}</a>
                        </span>
                        <ul>
                          @foreach($item->subcategories as $subcat)
                            <li><a href="{{route('videocat.index')}}">{{$subcat->title}}</a></li>
                          @endforeach
                        </ul>
                    </div>
                @endforeach
                </div>


            </div>

        </div>



        <div class="d-block d-md-none">
            <div class="accordions" id="accordion">

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse0">
                            صفحه اصلی
                        </a>
                    </div>
                    <div id="collapse0" class="collapse " data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/">صفحه اصلی خبرگزاری فارس</a></li>
                                <li><a href="https://www.farsnews.ir/allstories">تیتر اخبار</a></li>
                                <li><a href="https://www.farsnews.ir/allstories/lead">تیتر و لید</a></li>
                                <li><a href="https://www.farsnews.ir/allstories/photo">تیتر، لید و عکس</a></li>
                            </ul>
                            <ul>
                                <li><a href="https://www.farsnews.ir/archive">آرشیو اخبار</a></li>
                                <li><a href="https://www.farsnews.ir/photo/archive">آرشیو عکس</a></li>
                                <li><a href="https://www.farsnews.ir/graphic/archive">آرشیو کاریکاتور و گرافیک</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/multimedia/archive">آرشیو فیلم</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ##### -->
                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse1">
                            جامعه
                        </a>
                    </div>
                    <div id="collapse1" class="collapse " data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/social">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/social/education">آموزش و پرورش</a></li>
                                <li><a href="https://www.farsnews.ir/social/public-health">بهداشت عمومی و تغذیه</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/social/medicine-spirituality">سلامت</a></li>
                                <li><a href="https://www.farsnews.ir/social/legal-judicial">حقوقی و قضایی</a></li>
                                <li><a href="https://www.farsnews.ir/social/police-events">انتظامی و حوادث</a></li>
                                <li><a href="https://www.farsnews.ir/social/environment-tourism">محیط زیست و
                                        گردشگری</a></li>
                                <li><a href="https://www.farsnews.ir/social/welfare">شهری</a></li>
                                <li><a href="https://www.farsnews.ir/social/welfare-social-harm">رفاه و آسیب های
                                        جامعه</a></li>
                                <li><a href="https://www.farsnews.ir/social/social-responsibility">مسئولیت های
                                        جامعه</a></li>
                                <li><a href="https://www.farsnews.ir/social/power-groups">گروههای توان خواه</a></li>
                                <li><a href="https://www.farsnews.ir/social/women-youth">زنان و جوانان</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="">
                         dfggfghf
                        </a>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/economy">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/economy/macroeconomics">اقتصاد کلان و بودجه</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/economy/occupation">تعاون و اشتغال</a></li>
                                <li><a href="https://www.farsnews.ir/economy/stock">بورس</a></li>
                                <li><a href="https://www.farsnews.ir/economy/banking">بیمه و بانک</a></li>
                                <li><a href="https://www.farsnews.ir/economy/civil">راه و مسکن</a></li>
                                <li><a href="https://www.farsnews.ir/economy/business">صنعت، تجارت، بازرگانی</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/economy/agriculture">کشاورزی و امور دام</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/economy/energy">نفت و انرژی</a></li>
                                <li><a href="https://www.farsnews.ir/economy/world-economy">اقتصاد بین الملل</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/economy/economic-warfare">جنگ اقتصاد</a></li>
                                <li><a href="https://www.farsnews.ir/economy/others">سایر حوزه ها</a></li>
                                <li><a href="https://www.farsnews.ir/economy/companies-news">بازار</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse3">
                            بین الملل
                        </a>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/world">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/world/europe-amercia">آمریکا و اروپا</a></li>
                                <li><a href="https://www.farsnews.ir/world/asia-pacific">شرق آسیا و اقیانوسیه</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/world/west-asia">غرب آسیا</a></li>
                                <li><a href="https://www.farsnews.ir/world/africa">آفریقا</a></li>
                                <li><a href="https://www.farsnews.ir/world/islamic-forces">محور مقاومت</a></li>
                                <li><a href="https://www.farsnews.ir/world/iran">ایران در جهان</a></li>
                                <li><a href="https://www.farsnews.ir/world/Analysis-International">تحلیل بین
                                        الملل</a></li>
                                <li><a href="https://www.farsnews.ir/foreign-policy">سیاست خارجی</a></li>
                                <li><a href="https://www.farsnews.ir/world/others">سایر حوزه ها</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse4">
                            ورزش
                        </a>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/sports">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/sports/football-iran">فوتبال ایران</a></li>
                                <li><a href="https://www.farsnews.ir/sports/football-world">فوتبال جهان</a></li>
                                <li><a href="https://www.farsnews.ir/sports/wrestling-powerlifting">کشتی و وزنه
                                        برداری</a></li>
                                <li><a href="https://www.farsnews.ir/sports/martial-arts">ورزش های رزمی</a></li>
                                <li><a href="https://www.farsnews.ir/sports/ballgames">توپ و تور</a></li>
                                <li><a href="https://www.farsnews.ir/sports/women">ورزش بانوان</a></li>
                                <li><a href="https://www.farsnews.ir/sports/world">ورزش بین الملل</a></li>
                                <li><a href="https://www.farsnews.ir/sports/video">فیلم</a></li>
                                <li><a href="https://www.farsnews.ir/sports/photo">عکس</a></li>
                                <li><a href="https://www.farsnews.ir/widgets/leagues" target="_blank">جداول لیگ</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/widgets/liveresult" target="_blank">نتایج
                                        زنده</a></li>
                                <li><a href="https://www.farsnews.ir/sports/others">سایر حوزه ها</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse5">
                            سیاست
                        </a>
                    </div>
                    <div id="collapse5" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/politics">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/politics/leadership">امام و رهبری</a></li>
                                <li><a href="https://www.farsnews.ir/politics/parties">احزاب و تشکلها</a></li>
                                <li><a href="https://www.farsnews.ir/politics/defense">امنیتی و دفاعی</a></li>
                                <li><a href="https://www.farsnews.ir/politics/government">دولت</a></li>
                                <li><a href="https://www.farsnews.ir/politics/parliament">مجلس</a></li>
                                <li><a href="https://www.farsnews.ir/politics/academic-formations">تشکل های
                                        دانشگاهی</a></li>
                                <li><a href="https://www.farsnews.ir/politics/others">سایر حوزه ها</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse7">
                            صوت و تصویر
                        </a>
                    </div>
                    <div id="collapse7" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/multimedia">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/live">پخش زنده</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse8">
                            فرهنگ
                        </a>
                    </div>
                    <div id="collapse8" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/culture">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/culture/general-culture">فرهنگ عمومی</a></li>
                                <li><a href="https://www.farsnews.ir/culture/book">کتاب و ادبیات</a></li>
                                <li><a href="https://www.farsnews.ir/culture/thought">اندیشه</a></li>
                                <li><a href="https://www.farsnews.ir/culture/quran">قرآن و فعالیت های دینی</a></li>
                                <li><a href="https://www.farsnews.ir/culture/mosque">مسجد و هیئت</a></li>
                                <li><a href="https://www.farsnews.ir/culture/hajj-pilgrimage-waqf">حج و زیارت و
                                        وقف</a></li>
                                <li><a href="https://www.farsnews.ir/culture/history">تاریخ</a></li>
                                <li><a href="https://www.farsnews.ir/culture/others">سایر حوزه ها</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse16">
                            هنر و رسانه
                        </a>
                    </div>
                    <div id="collapse16" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/arts-media">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/arts-media/media">رسانه</a></li>
                                <li><a href="https://www.farsnews.ir/arts-media/Radio-tv">رادیو و تلویزیون</a></li>
                                <li><a href="https://www.farsnews.ir/arts-media/cinema-drama">سینما و تئاتر</a></li>
                                <li><a href="https://www.farsnews.ir/arts-media/music">موسیقی و هنرهای تجسمی</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse9">
                            دفاتر منطقه ای
                        </a>
                    </div>
                    <div id="collapse9" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/regional-offices/middle-east">خاورمیانه</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/regional-offices/central-asia-russia">آسیا
                                        مرکزی و روسیه</a></li>
                                <li><a href="https://www.farsnews.ir/regional-offices/north-africa">شمال آفریقا</a>
                                </li>
                                <li><a href="http://af.farsnews.ir/">افغانستان</a></li>
                                <li><a href="https://www.farsnews.ir/regional-offices/pakistan">پاکستان</a></li>
                                <li><a href="https://www.farsnews.ir/regional-offices/others">سایر حوزه ها</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse10">
                            علم و دانشگاه
                        </a>
                    </div>
                    <div id="collapse10" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/scientific-academic">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/education">آموزش</a></li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/research">پژوهش</a></li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/culture">صنفی فرهنگی</a>
                                </li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/it">ارتباطات و فن آوری
                                        اطلاعات</a></li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/iran-science">علم و فن آوری
                                        ایران</a></li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/world-science">علم و فن
                                        آوری جهان</a></li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/knowledge">اطلاعات عمومی و
                                        دانستنی ها</a></li>
                                <li><a href="https://www.farsnews.ir/scientific-academic/others">سایر حوزه ها</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse12">
                            استانها
                        </a>
                    </div>
                    <div id="collapse12" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/province">صفحه اصلی گروه</a></li>
                            </ul>

                            <di class="d-flex flex-wrap">
                                <ul>
                                    <li><a href="https://www.farsnews.ir/azarbaijan-sharghi">آذربایجان شرقی</a></li>
                                    <li><a href="https://www.farsnews.ir/azarbaijan-gharbi">آذربایجان غربی</a></li>
                                    <li><a href="https://www.farsnews.ir/ardabil">اردبیل</a></li>
                                    <li><a href="https://www.farsnews.ir/isfahan">اصفهان</a></li>
                                    <li><a href="https://www.farsnews.ir/alborz">البرز</a></li>
                                    <li><a href="https://www.farsnews.ir/ilam">ایلام</a></li>
                                    <li><a href="https://www.farsnews.ir/bushehr">بوشهر</a></li>
                                    <li><a href="https://www.farsnews.ir/tehran">تهران</a></li>
                                    <li><a href="https://www.farsnews.ir/Chaharmahal-Bakhtiari">چهار محال و
                                            بختیاری</a></li>
                                    <li><a href="https://www.farsnews.ir/khorasan-jonubi">خراسان جنوبی</a></li>
                                    <li><a href="https://www.farsnews.ir/razavi">خراسان رضوی</a></li>
                                    <li><a href="https://www.farsnews.ir/khorasan-shomali">خراسان شمالی</a></li>
                                    <li><a href="https://www.farsnews.ir/khuzestan">خوزستان</a></li>
                                    <li><a href="https://www.farsnews.ir/zanjan">زنجان</a></li>
                                    <li><a href="https://www.farsnews.ir/semnan">سمنان</a></li>
                                    <li><a href="https://www.farsnews.ir/sistan-baluchestan">سیستان و بلوچستان</a>
                                    </li>
                                </ul>
                                <ul class="mr-3">
                                    <li><a href="https://www.farsnews.ir/fars">فارس</a></li>
                                    <li><a href="https://www.farsnews.ir/qazvin">قزوین</a></li>
                                    <li><a href="https://www.farsnews.ir/qom">قم</a></li>
                                    <li><a href="https://www.farsnews.ir/kordestan">کردستان</a></li>
                                    <li><a href="https://www.farsnews.ir/kerman">کرمان</a></li>
                                    <li><a href="https://www.farsnews.ir/kermanshah">کرمانشاه</a></li>
                                    <li><a href="https://www.farsnews.ir/Kohgiluyeh-Boyerahmad">كهگیلویه و
                                            بویراحمد</a></li>
                                    <li><a href="https://www.farsnews.ir/golestan">گلستان</a></li>
                                    <li><a href="https://www.farsnews.ir/gilan">گیلان</a></li>
                                    <li><a href="https://www.farsnews.ir/lorestan">لرستان</a></li>
                                    <li><a href="https://www.farsnews.ir/mazandaran">مازندران</a></li>
                                    <li><a href="https://www.farsnews.ir/markazi">مرکزی</a></li>
                                    <li><a href="https://www.farsnews.ir/hormozgan/">هرمزگان</a></li>
                                    <li><a href="https://www.farsnews.ir/hamedan">همدان</a></li>
                                    <li><a href="https://www.farsnews.ir/yazd">یزد</a></li>
                                </ul>

                            </di>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse13">
                            عکس
                        </a>
                    </div>
                    <div id="collapse13" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/photo">صفحه اصلی گروه</a></li>
                                <li><a href="https://www.farsnews.ir/photo/provinces">استانها</a></li>
                                <li><a href="https://www.farsnews.ir/photo/journalism">خبری</a></li>
                                <li><a href="https://www.farsnews.ir/photo/documentary">مستند</a></li>
                                <li><a href="https://www.farsnews.ir/photo/sports">ورزش</a></li>
                                <li><a href="https://www.farsnews.ir/photo/received">دریافتی</a></li>
                                <li><a href="https://www.farsnews.ir/photo/day">عکس روز</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse14">
                            گرافیک و کاریکاتور
                        </a>
                    </div>
                    <div id="collapse14" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/graphic/cartoon">کاریکاتور</a></li>
                                <li><a href="https://www.farsnews.ir/graphic">گرافیک</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-header">
                        <a class="card-link w-100 text-right float-right" data-toggle="collapse"
                            href="https://www.farsnews.ir/#collapse15">
                            فارس +
                        </a>
                    </div>
                    <div id="collapse15" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="https://www.farsnews.ir/west-view-west">غرب از نگاه غرب</a></li>
                                <li><a href="https://www.farsnews.ir/resistance">حماسه و مقاومت</a></li>
                                <li><a href="https://www.farsnews.ir/good-news">خبر خوب</a></li>
                                <li><a href="https://www.farsnews.ir/family">خانواده</a></li>
                                <li><a href="https://www.farsnews.ir/viewpoint">دیدگاه</a></li>
                                <li><a href="https://www.farsnews.ir/rumor">شبهه و شایعه</a></li>
                                <li><a href="https://www.farsnews.ir/other-media">ديگر رسانه ها</a></li>
                                <li><a href="https://www.farsnews.ir/recreation-exhilaration">تفریح و نشاط</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="h-100">
                </div>

            </div>
        </div>

        
    </div>
</div>
