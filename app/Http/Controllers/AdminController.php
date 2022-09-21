<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FashionTable;

class AdminController extends Controller
{
    public function home(){
        return view('admin.master');
    }
    public function create(){
        return view('admin.table.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $data['heading1'] = $request->heading1;
        $data['heading2'] = $request->heading2;
        $data['description'] = $request->description;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->bg_image){
            if(!file_exists(public_path('images'))){
                mkdir(public_path('images'),0777,true);
            }

            $image=$request->bg_image;
            $name=$image->GetClientOriginalName();
            $path=public_path('images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['bg_image']='images/'.$imagename;
        }
        FashionTable::create($data);
        return redirect()->to('slider-index');

    }
    public function index(){
        //quary
        $value=FashionTable::all();
        return view('admin.table.index',['key'=>$value]);
    }

    public function view($id){
        $data=FashionTable::where(['id'=>$id])->first();
        if($data){
            return view('admin.table.show',['key' => $data]);
        }

    }

    public function edit($id){
        $data=FashionTable::where(['id'=>$id])->first();
        return view('admin.table.edit',['key' => $data]);
    }

    public function update(Request $request){
        //dd($request->all());
        $data['heading1'] = $request->heading1;
        $data['heading2'] = $request->heading2;
        $data['description'] = $request->description;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->bg_image){
            if(!file_exists(public_path('images'))){
                mkdir(public_path('images'),0777,true);
            }

            $image=$request->bg_image;
            $name=$image->GetClientOriginalName();
            $path=public_path('images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['bg_image']='images/'. $imagename;


        }

        return redirect()->to('slider-index');

    }

    public function delete($id){
        $data=FashionTable::where(['id' => $id])->first();
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }


}
