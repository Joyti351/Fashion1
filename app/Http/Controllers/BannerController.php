<?php

namespace App\Http\Controllers;

use App\Models\BannerTable;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function BannerForm(){
        return view('admin.Banner.banner-create');
    }



    public function BannerStore(Request $banner){
    //dd($banner->all());

    $data['heading_1'] = $banner->heading_1;
    $data['heading_2'] = $banner->heading_2;
    $data['heading_3'] = $banner->heading_3;
    $data['status'] = $banner->status=='on' ? true : false;

    if($banner->banner_image_1){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$banner->banner_image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_1']='banner_img/'. $imagename;
    }
    if($banner->banner_image_2){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$banner->banner_image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_2']='banner_img/'. $imagename;
    }
    if($banner->banner_image_3){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$banner->banner_image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_3']='banner_img/'. $imagename;
    }


    BannerTable::create($data);

}
public function BannerIndex(){

    $data=BannerTable::all();
    dd($data->all());

    //return view('admin.banner.banner-index');
    //,['key'=>$data]
}


}
