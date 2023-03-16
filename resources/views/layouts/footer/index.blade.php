<div class="footer-area">
   <div class="footer-container">
      <div class="footer-top">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                  <div class="single-wedge">
                     <h4 class="footer-herading">{{$setting->company}}</h4>
                     <div class="need-help">
                        <p class="phone-info">
                           <span>
                           {{$setting->phone1}} - {{$setting->phone2}}<br> <br>
                           </span>
                        </p>
                     </div>
                     <div>
                        <p>
                           VPĐD: 
                           <span>
                              {{$setting->address1}}
                           </span>
                        </p>
                        <p>
                           CS1: 
                           <span>
                              198 Phố Thái Hà, Trung Liệt, Đống Đa, Hà Nội
                           </span>
                        </p>
                        <p>
                           CS2: 
                           <span>
                              72 Nguyễn Trãi, Ngã Tư Sở, Thanh Xuân, Hà Nội68
                           </span>
                        </p>
                        <p>
                           CS3: 
                           <span>
                              68 Xuân Thủy, Dịch Vọng Hậu, Cầu Giấy, Hà Nội
                           </span>
                        </p>
                        <p>
                           CS4: 
                           <span>
                              250 Phố Minh Khai, Minh Khai, Hai Bà Trưng, Hà Nội
                           </span>
                        </p>
                        <p>
                           CS5: 
                           <span>
                              83 Bà Triệu, Nguyễn Du, Hoàn Kiếm, Hà Nội
                           </span>
                        </p>
                        <p>
                           CS6: 
                           <span>
                              32 Phùng Khoang, Trung Văn, Từ Liêm, Hà Nội
                           </span>
                        </p>
                        <p>
                           CS7: 
                           <span>
                              86 Đường Nguyễn Văn Cừ, Gia Thụy, Long Biên, Hà Nội
                           </span>
                        </p>
                        <p>
                           CS8: 
                           <span>
                              CT4, Khu đô thị Văn Khê, La Khê, Hà Đông, Hà Nội
                           </span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                  <div class="single-wedge">
                     <h4 class="footer-herading">Về chúng tôi</h4>
                     <div class="footer-links">
                        <ul>
                           @foreach ($pageContent as $item)
                               @if($item->type == 've-chung-toi')
                               <li><a href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                               @endif
                           @endforeach
                        </ul>
                           <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
   _Hasync.push(['Histats.start', '1,4638260,4,300,113,63,00010011']);
   _Hasync.push(['Histats.fasi', '1']);
   _Hasync.push(['Histats.track_hits', '']);
   (function() {
   var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
   hs.src = ('//s10.histats.com/js15_as.js');
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
   })();</script>
   <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4638260&101" alt="" border="0"></a></noscript>
   <!-- Histats.com  END  -->
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                  <div class="single-wedge">
                     <h4 class="footer-herading">Chính sách và điều khoản</h4>
                     <div class="footer-links">
                        <ul>
                           @foreach ($pageContent as $item)
                               @if($item->type == 'ho-tro-khanh-hang')
                               <li><a href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                               @endif
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 ">
                  <div class="single-wedge">
                     <h4 class="footer-herading">Vị trí</h4>
                     {!!$setting->iframe_map!!}
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <p class="copy-text"> © 2021 <strong>Rozer</strong> Made With <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> By <a class="company-name" href="">
                     <strong> An Hưng</strong></a>.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>