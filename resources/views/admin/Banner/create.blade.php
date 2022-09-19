
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
            <h3 class="card-title">data table <small>for ecommerce</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action=" " method="post" id="quickForm"
            enctype="multipart/form-data">
            @csrf
            <div class="card-body">

              <div class="form- roup">
                <label for="exampleInputPassword1">banner-image-1</label>
                <input type="file" name="banner_image" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">heading1</label>
                <input type="text" name="heading1" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form- roup">
                <label for="exampleInputPassword1">banner-image-2</label>
                <input type="file" name="banner_image" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">heading2</label>
                <input type="text" name="heading1" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form- roup">
                <label for="exampleInputPassword1">banner-image-3</label>
                <input type="file" name="banner_image" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">heading3</label>
                <input type="text" name="heading1" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">Active </label>
                </div>
              </div>
            </div>
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