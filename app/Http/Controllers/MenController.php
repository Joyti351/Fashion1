<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenTable;

class MenController extends Controller
{
    public function men(){
        $data['mens'] = MenTable::where('status',true)->get();
        return view('user.shopping.men.master',['data'=>$data]);
    }

    public function Form(){
        return view('admin.men.men-create');
    }



    public function Store(Request $request){
        //dd($request->all());
    $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['blance_1'] = $request->blance_1;
    $data['blance_2'] = $request->blance_2;
    $data['blance_3'] = $request->blance_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->image_1){
        if(!file_exists(public_path('men_img'))){
            mkdir(public_path('men_img'),0777,true);
        }

        $image=$request->image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('men_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_1']='men_img/'. $imagename;
    }
    if($request->image_2){
        if(!file_exists(public_path('men_img'))){
            mkdir(public_path('men_img'),0777,true);
        }

        $image=$request->image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('men_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_2']='men_img/'. $imagename;
    }
    if($request->image_3){
        if(!file_exists(public_path('men_img'))){
            mkdir(public_path('men_img'),0777,true);
        }

        $image=$request->image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('men_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_3']='men_img/'. $imagename;
    }


    MenTable::create($data);
    return redirect()->to('men-index');
    }

    public function Index(){
        $data=Mentable::all();
        return view('admin.men.men-index',['key'=>$data]);
    }

    public function View($id){
        $data=MenTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.men.men-view',['key' => $data]);
        }
    }
    public function Edit($id){
        $data=MenTable::where(['id'=>$id])->first();
        return view('admin.men.men-edit',['key' => $data]);
    }

    public function Update(Request $request){
        //dd($request->all());
    $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['blance_1'] = $request->blance_1;
    $data['blance_2'] = $request->blance_2;
    $data['blance_3'] = $request->blance_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->image_1){
        if(!file_exists(public_path('men_img'))){
            mkdir(public_path('men_img'),0777,true);
        }

        $image=$request->image_1;
        $name=$image->GetClientOriginalName();
        $path=public_path('men_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_1']='men_img/'. $imagename;
    }
    if($request->image_2){
        if(!file_exists(public_path('men_img'))){
            mkdir(public_path('men_img'),0777,true);
        }

        $image=$request->image_2;
        $name=$image->GetClientOriginalName();
        $path=public_path('men_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_2']='men_img/'. $imagename;
    }
    if($request->image_3){
        if(!file_exists(public_path('men_img'))){
            mkdir(public_path('men_img'),0777,true);
        }

        $image=$request->image_3;
        $name=$image->GetClientOriginalName();
        $path=public_path('men_img');
        $imagename=time().'_'.$name;

        $image->move($path,$imagename);
        $data['image_3']='men_img/'. $imagename;
    }


    $slider = MenTable::where('id',$request->id)->first();
        if($slider){
            $slider->update($data);
        }
    return redirect()->to('men-index');
    }

    public function Delete($id){
        $data=MenTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }
}
