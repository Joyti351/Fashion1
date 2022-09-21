@extends('admin.main')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">banner data table</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{url('banner-create')}}" class="btn btn-info">Add-data</a>
                </div>
              </div>

            <div class="card-tools">

            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive " style="height: 490px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Banner_image_1</th>
                  <th>heading_1</th>
                  <th>Banner_image_2</th>
                  <th>heading_2</th>
                  <th>Banner_image_3</th>
                  <th>heading_3</th>

                  <th>status</th>


                </tr>
              </thead>
              <tbody>

              @foreach ($key as $value )

                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$value->heading_1}}</td>
                  <td>{{$value->heading_2}}</td>
                  <td>{{$value->heading_3}}</td>

                  <td><img src="{{asset($value->banner_image_1)}}" width="90px"  heigh="70px" alt="no image" /></td>
                  <td><img src="{{asset($value->banner_image_2)}}" width="90px"  heigh="70px" alt="no image" /></td>
                  <td><img src="{{asset($value->banner_image_3)}}" width="90px"  heigh="70px" alt="no image" /></td>
                  <td>@if($value->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                  <td>
                    <a type="button" href="{{url('slider-edit', $value->id)}}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                    <a type="button" href="{{url('slider-view', $value->id)}}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                    <a type="button" href="{{url('slider-delete', $value->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </tr>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
