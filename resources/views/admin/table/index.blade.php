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
            <h3 class="card-title">data table</h3>

            <div class="card-tools">
              
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive " style="height: 490px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>id</th>
                  <th>heading1</th>
                  <th>heading2</th>
                  <th>description</th>
                  <th>bg_image</th>
                  <th>status</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                
              @foreach ($key as $value )
                  
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$value->heading1}}</td>
                  <td>{{$value->heading2}}</td>
                  <td>{{$value->description}}</td>
                  
                  <td><img src="{{asset($value->bg_image)}}" width="90px"  heigh="70px" alt="no image" /></td>
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
