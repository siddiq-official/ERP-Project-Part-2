@extends("allpage")
 
@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="card-header">
        <h3 class="card-title">Employe List with Status</h3>

        <!-- <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover DataTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Position</th>
              <th>Phone No</th>
              <th>Phone No (Optonal)</th>
              <th>Email </th>
              <th>Present Address</th>
              <th>Parmanent Address</th>
              <th>View</th>
            </tr>
          </thead>
          <tbody>
            @foreach($employe as $x)
            <tr>
              <td>{{$x->id}}</td> 
              <td>{{$x->name}}</td>
              <td>{{$x->position}}</td>
              <td>{{$x->phone_no}}</td>
              <td>{{$x->phone_no_optonal}}</td>
              <td>{{$x->email}}</td>
              <td>{{$x->present_address}}</td>
              <td>{{$x->parmanent_address}}</td>
              <td>{{$x->about}}</td>
              <td><a href="#">
                    <i class="far fa-eye"></i>
                  </a>
                  <a href="{{url('edit_employe'. $x->id)}}">
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
    <!-- /.content -->
@endsection
