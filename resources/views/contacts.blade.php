@extends("allpage")

 
@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                  New Contact
              </button></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /Content Header (Page header) -->


     <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover DataTable">
            <thead>
              <tr>
                <th>Photo</th>
                <th>Contacts Catagory</th>
                <th>Full Name</th>
                <th>Phone No:</th>
                <th>Phone No(optonal):</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
              @foreach($a as $b)
                <tr>
                <td><i class="fas fa-portrait"></i></td>
                <td>{{$b->contacts_catagory}}</td>
                <td>{{$b->full_name}}</td>
                <td>{{$b->phone_no}}</td>
                <td>{{$b->phone_no_optonal}}</td>
                <td>{{$b->email}}</td>
                <td>{{$b->address}}</td>
                <td><a href="#">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="{{url('contact_edit'. $b->id)}}">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="#">
                      <i class="fas fa-trash"></i>
                    </a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
        <!-- /.card -->

      </section>

    <!-- /Main content -->




@endsection


<!-- Contact content -->
    <section class="content">
      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Contacts</h3>

                  <!-- <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>uu</button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove">uu</i></button>
                  </div> -->

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('contactstore') }}">
                @csrf
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
                        <input type="text" name="full_name" class="form-control" placeholder="Enter ...">
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
                  <button type="submit" class="btn btn-primary" onclick="{{ url('contacts') }}">Submit</button>
                </div>
              </form>
            </div>

            <!-- /End start -->

            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    </section>
<!-- / Invoice content -->