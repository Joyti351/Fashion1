@extends('admin.main')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Brand <small>Edit</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputPassword1">banner_image_1</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($banner->banner_image_1)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">heading_1</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$banner->heading_1}}"/>
                  <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">banner_image_2</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($banner->banner_image_2)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">heading_2</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->heading_2}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">banner_image_3</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->banner_image_3)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">heading_3</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->heading_3}}"/>
                    <p class="text-danger"> </p>
                  </div>



                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" {{$key->status==true ? 'checked' : ''}} />
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              </div>
              <input type="hidden" name="id" value=""/>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  @endsection
