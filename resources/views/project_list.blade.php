@extends("allpage")
 
@section("content")
      
      


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project List</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /Content Header (Page header) -->

    <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Project List</h3>

        
      </div>
      <div class="card-body p-0">
        <table class="table table-hover DataTable">
            <thead>
              <tr>
                <th>Project ID</th>
                <th>Client Id</th>
                <th>Project Name</th>
                <th>Project Type</th>
                <th>Project Description</th>
                <th>Client Company</th>
                <th>Estimated budget</th>
                <th>Estimated project duration</th>
                <th>Address</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
              @foreach($a as $b)
                <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->client_id}}</td>
                <td>{{$b->project_name}}</td>
                <td>{{$b->project_type}}</td>
                <td>{{$b->project_description}}</td>
                <td>{{$b->client_company}}</td>
                <td>{{$b->project_budget}}</td>
                <td>{{$b->project_project_duration}}</td>
                <td>{{$b->address}}</td>
                <td><a href="#">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="{{url('project_edit'. $b->id)}}">
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>  
          

    <!-- /Main content -->


  

@endsection

