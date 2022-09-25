<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FashionTable;
use App\Models\BannerTable;
use App\Models\TrendTable;
use App\Models\ShopTable;

class HomeController extends Controller
{
    public function home(){
        $data['sliders'] = FashionTable::where('status',true)->get();
        $data['banners'] = BannerTable::where('status',true)->get();
        $data['trends'] = TrendTable::where('status',true)->get();
        return view('user.master',['data'=>$data]);
    }








    public function contact(){
        return view('user.head.contact.contact');
    }



    

     public function index(){
       return view('user.head.index');
    }

    public function about(){
        return view('user.head.about.about');
     }

     public function ShopDetails(){
        return view('user.head.shop-details.shop-details');
     }

     public function ShoppingCart(){
        return view('user.head.shopping-cart.shopping-cart');
     }

     public function checkout(){
        return view('user.head.checkout.checkout');
     }

     public function BlogDetails(){
        return view('user.head.blog-details.blog-details');
    }

    public function sing_in(){
        return view('user.head.sing-in');
    }
}
