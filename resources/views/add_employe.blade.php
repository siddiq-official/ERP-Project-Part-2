@extends("allpage")


@section("contentinput")
<!-- general form elements -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Add Employe</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
      </div>

  </div>
  <!-- /.card-header --> 
  <!-- form start -->
  <form method="POST" action="{{ url('add_employeinfo') }}">
    @csrf
    <div class="card-body">
      
      
       
      <!-- /.form-group -->
      <div class="form-group">
        <label>Employe Position</label>
        <select name="position" class="form-control select2" style="width: 100%;">
          <option>Chief executive officer (CEO)</option>
          <option>Managing Director (MD)</option>
          <option selected="selected">Human resources (HR)</option>
          <option>Accountant</option>
          <option>Engineer</option>
          <option>General Employee</option>
        </select>
      </div>

      <div class="form-group">
        <label>Employe Position Label</label>
        <select name="position_label" class="form-control select2" style="width: 100%;">
          <option>Lifetime</option>
          <option selected="selected">Permanent</option>
          <option>Part-Time</option>
          <option>Contractual </option>
        </select>
      </div>
       
      <div class="form-group">
            <label>Employe Name</label>
            <input name="name" type="text" class="form-control" placeholder="Enter ...">
      </div>

      <!-- <div class="form-group">
            <label>Employe User ID</label>
            <input type="text" class="form-control" placeholder="Enter ...">
      </div> -->

      <div class="form-group">
        <label>Phone No:</label>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input name="phone_no" type="number" class="form-control">
      </div>

      <div class="form-group">
        <label>Phone No (Optonal):</label>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input name="phone_no_optonal" type="number" class="form-control">
      </div>

      <div class="form-group">
        <label>NID No:</label>
        <input name="nid" type="number" class="form-control" placeholder="Enter NID No.">
      </div>

      <div class="form-group">
        <label>Birth Cirtificate No:</label>
        <input name="birth_cirtificate" type="number" class="form-control" placeholder="Enter Birth Cirtificate No.">
      </div>

      <div class="form-group">
        <label>Passport No:</label>
        <input name="passport" type="number" class="form-control" placeholder="Enter Passport No.">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Email Address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address">
      </div>
      
      <div class="form-group">
        <label>Present Address</label>
        <textarea name="present_address" class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
      
      <div class="form-group">
        <label>Parmanent Address</label>
        <textarea name="parmanent_address" class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      <div class="form-group">
        <label>About</label>
        <textarea name="about" class="form-control" rows="3" placeholder="Enter ..."></textarea>
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

@endsection