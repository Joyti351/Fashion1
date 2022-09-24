<?php

namespace App\Http\Controllers;

use App\Models\BannerTable;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function BannerForm(){
        return view('admin.Banner.banner-create');
    }



    public function BannerStore(Request $request){
    //dd($banner->all());

    $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->banner_image_1){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$request->banner_image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_1']='banner_img/'. $imagename;
    }
    if($request->banner_image_2){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$request->banner_image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_2']='banner_img/'. $imagename;
    }
    if($request->banner_image_3){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$request->banner_image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_3']='banner_img/'. $imagename;
    }


    BannerTable::create($data);
    return redirect()->to('banner-index');

    }
    public function BannerIndex(){

        $data=BannerTable::all();
        //dd($data->all());

     return view('admin.Banner.banner-index',['key'=>$data]);

    }

    public function BannerView($id){
        $data=BannerTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.Banner.banner-view',['key' => $data]);
        }

    }

    public function BannerEdit($id){
        $data=BannerTable::where(['id'=>$id])->first();
        return view('admin.Banner.banner-edit',['key' => $data]);
    }

    public function BannerUpdate(Request $request){
        $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->banner_image_1){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$request->banner_image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_1']='banner_img/'. $imagename;
    }
    if($request->banner_image_2){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$request->banner_image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_2']='banner_img/'. $imagename;
    }
    if($request->banner_image_3){
        if(!file_exists(public_path('banner_img'))){
            mkdir(public_path('banner_img'),0777,true);
        }

        $image=$request->banner_image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('banner_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['banner_image_3']='banner_img/'. $imagename;
    }
    $slider = BannerTable::where('id',$request->id)->first();
        if($slider){
            $slider->update($data);
        }

        return redirect()->to('banner-index');

    }

    public function BannerDelete($id){
        $data=BannerTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }


}
