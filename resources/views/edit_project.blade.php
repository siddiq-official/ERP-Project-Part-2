@extends("allpage")
 
@section("content")
      
      


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Project</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-x2">
                  New Merchant
              </button></li>
              <li class="breadcrumb-item"><a href="#">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                  New Bill
              </button></li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /Content Header (Page header) -->

    <!-- Main content -->
    
          <section class="content">
            <form method="POST" action="{{ url('editproject/'.$dt->id) }}">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">General</h3>

                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputName">Client Id(Phone no)</label>
                        <input name="client_id" type="text" id="inputName" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputName">Project Name</label>
                        <input name="project_name" type="text" id="inputName" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="inputDescription">Project Description</label>
                        <textarea name="project_description" id="inputDescription" class="form-control" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="inputStatus">Project Type</label>
                        <select name="project_type" class="form-control custom-select">
                          <option selected disabled>Select one</option>
                          <option>Interior</option>
                          <option>Residence</option>
                          <option>Exterior</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="inputClientCompany">Client Company</label>
                        <input name="client_company" type="text" id="inputClientCompany" class="form-control">
                      </div>
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <div class="col-md-6">
                  <div class="card card-secondary">
                    <div class="card-header">
                      <h3 class="card-title">Budget</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputEstimatedBudget">Estimated budget</label>
                        <input name="project_budget" type="number" id="inputEstimatedBudget" class="form-control">
                      </div>
                      <!-- <div class="form-group">
                        <label for="inputSpentBudget">Total amount spent</label>
                        <input type="number" id="inputSpentBudget" class="form-control">
                      </div> -->
                      <div class="form-group">
                        <label for="inputEstimatedDuration">Estimated project duration</label>
                        <input name="project_project_duration" type="text" id="inputEstimatedDuration" class="form-control">
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  
                  <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                </div>
              </div>
            </form>
          </section>

    <!-- /Main content -->


  

@endsection

