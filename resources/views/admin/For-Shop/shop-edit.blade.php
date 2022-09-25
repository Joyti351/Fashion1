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
              <h3 class="card-title">Trend <small>Edit</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url('shop-update') }}" method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">



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
                    <label for="exampleInputEmail1">blance_1</label>
                    <input type="text" name="blance_1" class="form-control" id="exampleInputEmail1" value="{{$key->blance_1}}"/>
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
                    <label for="exampleInputEmail1">blance_2</label>
                    <input type="text" name="blance_2" class="form-control" id="exampleInputEmail1" value="{{$key->blance_2}}"/>
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
                    <label for="exampleInputEmail1">blance_3</label>
                    <input type="text" name="blance_3" class="form-control" id="exampleInputEmail1" value="{{$key->blance_3}}"/>
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
