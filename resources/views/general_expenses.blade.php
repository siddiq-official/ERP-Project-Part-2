@extends("allpage")
 
@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Expence</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                  New General Expence
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
              <th>Purpas</th>
              <th>Person Name</th>
              <th>Detail</th>
              <th>Amount(TK)</th>
              <th>Date</th>
              <th>View</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tea</td>
              <td>Imtiaj</td>
              <td>200 gm tea.</td>
              <td>12-12-21</td>
              <td>42</td>
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
              <td>Suger</td>
              <td>Imtiaj</td>
              <td>1 kg sugur.</td>
              <td>12-12-21</td>
              <td>80</td>
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
              <td>Jharu</td>
              <td>Imtiaj</td>
              <td>1 pic Fool jharu.</td>
              <td>12-12-21</td>
              <td>60</td>
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
          </tbody>
        </table>
      </div>
      <!-- /.card -->

    </section>

    <!-- /Main content -->
@endsection

<!-- General Expence content -->
    <section class="content">

      <div class="modal fade" id="modal-x2">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Merchant</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- form start -->
              <form role="form">
                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="col-md-2 float-left">Select Merchant</div>
                      <div class="col-md-4 float-left">
                        <div class="input-group">
                          <select class="form-control required selectpicker" id="merchant">
                            <option value="" opbal="0" mobile="">Select option</option>
                            <option value="93" opbal="0.00" mobile="01712032435">option 1</option>
                            <option value="33" opbal="0.00" mobile="01534735582">option 2</option>
                            <option value="34" opbal="1000.00" mobile="01850787817">option 3</option>
                          </select>
                        </div>
                      </div> 
                      <div class="col-md-2 float-left">Date</div>
                      <div class="col-md-4 float-left">
                        <input type="text" class="date-picker form-control" id="tr_date" readonly="" value="30-11-2021">
                        <input type="hidden" id="type" value="general_expenses">
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="col-md-2 float-left">Merchant Mobile</div>
                      <div class="col-md-4 float-left">
                        <input type="text" class="form-control" id="merchant-mobile" readonly="">
                      </div>
                      <div class="col-md-2 float-left">General Expence No</div>
                      <div class="col-md-4 float-left">
                        <input type="text" class="form-control" id="slno" placeholder="General Expence No">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table class="table table-bordered">
                              <thead>                  
                                <tr>
                                  <th style="width: 5%"> </th>
                                  <th style="width: 10%">Sl</th>
                                  <th style="width: 10%">Items</th>
                                  <th style="width: 35%">Description</th>
                                  <th style="width: 10%">Sales Price</th>
                                  <th style="width: 10%">Rate</th>
                                  <th style="width: 10%">Qty</th>
                                  <th style="width: 10%">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>+</td>
                                  <td>1.</td>
                                  <td><input type="text" class="form-control" id="slno" placeholder="General Expence No"></td>
                                  <td><textarea class="form-control" rows="1" placeholder="Enter ..."></textarea></td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>
                                  <td><span class="current-due float-right">0.00</span></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Sub Total</td>
                                  <td><span class="current-due float-right">0.00</span></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Pre Due</td>
                                  <td><span class="current-due float-right">0.00</span></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Payment</td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Discount</td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>  
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                          
                        </div>
                        <!-- /.card -->

                      </div>
                      <!-- /.col -->
                      
                    </div>
                  
                </div>
                <!-- /.card-body -->

                

                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-primary">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /End start -->

            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>





      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New General Expence</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- form start -->
              <form role="form">
                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="col-md-2 float-left">Select Merchant</div>
                      <div class="col-md-4 float-left">
                        <div class="input-group">
                          <select class="form-control required selectpicker" id="merchant">
                            <option value="" opbal="0" mobile="">Select option</option>
                            <option value="93" opbal="0.00" mobile="01712032435">option 1</option>
                            <option value="33" opbal="0.00" mobile="01534735582">option 2</option>
                            <option value="34" opbal="1000.00" mobile="01850787817">option 3</option>
                          </select>
                        </div>
                      </div> 
                      <div class="col-md-2 float-left">Date</div>
                      <div class="col-md-4 float-left">
                        <input type="date" class="date-picker form-control" id="tr_date" readonly="" value="30-11-2021">
                        <input type="hidden" id="type" value="general_expenses">
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="col-md-2 float-left">Merchant Mobile</div>
                      <div class="col-md-4 float-left">
                        <input type="text" class="form-control" id="merchant-mobile" readonly="">
                      </div>
                      <div class="col-md-2 float-left">General Expence No</div>
                      <div class="col-md-4 float-left">
                        <input type="text" class="form-control" id="slno" placeholder="General Expence No">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table class="table table-bordered">
                              <thead>                  
                                <tr>
                                  <th style="width: 5%"> </th>
                                  <th style="width: 10%">Sl</th>
                                  <th style="width: 10%">Items</th>
                                  <th style="width: 35%">Description</th>
                                  <th style="width: 10%">Sales Price</th>
                                  <th style="width: 10%">Rate</th>
                                  <th style="width: 10%">Qty</th>
                                  <th style="width: 10%">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>+</td>
                                  <td>1.</td>
                                  <td><input type="text" class="form-control" id="slno" placeholder="General Expence No"></td>
                                  <td><textarea class="form-control" rows="1" placeholder="Enter ..."></textarea></td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>
                                  <td><span class="current-due float-right">0.00</span></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Sub Total</td>
                                  <td><span class="current-due float-right">0.00</span></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Pre Due</td>
                                  <td><span class="current-due float-right">0.00</span></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Payment</td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>  
                                </tr>

                                <tr>
                                  <td class="text-right" colspan="7">Discount</td>
                                  <td><input type="number" id="inputEstimatedBudget" class="form-control"></td>  
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                          
                        </div>
                        <!-- /.card -->

                      </div>
                      <!-- /.col -->
                      
                    </div>
                  
                </div>
                <!-- /.card-body -->

                

                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-primary">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- / General Expence content -->

