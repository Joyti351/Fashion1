<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FileUploadController;
use Illuminate\Http\Request;
use App\Models\Pricing;

class PricingController extends Controller
{

    public function index(){
        //quarry
        $data=Pricing::all();
        return view('ownerside.pricing.index',['key'=>$data,'menu' => 'pricing']);

    }



    public function create(){
        return view('ownerside.pricing.create');
    }

    public function store(request $request){
        /* $request->validate([
            // 'name' => 'required',
         ]);*/
        // dd($request->all());

         $data['category']=$request->category;
         $data['price']=$request->price;
         $data['image']=$request->image;

         $data['status']=$request->status=='on'? true:false;




         if($request->image){
             $imagename= app(FileUploadController::class)->fileUpload($request->image,'food_images');

             $data['image']= $imagename;
         }





       Pricing::create($data);
         return redirect()->Route('admin.pricing.index');


     }

     //view section
    public function view($id){
        // print_r($id->all());
        $data=Pricing::where(['id'=>$id])->first();
        if($data){
         return view('ownerside.pricing.view',['x'=>$data,'menu' => 'category']);
        }
     }


//edit section
public function edit($id){

    $data=Pricing::where(['id'=>$id])->first();

     return view('ownerside.pricing.edit',['datas'=>$data,'menu' => 'pricing']);
    }


//update Section
     public function update(request $request){
        /* $request->validate([
            // 'name' => 'required',
         ]);*/
        // dd($request->all());

         $data['category']=$request->category;
         $data['price']=$request->price;
         $data['image']=$request->image;

         $data['status']=$request->status=='on'? true:false;




         if($request->image){
             $imagename= app(FileUploadController::class)->fileUpload($request->image,'food_images');

             $data['image']= $imagename;
         }





         $datas=Pricing::where('id',$request->id)->first();
         if($datas){
             $datas->update($data);
         }

         return redirect()->Route('admin.pricing.index');


     }

     //delete section
   public function delete($id){
    $data=Pricing::where(['id'=>$id])->first();
    if($data){
        $data->delete();
        return redirect()->back();
    }

}
}
