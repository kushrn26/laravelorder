@extends('layout.main')

@section('section')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Purchase Order</h1>
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
              <h3 class="card-title"></h3>
              <div class="card-body">
                <form action="{{route('editorder', ['orderid'=> $orderdetails->id])}}" method="post">
                  @csrf
                    <table id="emptbl">    
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="username" value="{{$orderdetails->name}}"  class="form-control" id="exampleInputEmail1" placeholder="Enter name..." readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" name="email_id" value="{{$orderdetails->email}}" class="form-control" id="exampleInputPassword1" placeholder="Enter email..." readonly>
                        </div>
                        
                        <div class="row" id="repeatrow">
                          <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                
                                <th>Item Name</th>
                                <th>Item Price</th>
                                <th>Item Quantity</th>
                                <th>Tracking Id</th>
                                <th>Add Tracking</th>
                              </tr>
                            </thead>
                            @foreach($orderitems as $orderitem)
                            <tr>
                                <td>{{$orderitem->itemame}}</td>
                                <td>{{$orderitem->quantity}}</td>
                                <td>{{$orderitem->price}}</td>
                                <td>{{($orderitem->trackingid ? $orderitem->trackingid : 'N/A')}}</td>
                                <td>
                                  <input type="text" name="{{"trackingid_$orderitem->id"}}" placeholder="Enter Tracking Details"/>
                                
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        </div>
                      
                      

                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </table>
                  </form>
            </div>
              
             
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               
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

