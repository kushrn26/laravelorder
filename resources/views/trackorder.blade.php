@extends('layout.main')

@section('section')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Track Order</h1>
              <marquee direction="right"><i class="fas fa-truck"></i></marquee>
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
                <form action="track" method="get">
                    @csrf
                      <table>    
                          <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tracking ID</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    {{-- <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span> --}}
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter Tracking id..." required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <button class="fas fa-truck"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

