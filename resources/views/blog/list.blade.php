@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
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
                       <li>{{$title_page}}</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="shop-category-area blog-grid mtb-60px">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
               <div class="blog-posts">
                   <div class="row">
                     @foreach ($blog as $item)
                       <div class="col-md-4 mb-res-sm-30px">
                           <div class="single-blog-post mb-30px blog-grid-post">
                               <div class="blog-post-media">
                                   <div class="blog-image">
                                       <a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img src="{{$item->image}}" alt="{{languageName($item->title)}}" class="img-responsive"></a>
                                   </div>
                               </div>
                               <div class="blog-post-content-inner mt-30px">
                                   <h4 class="blog-title"><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h4>
                                   <ul class="blog-page-meta">
                                       <li>
                                           <a href="#"><i class="ion-calendar"></i>{{date_format($item->created_at,'d/m/Y')}}</a>
                                       </li>
                                   </ul>
                                   <p>
                                    {{languageName($item->description)}}
                                   </p>
                                   <a class="read-more-btn" href="{{route('detailBlog',['slug'=>$item->slug])}}">Đọc thêm <i class="ion-android-arrow-dropright-circle"></i></a>
                               </div>
                           </div>
                           <!-- single blog post -->
                       </div>
                     @endforeach
                   </div>
               </div>
               <!--  Pagination Area Start -->
               <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px">
                  {{$blog->links()}}
               </div>
               <!--  Pagination Area End -->
           </div>
           <!-- Sidebar Area Start -->
       </div>
   </div>
</div>
@endsection