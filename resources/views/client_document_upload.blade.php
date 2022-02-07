@extends("allpage")




@section("contentinput")
<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add People</h3>

                  <!-- <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                  </div> -->

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  
                  
                   
                    <!-- /.form-group -->
                    <!-- <div class="form-group">
                      <label>Online Payment Method</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Nogod</option>
                        <option>Bkash</option>
                        <option>Roket</option>
                      </select>
                    </div> -->
                   

                    <div class="form-group">
                          <label>Full Name</label>
                          <input type="text" class="form-control" placeholder="Enter Full Name.">
                    </div>

                    <div class="form-group">
                          <label>Project Name</label>
                          <input type="text" class="form-control" placeholder="Enter Project/Shope Name.">
                    </div>

                    <div class="form-group">
                      <label>Phone No:</label>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>

                    

                    <div class="form-group">
                      <label>Remarks</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    

                    <div class="form-group">
                      <label for="exampleInputFile">Upload File<h6>**File must be .pdf**</h6></label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="exampleInputFile">Upload</span>
                        </div>
                      </div>
                    </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card -->

@endsection