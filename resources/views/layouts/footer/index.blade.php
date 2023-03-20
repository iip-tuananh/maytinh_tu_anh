<div class="container" style="margin-bottom: 10px">
   <div class="row">
      <div class="col-md-6 col-xs-12">
         <h4 class="h4-cus"> Video about us</h4>
         {!!$setting->footer_content!!}
      </div>
      <div class="col-md-6 col-xs-12">
         <h4 class="h4-cus">MAP</h4>
         {!!$setting->iframe_map!!}
      </div>
   </div>
</div>
<div class="footer-area">
   <div class="footer-container">
      <div class="footer-top">
         <div class="container">
         
            <div class="row">
               <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                  <div class="single-wedge">
                    
                     <div class="">
                       <span style="display: flex;
                       flex-wrap: nowrap;
                       justify-content: center;
                       align-items: center;">
                    <img src="{{$setting->logo}}" alt="" srcset="" style="width:30%">
                       </span><br>
                       <h4 class="footer-herading">{{$setting->company}}</h4>
                           <span style="text-align: center; width:100%" >
                         {{$setting->webname}}
                           </span>
                  
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                  <div class="single-wedge">
                     <h4 class="footer-herading">Danh mục</h4>
                     <div class="footer-links">
                        <ul>
                           @foreach ($categoryhome as $cate)
                              
                               <li><a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">-&nbsp;{{languageName($cate->name)}}</a></li>
                          
                           @endforeach
                        </ul>
                           <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>

                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                  <div class="single-wedge">
                     <h4 class="footer-herading">Chính sách </h4>
                     <div class="footer-links">
                        <ul>
                           @foreach ($pageContent as $item)
                               @if($item->type == 'ho-tro-khanh-hang')
                               <li><a href="{{route('pagecontent',['slug'=>$item->slug])}}">-&nbsp;{{$item->title}}</a></li>
                               @endif
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 ">
                  <div class="single-wedge">
                     <h4 class="footer-herading">Thông tin liên hệ</h4>
                     <span><i class="fa-solid fa-phone"></i>&nbsp;{{$setting->phone1}}</span><br>
                     @if($setting->phone2 != '')
                     <span><i class="fa-solid fa-phone"></i>&nbsp;{{$setting->phone2s}}</span><br>
                     @endif
                     <span><i class="fa-solid fa-location-dot"></i></i>&nbsp;{{$setting->address1}}</span><br>
                     @if ($setting->address2 != '')
                        
                     <span><i class="fa-solid fa-location-dot"></i></i>&nbsp;{{$setting->address2}}</span><br>
                     @endif
                  </div>
               </div>
            </div>

         </div>
      </div>
      <div class="footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <p class="copy-text"> © 2021 <strong></strong> Made With <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> By <a class="company-name" href="">
                     <strong>SBT</strong></a>.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>