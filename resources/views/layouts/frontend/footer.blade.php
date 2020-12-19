<!--        
    <div class="footer py-2" style="background-color: darkcyan;">
                <div class="container">
                    <div class="mb-2 d-flex justify-content-center">
                    <div class="license">
                          <div class="container" style="width: 70%;">
                                <div class="about">
                         <h1 class="text-center" style="color: white; margin-bottom: 2%;">درباره ما</h1>
                              <h1 style="color: white;"> {{$setting->about}}</h1>
                      </div>
                            </div>
  
                     </div>                    </div>
                </div>
    </div> -->
    

    <div class="footer py-2">
                <div class="container">
                <div class="mb-2 d-flex justify-content-center">
                    <div class="license">
                          <div class="container" >
                                <div class="about">
                         <!-- <h1 class="text-center" style="color: white; margin-bottom: 2%;">درباره ما</h1> -->
                              <h1 style="color: white; font-size: 19px;">{{$setting->about}}</h1>
                      </div>
                            </div>
  
                     </div>
                
    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div class="social mt-2">
                            <ul class="list-unstyled social-group">
                                @foreach($setting->social as $key=>$social)
                                <li ><a href="{{$urls[$key]}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a></li>
                                @endforeach
                                <!-- <li class="eita"><a href="https://eitaa.com/farsna" target="_blank"></a></li>
                                <li class="igap"><a href="https://igap.net/farsna" target="_blank"></a></li>
                                <li class="bale"><a href="http://ble.im/Farsna" target="_blank"></a></li>
                                <li class="wispi"><a href="http://wispi.me/channel/farsna" target="_blank"></a></li>
                                <li class="insta"><a href="https://instagram.com/fars_news" target="_blank"></a></li>
                                <li class="twitter"><a href="https://twitter.com/FarsNews_Agency" target="_blank"></a></li>
                                <li class="rss"><a href="/rsslinks" target="_blank"></a></li> -->

                            </ul>
                        </div>
                        <ul class="contact-site mt-3 list-unstyled d-flex flex-wrap justify-content-center">
                            @foreach($categories as $key=>$cat)
                            @if($key< 6)
                            <li class="text_uppercase"><a href="{{url('category')}}/{{$cat->slug}}">{{$cat->title}}</a></li>
                             @endif
                            @endforeach
                            
                        </ul>
                    </div>

                    <div class="copy-right">
                        <section class="d-flex justify-content-between align-items-end">
                            <div class="logo-right d-flex">
                            </div>
                            <div class="logo-left-box d-flex flex-row-reverse align-items-end">
                                <div class="logo-left d-flex">
                                </div>
                                <span>FARS</span>
                                <span class="ml-1">NEWS AGENCY</span>
                            </div>
                        </section>
                     
                        <div class="mb-2 d-flex justify-content-center">
                            <div class="license"> 
                          <div class="text-center">
                                  <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"></a>
                                <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"></span>
                                <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.farsnews.ir" property="cc:attributionName" rel="cc:attributionURL">Fars News Agency</a> <span>&nbsp;is licensed under a&nbsp;</span>
                                <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>
                                <a xmlns:dct="http://purl.org/dc/terms/" href="http://www.farsnews.ir" rel="dct:source"></a>
                              
                          </div>
                            
                            </div>
                        </div>

                    </div>

                </div>
            </div>