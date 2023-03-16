@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="breadcrumb-area">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="breadcrumb-content">
                   <ul class="nav">
                       <li><a href="{{route('home')}}">Trang chủ</a></li>
                       <li>{{$title}}</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="shop-category-area mt-30px">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="shop-top-bar d-flex">
               <!-- Left Side start -->
               <!-- Left Side End -->
               <!-- Right Side Start -->
               <div class="sidebar-widget-tag">
                  <ul>
                     <li><a href="javascript:;">Danh mục: </a></li>
                     @foreach ($hastagType as $item)
                        <li><a href="{{route('allListType',['danhmuc'=>$item->cate_slug,'loaidanhmuc'=>$item->slug])}}" style="font-weight: 700; color: #bd0100; text-transform: uppercase;">{{languageName($item->name)}}</a></li>
                     @endforeach
                  </ul>
              </div>
               <!-- Right Side End -->
            </div>
         </div>
         <div class="col-lg-12 col-md-12">
            <!-- Shop Top Area Start -->
            
            <!-- Shop Top Area End -->
            <!-- Shop Bottom Area Start -->
            <div class="shop-bottom-area mt-35">
               <h1 style="font-size: 25px;">{{$title}}</h1>
               <!-- Shop Tab Content Start -->
               <div class="tab-content jump">
                  <!-- Tab One Start -->
                  @if (count($list)>0)
                  <div id="shop-1" class="tab-pane active">
                     <div class="row responsive-md-class">
                        @foreach ($list as $item)
                        <div class="col-xl-3 col-md-4 col-sm-6">
                           @include('layouts.product.item',['pro'=>$item])
                        </div>
                        @endforeach
                     </div>
                  </div>
                  @else
                  <h3>Nội dung đang được cập nhật...</h3>
                  @endif
                  
                  <!-- Tab One End -->
               </div>
               <!-- Shop Tab Content End -->
               <!--  Pagination Area Start -->
               <div class="pro-pagination-style text-center mb-60px mt-30px">
                  {{$list->links()}}
               </div>
               <!--  Pagination Area End -->
            </div>
            <!-- Shop Bottom Area End -->
         </div>
      </div>
   </div>
</div>

@endsection