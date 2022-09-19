<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function BannerForm(){
        return view('admin.Banner.create');
    }

    public function BannerIndex(){
        return view('admin.Banner.banner-index');
    }

}
