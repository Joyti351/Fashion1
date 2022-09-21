public function BannerStore(Request $request){
    //dd($request->all());
    $data['heading_1'] = $request->heading_1;
    $data['heading_2'] = $request->heading_2;
    $data['heading_3'] = $request->heading_3;
    $data['status'] = $request->status=='on' ? true : false;

    if($request->banner_image_1){
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
    BannerTable::create($data);
    return redirect()->to('slider-index');

}
