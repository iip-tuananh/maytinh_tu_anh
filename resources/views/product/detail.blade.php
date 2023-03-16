@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcrumb-area">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="breadcrumb-content">
                   <ul class="nav">
                       <li><a href="{{route('home')}}">Trang chủ</a></li>
                       <li><a href="{{route('allListProCate',['danhmuc'=>$product->cate->slug])}}">{{languageName($product->cate->name)}}</a></li>
                       @if ($product->typeCate)
                       <li><a href="{{route('allListType',[ 'danhmuc'=>$product->cate->slug,'loaidanhmuc'=>$product->typeCate->slug])}}">{{languageName($product->typeCate->name)}}</a></li>
                       @endif
                       <li>{{languageName($product->name)}}</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<section class="product-details-area mtb-15px">
   <div class="container">
       <div class="row">
         @php
            $img = json_decode($product->images);
            $discount = json_decode($product->preserve);
            $thongso = json_decode($product->size);
         @endphp
           <div class="col-xl-4 col-lg-4 col-md-12">
               <div class="product-details-img product-details-tab">
                   <div class="zoompro-wrap zoompro-2">
                       <div class="zoompro-border zoompro-span">
                           <img class="zoompro" src="{{$img[0]}}" alt="" />
                       </div>
                   </div>
                   <div id="gallery" class="product-dec-slider-2 swiper-container">
                       <div class="swiper-wrapper">
                          @foreach ($img as $key => $item)
                           <div class="swiper-slide">
                                 <a class="{{$key == 0 ? 'active' : ''}}" data-image="{{$item}}">
                                    <img class="img-responsive" src="{{$item}}" alt="" />
                                 </a>
                           </div>
                          @endforeach
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-12">
               <div class="product-details-content">
                   <h2>{{languageName($product->name)}}</h2>
                   <div class="pricing-meta">
                     @if ($product->price > 0)
                     <ul>
                        @if ($product->discount > 0)
                        <li class="old-price"><del>{{number_format($product->price)}}đ</del> </li>
                        <li class="current-price" style="color: #e60808; font-weight: 700;">Giá:{{number_format($product->price-($product->price*($product->discount/100)))}}đ</li>
                        @else
                        <li class="current-price" style="color: #e60808; font-weight: 700;">Giá:{{number_format($product->price)}}đ</li>
                        @endif
                     </ul>
                  @else 
                      <ul>
                        <li class="current-price">Liên hệ</li>
                     </ul>
                     @endif
                   </div>
                   <div class="pro-details-list">
                     {!!languageName($product->description)!!}
                   </div>
                   <input type="hidden"  id="inputqty" value="1">
                   <div class="pro-details-quality mt-0px">
                    <div class="pro-details-cart btn-hover" >
                        <a href="javascript:;" style="background: #4bad5d" onclick="shopnow({{$product->id}},1)"> Mua ngay</a>
                    </div>
                       <div class="pro-details-cart btn-hover" onclick="addToCart({{$product->id}},1)">
                           <a href="javascript:;" >  Thêm vào giỏ hàng</a>
                       </div>
                       
                   </div>
               </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="product-details-content product-details-discount">
                <h3>Khuyến mãi</h3>
                <div class="pro-details-policy">
                   @if (count($discount)>1)
                   <ul>
                        @foreach ($discount as $d)
                        <li><img src="{{url('frontend/images/icon_tick_summary.png')}}" alt="" /><span>{{$d->detail}}</span></li>
                        @endforeach
                    </ul>
                    @else
                    <ul>
                        <li><img src="{{url('frontend/images/icon_tick_summary.png')}}" alt="" /><span>Bảo Hành Tại Nơi Sử Dụng (Áp Dụng Nội Thành Hà Nội)</span></li>
                        <li><img src="{{url('frontend/images/icon_tick_summary.png')}}" alt="" /><span>Bảo Hành Siêu Tốc 1 Đổi 1 Trong 24h</span></li>
                        <li><img src="{{url('frontend/images/icon_tick_summary.png')}}" alt="" /><span>Vận Chuyển Toàn Quốc</span></li>
                    </ul>
                    @endif
                    
                </div>
            </div>
        </div>
       </div>
   </div>
</section>
<div class="description-review-area mb-60px">
   <div class="container">
       <div class="description-review-wrapper">
           <div class="description-review-topbar nav">
               <a data-bs-toggle="tab" href="#des-details1" class="active">MÔ TẢ CHI TIẾT</a>
           </div>
           <div class="tab-content description-review-bottom">
               <div id="des-details1" class="tab-pane active">
                   <div class="product-description-wrapper">
                       {!!languageName($product->content)!!}
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- Shop details Area End -->
<div class="feature-area single-product-responsive  mb-30px">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="section-title">
                   <h2 class="section-heading">Sản phẩm liên quan</h2>
               </div>
           </div>
       </div>
       <div class="feature-slider-two slider-nav-style-1">
           <div class="feature-slider-wrapper swiper-wrapper">
               <!-- Single Item -->
               @foreach ($productlq as $item)
               <div class="feature-slider-item swiper-slide">
                  @include('layouts.product.item',['pro'=>$item])
               </div>
               @endforeach
               
           <!-- Add Arrows -->
           <div class="swiper-buttons">
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
           </div>
       </div>
   </div>
</div>
<!-- Feature Area End -->
@endsection