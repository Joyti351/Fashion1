<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrendTable;

class TrendController extends Controller
{
    public function TrendForm(){
        return view('admin.Trend.trend-create');
    }

    public function TrendStore(Request $request){
        //dd($request->all());
        $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->image_1){
        if(!file_exists(public_path('trend_img'))){
            mkdir(public_path('trend_img'),0777,true);
        }

        $image=$request->image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('trend_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_1']='trend_img/'. $imagename;
    }
    if($request->image_2){
        if(!file_exists(public_path('trend_img'))){
            mkdir(public_path('trend_img'),0777,true);
        }

        $image=$request->image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('trend_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_2']='trend_img/'. $imagename;
    }
    if($request->image_3){
        if(!file_exists(public_path('trend_img'))){
            mkdir(public_path('trend_img'),0777,true);
        }

        $image=$request->image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('trend_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_3']='trend_img/'. $imagename;
    }


    TrendTable::create($data);
    return redirect()->to('trend-index');
    }

    public function TrendIndex(){
        $data=Trendtable::all();
        return view('admin.Trend.trend-index',['key'=>$data]);
    }
    public function TrendView($id){
        $data=TrendTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.Trend.trend-view',['key' => $data]);
        }
    }

    public function TrendEdit($id){
        $data=TrendTable::where(['id'=>$id])->first();
        return view('admin.Trend.trend-edit',['key' => $data]);
    }

    public function TrendUpdate(Request $request){
        //dd($request->all());
        $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->image_1){
        if(!file_exists(public_path('trend_img'))){
            mkdir(public_path('trend_img'),0777,true);
        }

        $image=$request->image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('trend_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_1']='trend_img/'. $imagename;
    }
    if($request->image_2){
        if(!file_exists(public_path('trend_img'))){
            mkdir(public_path('trend_img'),0777,true);
        }

        $image=$request->image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('trend_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_2']='trend_img/'. $imagename;
    }
    if($request->image_3){
        if(!file_exists(public_path('trend_img'))){
            mkdir(public_path('trend_img'),0777,true);
        }

        $image=$request->image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('trend_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_3']='trend_img/'. $imagename;
    }
    $slider = TrendTable::where('id',$request->id)->first();
        if($slider){
            $slider->update($data);
        }

        return redirect()->to('trend-index');



    }

    public function TrendDelete($id){
        $data=TrendTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }
}
