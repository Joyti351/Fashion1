<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('user.master');
    }
    public function contact(){
        return view('user.head.contact');
    }

    public function blog(){
        return view('user.head.blog');
    }

    public function shop(){
        return view('user.head.shop');
    }

     public function index(){
       return view('user.head.index');
    }

    public function about(){
        return view('user.head.about');
     }

     public function ShopDetails(){
        return view('user.head.shop-details');
     }

     public function ShoppingCart(){
        return view('user.head.shopping-cart');
     }

     public function checkout(){
        return view('user.head.checkout');
     }

     public function BlogDetails(){
        return view('user.head.blog-details');
    }
}
