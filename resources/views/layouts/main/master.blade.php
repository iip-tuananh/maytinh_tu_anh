<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="UTF-8" />
      <link rel="icon" href="{{url(''.$setting->favicon)}}"
         type="image/x-icon" />
      <link rel="apple-touch-icon"
         href="{{url(''.$setting->favicon)}}">
      <meta name="robots" content="noodp,index,follow" />
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>@yield('title')</title>

      <link rel="canonical" href="{{\Request::url()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{\Request::url()}}" />
      <meta property="og:site_name" content="JicaFood" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="548" />
      <meta property="og:image:height" content="343" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:image" content="@yield('image')" />
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('frontend/css/vendor.min.css')}}" />
      <link rel="stylesheet" href="{{asset('frontend/css/plugins.min.css')}}" />
      <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/notify.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/callbuttom.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/tiny-slider.css">
      @yield('css')
     <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110518717915498");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
   </head>
   <body>
      <div class="dungim">
        <div>
         <a href="{{$setting->facebook}}">
            <div>
               <svg viewBox="0 0 48.00 48.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="24" cy="24" r="20" fill="#3B5998"></circle> <path fill-rule="evenodd" clip-rule="evenodd" d="M29.315 16.9578C28.6917 16.8331 27.8498 16.74 27.3204 16.74C25.8867 16.74 25.7936 17.3633 25.7936 18.3607V20.1361H29.3774L29.065 23.8137H25.7936V35H21.3063V23.8137H19V20.1361H21.3063V17.8613C21.3063 14.7453 22.7708 13 26.4477 13C27.7252 13 28.6602 13.187 29.8753 13.4363L29.315 16.9578Z" fill="white"></path> </g></svg>
            </div>
         </a>
        </div>
        <div>
         <a href="{{$setting->google}}">
            <div>
               <svg  viewBox="-3.2 -3.2 38.40 38.40" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M16 28.1791C23.1797 28.1791 29 22.5426 29 15.5896C29 8.63654 23.1797 3 16 3C8.8203 3 3 8.63654 3 15.5896C3 19.3712 4.72168 22.7634 7.44737 25.0711V27.6188C7.44737 28.6145 8.4616 29.2824 9.36588 28.8821L12.193 27.6307C13.397 27.9873 14.6754 28.1791 16 28.1791Z" fill="url(#paint0_linear_87_7239)"></path> <path d="M12.887 12.9133L9.11723 18.0689C8.71304 18.6217 9.43994 19.2858 9.99334 18.8693L13.2123 16.4469C13.5399 16.2003 13.9992 16.197 14.3307 16.4388L17.1935 18.5272C17.7425 18.9277 18.5272 18.8125 18.9269 18.2727L22.8805 12.9341C23.2905 12.3804 22.558 11.7109 22.0038 12.1328L18.6006 14.7236C18.2729 14.9731 17.8112 14.9777 17.4782 14.7347L14.6247 12.6531C14.0733 12.2509 13.285 12.369 12.887 12.9133Z" fill="white"></path> <defs> <linearGradient id="paint0_linear_87_7239" x1="16" y1="3" x2="11.8286" y2="28.8583" gradientUnits="userSpaceOnUse"> <stop stop-color="#00B1FF"></stop> <stop offset="1" stop-color="#006BFF"></stop> </linearGradient> </defs> </g></svg>
            </div>
         </a>
        </div>
            </div>
            <style>
               .dungim{
                  height: auto;
    width: 50px;
    position: fixed;
    z-index: 10000000;
    bottom: 141px;
    right: 31px;
               }
            </style>
      @include('layouts.header.index')
     
      @yield('content')
      @include('layouts.footer.index')
      <!-- Footer Area End -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container gallery-top">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/11.jpg" alt="">
                              </div>
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/12.jpg" alt="">
                              </div>
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/13.jpg" alt="">
                              </div>
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/14.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/11.jpg" alt="">
                              </div>
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/12.jpg" alt="">
                              </div>
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/13.jpg" alt="">
                              </div>
                              <div class="swiper-slide"> 
                                 <img class="img-responsive m-auto" src="https://template.hasthemes.com/rozer/rozer/assets/images/product-image/14.jpg" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                           <h2>Originals Kaval Windbr</h2>
                           <p class="reference">Reference:<span> demo_17</span></p>
                           <div class="pro-details-rating-wrap">
                              <div class="rating-product">
                                 <i class="ion-android-star"></i>
                                 <i class="ion-android-star"></i>
                                 <i class="ion-android-star"></i>
                                 <i class="ion-android-star"></i>
                                 <i class="ion-android-star"></i>
                              </div>
                              <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                           </div>
                           <div class="pricing-meta">
                              <ul>
                                 <li class="old-price not-cut">€18.90</li>
                              </ul>
                           </div>
                           <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                           <div class="pro-details-size-color">
                              <div class="pro-details-color-wrap">
                                 <span>Color</span>
                                 <div class="pro-details-color-content">
                                    <ul>
                                       <li class="blue"></li>
                                       <li class="maroon active"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="pro-details-quality">
                              <div class="cart-plus-minus">
                                 <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                              </div>
                              <div class="pro-details-cart btn-hover">
                                 <a href="#"> + Add To Cart</a>
                              </div>
                           </div>
                           <div class="pro-details-wish-com">
                              <div class="pro-details-wishlist">
                                 <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                              </div>
                              <div class="pro-details-compare">
                                 <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                              </div>
                           </div>
                           <div class="pro-details-social-info">
                              <span>Share</span>
                              <div class="social-info">
                                 <ul>
                                    <li>
                                       <a href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @if(Session::has('success'))
    <div class="lobibox-notify-wrapper top right">
        <div class="lobibox-notify lobibox-notify-success animated-fast fadeInDown without-icon notify-mini" style="width: 368px;">
            <div class="lobibox-notify-icon-wrapper">
                <div class="lobibox-notify-icon">
                    <div></div>
                </div>
            </div>
            <div class="lobibox-notify-body">
                <div class="lobibox-notify-msg" style="max-height: 32px;">{{ Session::get('success') }}</div>
            </div>
            <span class="lobibox-close" onclick="$('.lobibox-notify-wrapper').remove()">×</span>
        </div>
    </div>
    @endif
    @if(Session::has('error'))
    <div class="lobibox-notify-wrapper top right">
        <div class="lobibox-notify lobibox-notify-error animated-fast fadeInDown without-icon notify-mini" style="width: 368px;">
            <div class="lobibox-notify-icon-wrapper">
                <div class="lobibox-notify-icon">
                    <div></div>
                </div>
            </div>
            <div class="lobibox-notify-body">
                <div class="lobibox-notify-msg" style="max-height: 32px;">{{ Session::get('error') }}</div>
            </div>
            <span class="lobibox-close" onclick="$('.lobibox-notify-wrapper').remove()">×</span>
        </div>
    </div>
    @endif
    <div class="notify bar-top do-show" >
    </div>
    <div onclick="window.location.href= 'tel:{{$setting->phone1}}'" class="hotline-phone-ring-wrap">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
            <a href="tel:{{$setting->phone1}}" class="pps-btn-img">
               <img src="{{url('frontend/images/phone.png')}}" alt="Gọi điện thoại" width="50">
            </a>
         </div>
      </div>
      <a href="tel:{{$setting->phone1}}">
      </a>
      <div class="hotline-bar"><a href="tel:{{$setting->phone1}}">
         </a><a href="tel:{{$setting->phone1}}">
            <span class="text-hotline">{{$setting->phone1}}</span>
         </a>
      </div>

   </div>
   <div class="inner-fabs show"><a target="blank" href="https://zalo.me/{{$setting->phone1}}" class="fab roundCool" id="chat-fab"
         data-tooltip="Nhắn tin Zalo">
         <img class="inner-fab-icon" src="{{url('frontend/images/zalo.png')}}" alt="chat-active-icon" border="0">
      </a>
   </div>
   <div class="fab roundCool call-animation" id="main-fab">
      <img class="img-circle" src="{{url('frontend/images/lienhe.png')}}" alt="">
   </div>
   <div class='jas-sale-pop flex pf middle-xs'></div>

      <script src="{{asset('frontend/js/vendor.min.js')}}"></script>
      <script src="{{asset('frontend/js/plugins.min.js')}}"></script>
      <!-- Main Activation JS -->
      <script src="{{asset('frontend/js/main.js')}}"></script>
      <script src="{{asset('frontend/js/cart.js')}}"></script>
      <script src="{{asset('frontend/js/notify.js')}}"></script>
      <script src="{{asset('frontend/js/callbuttom.js')}}"></script>
      <script src="{{asset('frontend/js/notify.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/min/tiny-slider.js"></script>
      @yield('js')
      <script type="text/javascript">
         $(document).ready(function ($) {
            SalesPop();
         });
         function fisherYates ( myArray ) {
            var i = myArray.length, j, temp;
            if ( i === 0 ) return false;
            while ( --i ) {
               j = Math.floor( Math.random() * ( i + 1 ) );
               temp = myArray[i];
               myArray[i] = myArray[j]; 
               myArray[j] = temp;
            }
         }
         var collection = new Array();
         collection[1]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='XuanNguyen hoàn thành đơn hàng'>XuanNguyen hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[2]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='Mì hộp omachi Business Class'>HoangNgoc85 hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[3]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='TinhNguyen hoàn thành đơn hàng'>TinhNguyen hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[4]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='ToanLa hoàn thành đơn hàng'>ToanLa hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[5]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='Lannhuyen hoàn thành đơn hàng'>Lannhuyen hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[6]="<a href='javascript:;t' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='tuananhnh hoàn thành đơn hàng'>tuananhnh hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[7]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='TrongDai hoàn thành đơn hàng'>TrongDai hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[8]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='NgocLan hoàn thành đơn hàng'>NgocLan hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[9]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='Hoang89 hoàn thành đơn hàng'>Hoang89 hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[10]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='HieuHoang hoàn thành đơn hàng'>HieuHoang hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[11]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='MinhHoang hoàn thành đơn hàng'>MinhHoang hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[12]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='LuongNam hoàn thành đơn hàng'>LuongNam hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[13]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='DaiNguyen hoàn thành đơn hàng'>DaiNguyen hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[14]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='HoangHoa hoàn thành đơn hàng'>HoangHoa hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[15]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='TrinhNguyen hoàn thành đơn hàng'>TrinhNguyen hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         collection[16]="<a href='javascript:;' class='jas-sale-pop-img mr__20'><img src='/frontend/images/user.png' alt='mua-hang' width='84' height='84' /></a><div class='jas-sale-pop-content'><h3 class='mg__0 mt__5 mb__5 fs__18'><a href='javascript:;' title='MinhDuc hoàn thành đơn hàng'>MinhDuc hoàn thành đơn hàng</a></h3><span class='fs__12 jas-sale-pop-timeago'></span></div><span class='pe-7s-close pa fs__20'></span>";
         fisherYates(collection);
         function SalesPop() {
            if ($('.jas-sale-pop').length < 0)
               return;
            setInterval(function() {
               $('.jas-sale-pop').fadeIn(function() {
                  $(this).removeClass('slideUp');
               }).delay(10000).fadeIn(function() {
                  var randomTime = ['1 phút', '5 phút', '10 phút', '12 phút', '14 phút', '16 phút', '18 phút', '20 phút', '25 phút', '4 phút', '3 phút', '7 phút', '8 phút', '42 phút', '45 phút', '50 phút', '1 giờ', '2 giờ', '3 giờ'],
                     randomTimeAgo = Math.floor(Math.random() * randomTime.length),
                     randomProduct = Math.floor(Math.random() * collection.length),
                     randomShowP = collection[randomProduct],
                     TimeAgo = randomTime[randomTimeAgo];
                  $(".jas-sale-pop").html(randomShowP);
                  $('.jas-sale-pop-timeago').text('Vừa đặt hàng cách đây ' + TimeAgo);
                  $(this).addClass('slideUp');
                  $('.pe-7s-close').on('click', function() {
                     $('.jas-sale-pop').remove();
                  });
               }).delay(15000);
            }, 1000);
         }
      </script>	
   </body>
</html>
