@extends("allpage")
 
@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bill</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                  New Bill
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
                <th>Sl</th>
                <th>Item</th>
                <th>Description</th>
                <th>Sales Price</th>
                <th>Rate</th>
                <th>Qty</th>
                <th>Total</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Table</td>
                <td>Daining table</td>
                <td>10000</td>
                <td>0%</td>
                <td>1</td>
                <td>10000</td>
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
                <td>5</td>
                <td>Sofa</td>
                <td>One Single & 2 Double</td>
                <td>5000</td>
                <td>0%</td>
                <td>5</td>
                <td>30000</td>
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
                <td>5</td>
                <td>Table</td>
                <td>Dex table</td>
                <td>4000</td>
                <td>0%</td>
                <td>5</td>
                <td>20000</td>
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
                <td>5</td>
                <td>Table</td>
                <td>Dex table</td>
                <td>4000</td>
                <td>0%</td>
                <td>5</td>
                <td>20000</td>
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
                <td>6</td>
                <td>Chair</td>
                <td>Daining chare table</td>
                <td>1000</td>
                <td>0%</td>
                <td>6</td>
                <td>6000</td>
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
                <td>1</td>
                <td>Mirror</td>
                <td>Bassin mirror</td>
                <td>800</td>
                <td>0%</td>
                <td>1</td>
                <td>800</td>
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
                <td>1</td>
                <td>Tea Table</td>
                <td>Glass table</td>
                <td>6000</td>
                <td>0%</td>
                <td>1</td>
                <td>6000</td>
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

<!-- Bill content -->
    <section class="content">

      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Bill</h4>
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
                        <input type="hidden" id="type" value="bill">
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="col-md-2 float-left">Merchant Mobile</div>
                      <div class="col-md-4 float-left">
                        <input type="text" class="form-control" id="merchant-mobile" readonly="">
                      </div>
                      <div class="col-md-2 float-left">Bill No</div>
                      <div class="col-md-4 float-left">
                        <input type="text" class="form-control" id="slno" placeholder="Bill No">
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
                                  <td><input type="text" class="form-control" id="slno" placeholder="Bill No"></td>
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
<!-- / Bill content -->

