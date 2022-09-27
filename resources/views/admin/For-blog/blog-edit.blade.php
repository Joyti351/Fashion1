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
              <h3 class="card-title">Blog <small>Edit</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url('blog-update') }}" method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">



                <div class="form-group">
                    <label for="exampleInputPassword1">bg_image</label>
                    <input type="file" name="bg_image" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->bg_image)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">heading</label>
                    <input type="text" name="heading" class="form-control" id="exampleInputEmail1" value="{{$key->heading}}"/>
                    <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">image_1</label>
                    <input type="file" name="image_1" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image_1)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">heading_1</label>
                    <input type="text" name="heading_1" class="form-control" id="exampleInputEmail1" value="{{$key->heading_1}}"/>
                    <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">date_1</label>
                    <input type="text" name="date_1" class="form-control" id="exampleInputEmail1" value="{{$key->date_1}}"/>
                    <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">image_2</label>
                    <input type="file" name="image_2" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image_2)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">heading_2</label>
                    <input type="text" name="heading_2" class="form-control" id="exampleInputEmail1" value="{{$key->heading_2}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">date_2</label>
                    <input type="text" name="date_2" class="form-control" id="exampleInputEmail1" value="{{$key->date_2}}"/>
                    <p class="text-danger"> </p>
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">image_3</label>
                    <input type="file" name="image_3" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image_3)}}" width="110px" height="80px" alt="no image"/>



                    <p class="text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">heading_3</label>
                    <input type="text" name="heading_3" class="form-control" id="exampleInputEmail1" value="{{$key->heading_3}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">date_3</label>
                    <input type="text" name="date_3" class="form-control" id="exampleInputEmail1" value="{{$key->date_3}}"/>
                    <p class="text-danger"> </p>
                </div>



                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck"{{$key->status==true ? 'checked' : ''}}  />
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              </div>
              <input type="show" name="id" value="{{$key->id}}"/>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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
