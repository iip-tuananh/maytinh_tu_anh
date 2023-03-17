<!-- Header Section Start From Here -->
<header class="header-wrapper">
   @php $total = 0; $qty = 0 ; @endphp
            @foreach((array) session('cart') as $id => $details)
                  @php 
                  $total += ($details['price'] - ($details['price']*($details['discount']/100))) * $details['quantity'] ;
                  $qty += $details['quantity'] ;
                  @endphp
            @endforeach
   <!-- Header Nav Start -->
   <div class="header-nav">
      <div class="container">
         <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
            <div class="header-static-nav">
               <p style="    font-size: 17px;"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: {{$setting->phone1}} - <i class="fa fa-phone" aria-hidden="true"></i> {{$setting->phone2}}</p>
            </div>
            <div class="header-menu-nav">
               <ul class="menu-nav">
                  <li>
                     <div class="dropdown">
                        <a href="{{route('pagecontent',['slug'=>'gioi-thieu'])}}" style="color: white;font-size: 17px;">Giới thiệu</i></a>
                     </div>
                  </li>
                  <li>
                     <div class="dropdown">
                        <a href="{{route('allListBlog')}}" style="color: white;font-size: 17px;" >Tin tức</a>
                     </div>
                  </li>
                  <li class="pr-0">
                     <div class="dropdown">
                        <a href="{{route('lienHe')}}" style="color: white;font-size: 17px;">
                        Liên hệ
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- Header Nav End -->
   <div class="header-top bg-white d-xl-block d-none sticky-nav ptb-5px">
      <div class="container">
         <div class="row">
            <div class="col-md-4 d-flex">
               <div class="mobile-menu-toggle home-2">
                  <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                     <svg viewBox="0 0 800 600">
                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                        <path d="M300,320 L540,320" id="middle"></path>
                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                     </svg>
                  </a>
               </div>
               <div class="logo">
                  <a href="{{route('home')}}"><img class="img-responsive"  src="{{$setting->logo}}" alt="logo.jpg" /></a>
               </div>
            </div>
            <div class="col-md-5 align-self-center">
               <div class="header-right-element d-flex">
                  <div class="search-element media-body">
                     <ul>
                        @foreach ($categoryhome as $item)
                        <li>
                           <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}"><img src="{{$item->avatar}}" alt="" width="40">{{languageName($item->name)}}</a>
                           @if (count($item->typeCate) > 0)
                           <ul class="sub-menu">
                              @foreach ($item->typeCate as $i)
                              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-295">
                                 <a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$i->slug])}}" class="menu-image-title-after">
                                    <span class="menu-image-title">{{languageName($i->name)}}</span>
                                 </a>
                              </li>
                              @endforeach
                           </ul>
                           @endif
                          
                        </li>
                        @endforeach
                        <li>
                           <a href=""><img src="{{url('frontend/images/settings.png')}}" alt="" width="40">Sửa chữa</a>
                           <ul class="sub-menu">
                              @foreach ($servicehome as $i)
                              <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-295">
                                 <a href="{{route('serviceDetail',['slug'=>$i->slug])}}" class="menu-image-title-after">
                                    <span class="menu-image-title">{{$i->name}}</span>
                                 </a>
                              </li>
                              @endforeach
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--Cart info End -->
            </div>
            <div class="col-md-3 align-self-center">
               <div class="header-right-element d-flex">
                  <div class="search-element media-body mr-30">
                     <form class="d-flex" action="{{route('search_result')}}" method="post">
                        @csrf
                        <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm... " />
                        <button type="submit"><i class="icon-magnifier"></i></button>
                     </form>
                  </div>
                  <!--Cart info Start -->
                  <div class="header-tools d-flex">
                     <div class="cart-info d-flex align-self-center">
                        <a href="#offcanvas-cart" class="bag offcanvas-toggle " id="cart_count" data-number="{{$qty}}"><i class="icon-bag"></i></a>
                     </div>
                  </div>
               </div>
               <!--Cart info End -->
            </div>
         </div>
      </div>
   </div>
   <!-- Header Nav End -->
  
   <!-- header menu -->
</header>
<!-- Header Section End Here -->    
<!-- Mobile Header Section Start -->
<div class="mobile-header d-xl-none sticky-nav bg-white ptb-5px">
   <div class="container">
      <div class="row align-items-center">
         <!-- Header Logo Start -->
         <div class="col">
            <div class="header-logo">
               <a href="{{route('home')}}"><img class="img-responsive" style="width:20%;" src="{{$setting->logo}}" alt="logo.jpg" /></a>
            </div>
         </div>
         <!-- Header Logo End -->
         <!-- Header Tools Start -->
         <div class="col-auto">
            <div class="header-tools justify-content-end">
               <div class="cart-info d-flex align-self-center">
                  <a href="#offcanvas-cart" class="bag offcanvas-toggle"  data-number="{{$qty}}"><i class="icon-bag"></i></a>
               </div>
               <div class="mobile-menu-toggle">
                  <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                     <svg viewBox="0 0 800 600">
                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                        <path d="M300,320 L540,320" id="middle"></path>
                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                     </svg>
                  </a>
               </div>
            </div>
         </div>
         <!-- Header Tools End -->
      </div>
   </div>
</div>
<!-- Search Category Start -->
<!-- Search Category End -->
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
   <div class="inner cart_list">
      <div class="head">
         <span class="title">Giỏ hàng</span>
         <button class="offcanvas-close">×</button>
      </div>
      @if(session('cart'))
      <div class="body customScroll">
         <ul class="minicart-product-list">
            @foreach(session('cart') as $id => $details)
            <li>
               <a href="single-product.html" class="image"><img src="{{ url(''.$details['image']) }}" alt="Cart product Image"></a>
               <div class="content">
                  <a href="single-product.html" class="title">{{ languageName($details['name']) }}</a>
                  <span class="quantity-price">{{ $details['quantity'] }} x <span class="amount">{{ number_format($details['price'] - ($details['price']*($details['discount']/100))) }}đ</span></span>
                  {{-- <a href="#" class="remove">×</a> --}}
               </div>
            </li>
            @endforeach
         </ul>
      </div>
      <div class="foot">
         <div class="sub-total">
            <strong>Tổng tiền :</strong>
            <span class="amount">{{number_format($total)}}₫</span>
         </div>
         <div class="buttons">
            <a href="{{route('listCart')}}" class="btn btn-dark btn-hover-primary mb-30px">Xem giỏ hàng</a>
            <a href="{{route('checkout')}}" class="btn btn-outline-dark current-btn">Thanh toán</a>
         </div>
      </div>
      @endif
   </div>
</div>
<!-- OffCanvas Cart End -->
<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
   <div class="inner customScroll">
      <div class="head">
         <span class="title">&nbsp;</span>
         <button class="offcanvas-close">×</button>
      </div>
      <div class="offcanvas-menu-search-form">
         <form action="{{route('search_result')}}" method="post">
            @csrf
            <input type="text" name="keyword" placeholder="Tìm sản phẩm...">
            <button type="submit"><i class="icon-magnifier"></i></button>
         </form>
      </div>
      <div class="offcanvas-menu">
         <ul>
            @foreach ($categoryhome as $item)
            <li>
               <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}"><span class="menu-text">{{languageName($item->name)}}</span></a>
               @if (count($item->typeCate) > 0)
               <ul class="sub-menu">
                  @foreach ($item->typeCate as $i)
                     <li><a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$i->slug])}}"><span class="menu-text">{{languageName($i->name)}}</span></a></li>
                  @endforeach
               </ul>
               @endif
            </li>
            @endforeach
            <li>
               <a href=""><span class="menu-text">Sửa chữa</span></a>
               <ul class="sub-menu">
               @foreach ($servicehome as $i)
               <li><a href="{{route('serviceDetail',['slug'=>$i->slug])}}"><span class="menu-text">{{($i->name)}}</span></a></li>
               @endforeach
               </ul>
            </li>
         </ul>
      </div>
   </div>
</div>