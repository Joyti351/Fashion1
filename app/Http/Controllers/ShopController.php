<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function ShopForm(){
        return view('admin.For-shop.shop-create');
    }
}
