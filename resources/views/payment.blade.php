@extends("allpage")




@section("contentinput")
<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Paymen</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                  </div>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('add_payment') }}">
                @csrf
                <div class="card-body">
                  
                  
                   
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Online Payment Method</label>
                      <select name="online_payment_method" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Nogod</option>
                        <option>Bkash</option>
                        <option>Roket</option>
                      </select>
                    </div>
                   

                    <div class="form-group">
                          <label>Full Name</label>
                          <input name="full_name" type="text" class="form-control" placeholder="Enter Full Name.">
                    </div>

                    <div class="form-group">
                          <label>Project Name</label>
                          <input name="project_name" type="text" class="form-control" placeholder="Enter Project/Shope Name.">
                    </div>

                    <div class="form-group">
                      <label>Phone No:</label>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input name="phone_no" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Amount (Taka)</label>
                      <input name="tk_amount" type="number" class="form-control" id="exampleInputEmail1" placeholder="example: 50000">
                    </div>


                    <div class="form-group">
                          <label>In word</label>
                          <input name="tk_in_word" type="text" class="form-control" placeholder="Enter Full Name.">
                    </div>
                   

                    <div class="form-group">
                          <label>Transaction ID</label>
                          <input name="transaction_id" type="text" class="form-control" placeholder="Enter Full Name.">
                    </div>

                    
                    <div class="form-group">
                      <label>Address</label>
                      <textarea name="address" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="form-group">
                      <label>Remarks</label>
                      <textarea name="remarks" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    

                    <div class="form-group">
                      <label for="exampleInputFile">Upload Screenshot as prove</label>
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
                </div>
              </form>
            </div>
            <!-- /.card -->

@endsection