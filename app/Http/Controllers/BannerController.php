<?php

namespace App\Http\Controllers;

use App\Models\BannerTable;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function BannerForm(){
        return view('admin.Banner.banner-create');
    }

    /*public function BannerIndex(){
        $value=BannerTable::all();
        return view('admin.banner.banner-index',['key'=>$value]);
    }*/

    public function BannerStore(Request $banner){
    dd($banner->all());
}


}
