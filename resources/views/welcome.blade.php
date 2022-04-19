@extends('layout.main')

@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Purchase Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cart</li>
              </ol>
              
            </div>
          </div>
        </div><!-- /.container-fluid -->
        
      </section>
    <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
{{--               
              <button type="button" style="width: auto; height: auto; margin-left: auto;"
               class="btn btn-block btn-success btn-lg" onclick="openadd()">Add Order</button> --}}
               <a href = "/add" class="addorder btn btn-success btn-lg">Add Order</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        
                        <th>Order Id</th>
                        <th>E-mail</th>
                        <th>View</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->email}}</td>
                        <td>
                          <a href="{{route('editorder', ['orderid'=> $order->id])}}" class="btn btn-success">View/Update
                          </a>
                          </td>
                        <td><a href="{{route('deleteorder', ['orderid'=> $order->id])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                  </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
@endsection
