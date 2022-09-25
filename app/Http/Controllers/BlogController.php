<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogTable;

class BlogController extends Controller
{
    public function blog(){
        return view('user.head.blog.master');
    }

    public function BlogForm(){
        return view('admin.For-blog.blog-create');
    }

    public function BlogStore(Request $request){
        //dd($request->all());
        $data['heading'] = $request->heading;
        $data['heading_1'] = $request->heading_1;
        $data['heading_2'] = $request->heading_2;
        $data['heading_3'] = $request->heading_3;
        $data['date_1'] = $request->date_1;
        $data['date_2'] = $request->date_2;
        $data['date_3'] = $request->date_3;
        $data['status'] = $request->status=='on' ? true : false;

        if($request->bg_image){
            if(!file_exists(public_path('blog_img'))){
            mkdir(public_path('blog_img'),0777,true);
            }

            $image=$request->bg_image;
            $name=$image->GetClientOriginalName();
            $path=public_path('blog_img');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['bg_image']='blog_img/'. $imagename;
        }

        if($request->image_1){
            if(!file_exists(public_path('blog_img'))){
            mkdir(public_path('blog_img'),0777,true);
            }

            $image=$request->image_1;
            $name=$image->GetClientOriginalName();
            $path=public_path('blog_img');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image_1']='blog_img/'. $imagename;
        }
        if($request->image_2){
            if(!file_exists(public_path('blog_img'))){
                mkdir(public_path('blog_img'),0777,true);
            }

            $image=$request->image_2;
            $name=$image->GetClientOriginalName();
            $path=public_path('blog_img');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image_2']='blog_img/'. $imagename;
        }
        if($request->image_3){
            if(!file_exists(public_path('blog_img'))){
            mkdir(public_path('blog_img'),0777,true);
            }

            $image=$request->image_3;
            $name=$image->GetClientOriginalName();
            $path=public_path('blog_img');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $data['image_3']='blog_img/'. $imagename;
        }


        BlogTable::create($data);
        //return redirect()->to('blog-index');

    }
}
