@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
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
                       <li>{{languageName($blog_detail->title)}}</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="shop-category-area single-blog-page mtb-60px">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
               <div class="blog-posts ">
                   <div class="single-blog-post blog-grid-post">
                       <div class="blog-post-content-inner mt-30px">
                           <h4 class="blog-title"><a href="javascript:;">{{languageName($blog_detail->title)}}</a></h4>
                           <ul class="blog-page-meta">
                               <li>
                                   <a href="javascript:;"><i class="ion-calendar"></i> {{date_format($blog_detail->created_at,'d/m/Y')}}</a>
                               </li>
                           </ul>
                       </div>
                       <div class="single-post-content">
                           {!!languageName($blog_detail->content)!!}
                       </div>
                   </div>
                   <!-- single blog post -->
               </div>
               <div class="blog-related-post">
                   <div class="row">
                       <div class="col-md-12 text-center">
                           <!-- Section Title -->
                           <div class="section-title underline-shape">
                               <h2>Bài viết liên quan</h2>
                           </div>
                           <!-- Section Title -->
                       </div>
                   </div>
                   <div class="row">
                      @foreach ($bloglq as $item)
                      <div class="col-md-4 mb-lm-30px">
                        <div class="blog-post-media">
                            <div class="blog-image single-blog">
                                <a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img class="img-responsive" src="{{$item->image}}" alt="blog"></a>
                            </div>
                        </div>
                        <div class="blog-post-content-inner mt-30px">
                            <h4 class="blog-title"><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h4>
                            <ul class="blog-page-meta">
                                <li>
                                    <a href="{{route('detailBlog',['slug'=>$item->slug])}}"><i class="ion-calendar"></i> {{date_format($item->created_at,'d/m/Y')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                      @endforeach
                       
                   </div>
               </div>
           </div>
           <!-- Sidebar Area Start -->
       </div>
   </div>
</div>
@endsection