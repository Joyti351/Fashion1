<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopTable;

class ShopController extends Controller
{
    public function shop(){
        $data['shops'] = ShopTable::where('status',true)->get();
        return view('user.head.shop.master',['data'=>$data]);
        //return view('user.head.shop.master');
    }

    public function ShopForm(){
        return view('admin.For-shop.shop-create');
    }

    public function ShopStore(Request $request){
        //dd($request->all());
    $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['blance_1'] = $request->blance_1;
    $data['blance_2'] = $request->blance_2;
    $data['blance_3'] = $request->blance_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->image_1){
        if(!file_exists(public_path('shop_img'))){
            mkdir(public_path('shop_img'),0777,true);
        }

        $image=$request->image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('shop_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_1']='shop_img/'. $imagename;
    }
    if($request->image_2){
        if(!file_exists(public_path('shop_img'))){
            mkdir(public_path('shop_img'),0777,true);
        }

        $image=$request->image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('shop_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_2']='shop_img/'. $imagename;
    }
    if($request->image_3){
        if(!file_exists(public_path('shop_img'))){
            mkdir(public_path('shop_img'),0777,true);
        }

        $image=$request->image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('shop_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_3']='shop_img/'. $imagename;
    }


    ShopTable::create($data);
    return redirect()->to('shop-index');
    }

    public function ShopIndex(){
        $data=Shoptable::all();
        return view('admin.For-shop.shop-index',['key'=>$data]);
    }
    public function ShopView($id){
        $data=ShopTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.For-shop.shop-view',['key' => $data]);
        }
    }

    public function ShopEdit($id){
        $data=ShopTable::where(['id'=>$id])->first();
        return view('admin.For-shop.shop-edit',['key' => $data]);
    }

    public function ShopUpdate(Request $request){
        //dd($request->all());
    $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['blance_1'] = $request->blance_1;
    $data['blance_2'] = $request->blance_2;
    $data['blance_3'] = $request->blance_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->image_1){
        if(!file_exists(public_path('shop_img'))){
            mkdir(public_path('shop_img'),0777,true);
        }

        $image=$request->image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('shop_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_1']='shop_img/'. $imagename;
    }
    if($request->image_2){
        if(!file_exists(public_path('shop_img'))){
            mkdir(public_path('shop_img'),0777,true);
        }

        $image=$request->image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('shop_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_2']='shop_img/'. $imagename;
    }
    if($request->image_3){
        if(!file_exists(public_path('shop_img'))){
            mkdir(public_path('shop_img'),0777,true);
        }

        $image=$request->image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('shop_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_3']='shop_img/'. $imagename;
    }
    $slider = ShopTable::where('id',$request->id)->first();
        if($slider){
            $slider->update($data);
        }
    return redirect()->to('shop-index');
    }



    public function ShopDelete($id){
        $data=ShopTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }
}
