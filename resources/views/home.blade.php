@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<style>
  .home-popup__background {
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    position: fixed;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    place-content: center;
    -webkit-box-pack: center;
    z-index: 9000;
}
.home-popup__content {
    -webkit-box-flex: 0;
    flex: 0 1 auto;
    position: relative;
    width: 80%;
    max-width: 438px;
    max-height: 100%;
}
.with-placeholder {
    background-position: center center;
    background-size: 60px 60px;
    background-repeat: no-repeat;
    background-image: url(data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 54 61' x='0' y='0' stroke='' fill='%23e5e4e4'%0A%3E%3Cpath d='M 99.2 59.9 H 86.7 c 0 -5.3 -2.7 -16.3 -11.7 -16.4 c -9.6 -.1 -11.8 11.9 -11.8 16.4 H 50.8 c -3.4 0 -2.7 3.4 -2.7 3.4 l 2.4 33 c 0 0 -.1 7.3 6.3 7.5 c .4 0 35.7 0 36.5 0 c 6.2 -.4 6.3 -7.5 6.3 -7.5 l 2.4 -33 C 102 63.2 102.5 59.8 99.2 59.9 z M 75.1 47.2 c 7.1 .2 7.9 11.7 7.7 12.6 H 67.1 C 67 58.9 67.5 47.4 75.1 47.2 z M 84.2 91.8 c -1 1.7 -2.7 3 -5 3.7 C 78 95.9 76.8 96 75.6 96 c -3.2 0 -6.5 -1.1 -9.3 -3.3 c -.8 -.6 -1 -1.5 -.5 -2.3 c .2 -.4 .7 -.7 1.2 -.8 c .4 -.1 .9 0 1.2 .3 c 3.2 2.4 8.3 4 11.9 1.6 c 1.4 -.9 2.1 -2.7 1.6 -4.3 c -.5 -1.6 -2.2 -2.7 -3.5 -3.4 c -1 -.6 -2.1 -1 -3.3 -1.4 c -.9 -.3 -1.9 -.7 -2.9 -1.2 c -2.4 -1.2 -4 -2.6 -4.8 -4.2 c -1.2 -2.3 -.6 -5.4 1.4 -7.5 c 3.6 -3.8 10 -3.2 14 -.4 c .9 .6 .9 1.7 .4 2.5 c -.5 .8 -1.4 .9 -2.2 .4 c -2 -1.4 -4.4 -2 -6.4 -1.7 c -2 .3 -4.7 2 -4.4 4.6 c .2 1.5 2 2.6 3.3 3.3 c .8 .4 1.5 .7 2.3 .9 c 4.3 1.3 7.2 3.3 8.6 5.7 C 85.4 86.9 85.4 89.7 84.2 91.8 z' transform='translate(-48 -43)' stroke='none' /%3E%3C/svg%3E);
}
.banner-image {
    display: block;
    width: 100%;
    overflow: hidden;
}
.home-popup__close-area {
    position: absolute;
    display: block;
    top: 0px;
    right: 0px;
    width: 15%;
    height: 19%;
    cursor: pointer;
}
.shopee-popup__close-btn {
    cursor: pointer;
    user-select: none;
    line-height: 40px;
    height: 30px;
    width: 30px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: absolute;
    box-sizing: border-box;
    background: rgb(239, 239, 239);
    top: -10px;
    right: -10px;
    border-radius: 20px;
    border: 3px solid rgb(239, 239, 239);
}
.home-popup__close-button {
    height: 16px;
    width: 16px;
    stroke: rgba(0, 0, 0, 0.5);
    stroke-width: 2px;
}
</style>
@endsection
@section('js')
<script>
window.addEventListener("click", function(event) {
   var element = document.getElementById("popuphome");
  element.classList.add("d-none");
});
function closepopup(){
   var element = document.getElementById("popuphome");
  element.classList.add("d-none");
}
</script>
@endsection
@section('content')
<!-- Mobile Header Section End -->
      <!-- OffCanvas Search End -->
      <div class="offcanvas-overlay"></div>
      <!-- Header Nav End -->
      <div class="header-menu  d-xl-block d-none bg-light-gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 custom-col custom-col-3">
                  <div class="section_slider ">
                     <div class="container">
                        <div class="swiper-container slide-container">
                           <div class="swiper-main">
                              <div class="swiper-wrapper">
                                 @foreach ($banner as $item)
                                 <div class="swiper-slide" >
                                    <a href="#" class="clearfix" title="{{$item->image}}">
                                       <picture>
                                          <source 
                                                media="(min-width: 1200px)"
                                                srcset="{{$item->image}}">
                                          <source 
                                                media="(min-width: 992px)"
                                                srcset="{{$item->image}}">
                                          <source 
                                                media="(min-width: 569px)"
                                                srcset="{{$item->image}}">
                                          <source 
                                                media="(max-width: 480px)" 
                                                srcset="{{$item->image}}">
                                          <img style="width:100%;"
                                              src="{{$item->image}}"
                                              alt="{{$item->image}}" class="img-responsive center-block" />
                                       </picture>
                                    </a>
                                 </div>
                                 @endforeach
                                 
                              </div>
                              <div class="swiper-pagination"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> <br>
         </div>
         <!-- container -->
         <!-- Static Area Start -->
         <div class="static-area  ptb-20px">
            <div class="container">
               <div class="static-area-wrap">
                  <div class="row">
                     <!-- Static Single Item Start -->
                     @foreach ($bannerqc as $item)
                     <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                           <a href="{{$item->name}}">
                              <img src="{{$item->image}}" alt="" style="    width: 100%;margin-bottom: 10px;" class="img-responsive" />
                           </a>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         <div class="static-area  ptb-40px">
            <div class="container">
               <div class="static-area-wrap">
                  <div class="row">
                     <!-- Static Single Item Start -->
                     <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                           <img src="{{url('frontend/images/static-icons-1.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Free Shipping</h4>
                              <p>Nhận hàng kiểm tra, thanh toán</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                     <!-- Static Single Item Start -->
                     <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                           <img src="{{url('frontend/images/static-icons-2.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Trả hàng miễn phí</h4>
                              <p>Đổi trả trong 7 ngày hoàn 100% tiền</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                     <!-- Static Single Item Start -->
                     <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                        <div class="single-static">
                           <img src="{{url('frontend/images/static-icons-4.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Hỗ trợ 24/7</h4>
                              <p>Liên hộ trợ nhanh chóng</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                     <!-- Static Single Item Start -->
                     <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static">
                           <img src="{{url('frontend/images/static-icons-3.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Thanh toán an toàn 100%</h4>
                              <p>An toàn tuyệt đối cho bạn</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Static Area End -->
      </div>
      
      <!-- header menu -->
      <div class="header-menu  d-xl-none bg-light-gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section_slider ">
                     <div class="swiper-container slide-container">
                        <div class="swiper-main">
                           <div class="swiper-wrapper">
                              @foreach ($banner as $item)
                              <div class="swiper-slide" >
                                 <a href="#" class="clearfix" title="{{$item->image}}">
                                    <picture>
                                       <source 
                                             media="(min-width: 1200px)"
                                             srcset="{{$item->image}}">
                                       <source 
                                             media="(min-width: 992px)"
                                             srcset="{{$item->image}}">
                                       <source 
                                             media="(min-width: 569px)"
                                             srcset="{{$item->image}}">
                                       <source 
                                             media="(max-width: 480px)" 
                                             srcset="{{$item->image}}">
                                       <img style="width:100%;"
                                           src="{{$item->image}}"
                                           alt="{{$item->image}}" class="img-responsive center-block" />
                                    </picture>
                                 </a>
                              </div>
                              @endforeach
                           </div>
                           <div class="swiper-pagination"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> <br>
            <div class="row">
               <!-- Static Single Item Start -->
               @foreach ($bannerqc as $item)
               <div class="col-6">
                  <div class="single-static">
                     <a href="{{$item->name}}">
                        <img src="{{$item->image}}" alt="" style="    width: 100%;margin-bottom: 10px;" class="img-responsive" />
                     </a>
                  </div>
               </div>
               @endforeach
               
            </div>
            <!-- row -->
         </div>
         <!-- container -->
         <!-- Static Area Start -->
         <div class="static-area  ptb-40px">
            <div class="container">
               <div class="static-area-wrap">
                  <div class="row">
                     <!-- Static Single Item Start -->
                     <div class="col-6">
                        <div class="single-static" style="margin-bottom: 20px;">
                           <img src="{{url('frontend/images/static-icons-1.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Free Shipping</h4>
                              <p>Nhận hàng kiểm tra, thanh toán</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                     <!-- Static Single Item Start -->
                     <div class="col-6">
                        <div class="single-static" style="margin-bottom: 20px;">
                           <img src="{{url('frontend/images/static-icons-2.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Trả hàng miễn phí</h4>
                              <p>Đổi trả trong 7 ngày hoàn 100% tiền</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                     <!-- Static Single Item Start -->
                     <div class="col-6">
                        <div class="single-static" style="margin-bottom: 20px;">
                           <img src="{{url('frontend/images/static-icons-4.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Hỗ trợ 24/7</h4>
                              <p>Contact us 24 hours a day</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                     <!-- Static Single Item Start -->
                     <div class="col-6">
                        <div class="single-static" style="margin-bottom: 20px;">
                           <img src="{{url('frontend/images/static-icons-3.png')}}" alt="" class="img-responsive" />
                           <div class="single-static-meta">
                              <h4>Thanh toán an toàn 100%</h4>
                              <p>An toàn tuyệt đối cho bạn</p>
                           </div>
                        </div>
                     </div>
                     <!-- Static Single Item End -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Static Area End -->
      </div>
      <div class="feature-area mt-60px mb-30px">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h2 class="section-heading">Sản phẩm nổi bật</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach ($spnoibat as $item)
               <div class="col-xl-2 col-md-2 col-sm-6 ">
                  @include('layouts.product.item',['pro'=>$item])
               </div>
               @endforeach
            </div>
         </div>
      </div>
      @foreach ($categoryhome as $item)
      @if (count($item->product)>0)
               <!-- Feature Area start -->
      <div class="feature-area mt-60px mb-30px">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h2 class="section-heading">{{languageName($item->name)}}</h2>
                  </div>
               </div>
            </div>
            <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
               <div class="feature-slider-wrapper swiper-wrapper">
                  @foreach ($item->product as $pro)
                  <div class="feature-slider-item swiper-slide">
                     @include('layouts.product.item',['pro'=>$pro])
                  </div>
                  @endforeach
                  <!-- Single Item -->
                  
                  <!-- Single Item -->
               </div>
               <!-- Add Arrows -->
               <div class="swiper-buttons">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="cart-shiping-update-wrapper text-center">
                   <div class="cart-clear">
                       <a id="button-cus"href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">
                        <button alt="XEM THÊM">
                           <i>&nbsp;</i>
                           <i>X</i>
                           <i>E</i>
                           <i>M</i>
                           <i>&nbsp;</i>
                           <i>T</i>
                           <i>H</i>
                           <i>Ê</i>
                           <i>M</i>
                           <i>&nbsp;</i>
                         </button>
                         <style>
                          #button-cus button {
                           display: flex;
                           align-items: center;
                           justify-content: center;
                           height: 50px;
                           position: relative;
                           padding: 0 20px;
                           font-size: 18px;
                           text-transform: uppercase;
                           border: 0;
                           box-shadow: hsl(0.32deg 97.46% 22.73%) 0px 7px 0px 0px;
                           background-color: hsl(0.32deg 100% 37.06%);
                           border-radius: 12px;
                           overflow: hidden;
                           transition: 31ms cubic-bezier(.5, .7, .4, 1);
                           }

                           #button-cus button:before {
                           content: attr(alt);
                           display: flex;
                           align-items: center;
                           justify-content: center;
                           position: absolute;
                           inset: 0;
                           font-size: 15px;
                           font-weight: bold;
                           color: white;
                           letter-spacing: 4px;
                           opacity: 1;
                           }

                           #button-cus button:active {
                           box-shadow: none;
                           transform: translateY(7px);
                           transition: 35ms cubic-bezier(.5, .7, .4, 1);
                           }

                           #button-cus button:hover:before {
                           transition: all .0s;
                           transform: translateY(100%);
                           opacity: 0;
                           }

                           #button-cus button i {
                           color: white;
                           font-size: 15px;
                           font-weight: bold;
                           letter-spacing: 4px;
                           font-style: normal;
                           transition: all 2s ease;
                           transform: translateY(-20px);
                           opacity: 0;
                           }

                           #button-cus button:hover i {
                           transition: all .2s ease;
                           transform: translateY(0px);
                           opacity: 1;
                           }

                          #button-cus button:hover i:nth-child(1) {
                           transition-delay: 0.045s;
                           }

                           #button-cus button:hover i:nth-child(2) {
                           transition-delay: calc(0.045s * 3);
                           }

                           #button-cus button:hover i:nth-child(3) {
                           transition-delay: calc(0.045s * 4);
                           }

                           #button-cus button:hover i:nth-child(4) {
                           transition-delay: calc(0.045s * 5);
                           }

                           #button-cus button:hover i:nth-child(6) {
                           transition-delay: calc(0.045s * 6);
                           }

                           #button-cus button:hover i:nth-child(7) {
                           transition-delay: calc(0.045s * 7);
                           }

                           #button-cus button:hover i:nth-child(8) {
                           transition-delay: calc(0.045s * 8);
                           }

                           #button-cus button:hover i:nth-child(9) {
                           transition-delay: calc(0.045s * 9);
                           }

                           #button-cus button:hover i:nth-child(10) {
                           transition-delay: calc(0.045s * 10);
                           }
                         </style>
                     </a>
                   </div>
               </div>
           </div>
         </div>
      </div>
      <!-- Feature Area End -->
      @endif
     
      @endforeach
      <div class="popular-categories-area ptb-60px bg-light-gray">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h2 class="section-heading">Dịch vụ cung cấp</h2>
                  </div>
               </div>
            </div>
            <div class="category-slider slider-nav-style-1">
               <div class="category-slider-wrapper swiper-wrapper">
                  @foreach ($servicehome as $item)
                  <div class="category-slider-item swiper-slide">
                     <div class="category-slider-bg ">
                        <div class="thumb-category">
                           <a href="{{route('serviceDetail',['slug'=>$item->slug])}}">
                           <img src="{{$item->image}}" alt="product-image.jpg" />
                           </a>
                        </div>
                        <div class="category-discript">
                           <h4>{{($item->name)}}</h4>
                           <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" class="view-all-btn">Chi tiết</a>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <!-- Add Arrows -->
               <div class="swiper-buttons">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="popular-categories-area ptb-60px bg-light-gray">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h2 class="section-heading">Tin tức cập nhật</h2>
                  </div>
               </div>
            </div>
            <div class="category-slider slider-nav-style-1">
               <div class="category-slider-wrapper swiper-wrapper">
                  @foreach ($hotnews as $item)
                  <div class="category-slider-item swiper-slide">
                     <div class="category-slider-bg ">
                        <div class="thumb-category">
                           <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                           <img src="{{$item->image}}" alt="product-image.jpg" />
                           </a>
                        </div>
                        <div class="category-discript">
                           <h4>{{languageName($item->title)}}</h4>
                           <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="view-all-btn">Chi tiết</a>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <!-- Add Arrows -->
               <div class="swiper-buttons">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- category Area End -->
      
      <!-- Brand area start -->
      {{-- <div class="brand-area mb-60px">
         <div class="container">
            <div class="brand-slider slider-nav-style-1  slider-nav-style-2">
               <div class="brand-slider-wrapper swiper-wrapper">
                  @foreach ($partner as $item)
                  <div class="brand-slider-item swiper-slide">
                     <a href="javascript:;"><img src="{{$item->image}}" alt="{{$item->image}}" /></a>
                  </div>
                  @endforeach
               </div>
               <!-- Add Arrows -->
               <div class="swiper-buttons">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- Brand area end -->
      @if ($setting->statusPopup == 1)
      <div class="home-popup" id="popuphome">
         <div class="home-popup__background">
           <div class="home-popup__content">
            <div class="simple-banner with-placeholder" style="">
               <a target="_self" href="{{$setting->linkpopup}}"><img class="banner-image" src="{{$setting->popupimage}}"></a>
             </div>
             <div class="home-popup__close-area" onclick="closepopup()">
               <div class="shopee-popup__close-btn">
                 <svg viewBox="0 0 16 16" stroke="#EE4D2D" class="home-popup__close-button">
                   <path stroke-linecap="round" d="M1.1,1.1L15.2,15.2"></path>
                   <path stroke-linecap="round" d="M15,1L0.9,15.1"></path>
                 </svg>
               </div>
             </div>
           </div>
         </div>
      </div>
      @endif
      <!-- Footer Area Start -->
      
@endsection