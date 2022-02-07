@extends("allpage")
 
@section("content")
					
		<!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Merchant List</h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover DataTable">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Contacts Catagory</th>
                <th>Phone No:</th>
                <th>Phone No(optonal):</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Imtiaj</td>
                <td>Supplier</td>
                <td>01534735582</td>
                <td>01725468518</td>
                <td>imtiaj@gmail.com</td>
                <td>Shahi mansion, Professor para, Mirjapur, Suihari, Dinajpur sadar, Dinajpur</td>
                <td><a href="#">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="#">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="#">
                      <i class="fas fa-trash"></i>
                    </a>
                </td>
              </tr>
              <tr>
                <td>Shahriar</td>
                <td>Supplier</td>
                <td>01536548521</td>
                <td>01725154585</td>
                <td>shahriar2@gmail.com</td>
                <td>Shahi mansion, Professor para, Mirjapur, Suihari, Dinajpur sadar, Dinajpur</td>
                <td><a href="#">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="#">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="#">
                      <i class="fas fa-trash"></i>
                    </a>
                </td>
              </tr>
              <tr>
                <td>Sakib</td>
                <td>Supplier</td>
                <td>01595683458</td>
                <td>01724689517</td>
                <td>sakib5@gmail.com</td>
                <td>Shahi mansion, Professor para, Mirjapur, Suihari, Dinajpur sadar, Dinajpur</td>
                <td><a href="#">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="#">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="#">
                      <i class="fas fa-trash"></i>
                    </a>
                </td>
              </tr>
              <tr>
                <td>Ashik</td>
                <td>Supplier</td>
                <td>01596587458</td>
                <td>01798254685</td>
                <td>ashik@gmail.com</td>
                <td>Shahi mansion, Professor para, Mirjapur, Suihari, Dinajpur sadar, Dinajpur</td>
                <td><a href="#">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="#">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="#">
                      <i class="fas fa-trash"></i>
                    </a>
                </td>
              </tr>
              <tr>
                <td>Al Amin</td>
                <td>Supplier</td>
                <td>01526854297</td>
                <td>01771385469</td>
                <td>alamin@gmail.com</td>
                <td>Shahi mansion, Professor para, Mirjapur, Suihari, Dinajpur sadar, Dinajpur</td>
                <td><a href="#">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="#">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="#">
                      <i class="fas fa-trash"></i>
                    </a>
                </td>
              </tr>

              <!-- @foreach($a as $b) 
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
              @endforeach -->
              
            </tbody>
          </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
@endsection

