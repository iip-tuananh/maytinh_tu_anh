<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerqc'] = BannerAds::where('status',1)->get(['name','image','id']);
        $data['hotnews'] = Blog::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->limit(6)->get(['id','title','slug','created_at','image','description']);
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['spnoibat'] = Product::where(['status'=>1,'discountStatus'=>1])->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description')->limit(12)->get();
        return view('home',$data);
    }
}
