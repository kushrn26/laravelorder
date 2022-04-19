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
                <form action="add" method="post">
                  @csrf
                    <table id="emptbl">    
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter name..." required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" name="email_id" class="form-control" id="exampleInputPassword1" placeholder="Enter email..." required>
                        </div>
                        
                        <div class="row" id="repeatrow">
                            <div class="col-3">
                                <label for="">Product Name</label>
                            <input type="text" name="product_name[]" class="form-control" placeholder="Enter Product name..."required>
                            </div>
                            <div class="col-4">
                                <label for="">Quantity</label>
                            <input type="text" name="quantity[]" class="form-control" placeholder="Enter quantity.."required>
                            </div>
                            <div class="col-5">
                                <label for="">Price</label>
                            <input type="text" name="price[]" class="form-control" placeholder="Price..."required>
                            </div>
                        </div>
                        {{-- Append New Data --}}
                        <div class="row" id="appendrow">
                            
                        </div>
                        {{-- Close append new data --}}

                        <div class="col-6">
                            <div>
                                <input type="button" value="+" id="clickme">
                            </div>
                        </div>

                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
<script>
    $('#clickme').on('click', function(){
       var repeatrow = $('#repeatrow').html();
       $('#appendrow').append(repeatrow);
    });
    // var clickme = document.getElementById('clickme');
    // clickme.addEventListener('click', function(){
    //     var repeatrow = document.getElementById('repeatrow');
    //     document.getElementById('appendrow').innerHTML += repeatrow.innerHTML ;
    // });
</script>
@endsection

