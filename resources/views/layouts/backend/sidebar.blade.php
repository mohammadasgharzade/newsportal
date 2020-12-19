  <!--sidebar start-->
  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="/admin">
                          <i class="icon-dashboard"></i>
                          <span>صفحه اصلی</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fas fa-bookmark"></i>
                          <span>اخبار</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="#" href="/admin/viewpost"><i class="fa fa-eye"></i>همه اخبار</a></li>
                          @if(auth()->user()->rule == 'ادمین' ||
                           auth()->user()->rule == 'سردبیر' )
                          <li><a class="#" href="/admin/postcreate"><i class="fa fa-plus-circle"></i>افزودن خبر</a></li>
                          @endif
                          <li><a class="#" href="/admin/offercontent/index"><i class="fa fa-eye"></i>مطالب پیشنهادی</a></li>
                          @if(auth()->user()->rule == 'ادمین' ||
                          auth()->user()->rule == 'سردبیر' )
                          <li><a class="#" href="/admin/offercontent/create"><i class="fa fa-plus-circle"></i>  ایجاد مطلب پیشنهادی </a></li>
                          @endif
                        
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fas fa-archive"></i>
                          <span> دسته بندی ها</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                      <li><a class="" href="/admin/viewcategory"><i class="fa fa-list-alt"></i>مجموعه ها</a></li>
                      <li><a class="" href="/admin/subshow"><i class="fa fa-list-alt"></i>زیر مجموعه ها</a></li>

                      <li><a class="" href="{{route('tag.index')}}"><i class="fa fa-tag"></i> تگ ها</a></li>

                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-image"></i>
                          <span>آلبوم </span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="#" href="/admin/image_gallary"><i class="fa fa-eye"></i> گالری تصاویر</a></li>
                        
                          @if(auth()->user()->rule == 'ادمین' ||
                           auth()->user()->rule == 'سردبیر' )
                                 <li><a class="#" href="/admin/add_gallary"><i class="fa fa-plus-circle"></i>افزودن تصویر</a></li>
                          @endif

                            <li><a class="#" href="/admin/video_index"><i class="fa fa-eye"></i> گالری ویدیوها</a></li>
                       
                          @if(auth()->user()->rule == 'ادمین' ||
                           auth()->user()->rule == 'سردبیر' )
                                 <li><a class="#" href="/admin/add_video"><i class="fa fa-plus-circle"></i>  افزودن ویدیو</a></li>
                          @endif

                        </ul>
                  </li>


                  <script src="{{url('/admin_template/js/jquery.js')}}"></script>
                  @if(
                      auth()->user()->rule == 'ادمین' ||
                      auth()->user()->rule == 'سردبیر'
                  )

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                      <i class='fas fa-ad'></i>               
                                <span>تبلیغات</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="#" href="/admin/ad_index"><i class="fa fa-eye"></i> تبلیغات</a></li>
                          <li><a class="#" href="/admin/create_ad"><i class="fa fa-plus-circle"></i>افزودن تبلیغ</a></li>                        
                      </ul>
                  </li>

                  @endif
                  @if(auth()->user()->rule == 'ادمین' )
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                      <i class='fas fa-user-plus'></i>               
                                <span>کاربران</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="#" href="/admin/user/index"><i class="fa fa-eye"></i> لیست کاربران</a></li>
                          <li><a class="#" href="{{url('register')}}"><i class="fa fa-plus-circle"></i>افزودن کاربر</a></li>                        
                      </ul>
                  </li>
                @endif
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                      <i class="fa fa-address-book"></i>               
                                <span>کاربر فعال </span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="#" href="{{url('/admin/user/profile')}}"><i class="fa fa-edit"></i>پروفایل</a></li>
                          <li><a class="#" href="{{url('logout')}}"><i class="fa fa-power-off"></i> خروج</a></li>                        
                      </ul>
                  </li>
                @if(auth()->user()->rule == 'ادمین' )
                  <li class="sub-menu">
                      <a href="{{route('setting.index')}}" class="">
                          <i class="fa fa-gear"></i>
                          <span>تنظیمات</span>
                          <span class="arrow"></span>
                      </a>
                    
                  </li>
                @endif
                @if(auth()->user()->rule == 'ادمین' ||
                    auth()->user()->rule == 'سردبیر' ||
                    auth()->user()->rule == 'ویراستار' )
                  <li>
                      <a class="" href="/">
                          <i class="icon-user"></i>
                          <span>صفحه ورود به سایت</span>
                      </a>
                  </li>
                @endif
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->