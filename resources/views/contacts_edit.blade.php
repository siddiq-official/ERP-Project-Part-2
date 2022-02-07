@extends("allpage")

 
@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Contacts</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /Content Header (Page header) -->


     <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card-body table-responsive p-0">
          <form method="POST" action="{{ url('contactupdate/'.$dt->id) }}">@csrf
              <div class="card-body">
                
                
                 
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Contacts Catagory</label>
                    <select class="form-control select2" style="width: 100%;" name="contacts_catagory">
                      <option selected="selected">Client</option>
                      <option>Civel Engineer</option>
                      <option disabled="disabled">California (disabled)</option>
                      <option>Architecture Engineer</option>
                      <option>Electric Engineer</option>
                      <option>Customer</option>
                      <option>Supplier</option>
                      <option>General</option>
                    </select>
                  </div>
                 

                <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" name="full_name" value="{{$dt->full_name}}"  class="form-control" placeholder="Enter ...">
                </div>

                <div class="form-group">
                  <label>Phone No:</label>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" name="phone_no" class="form-control">
                </div>

                <div class="form-group">
                  <label>Phone No (Optonal):</label>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input name="phone_no_optonal" type="text" class="form-control">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                
                <div class="form-group">
                  <label>Address</label>
                  <textarea name="address" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                

                <div class="form-group">
                  <label for="exampleInputFile">Photo Input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
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

      </section>

    <!-- /Main content -->




@endsection


