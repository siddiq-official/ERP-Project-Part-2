@extends("allpage")
 
@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="card-header">
        <h3 class="card-title">Transaction List</h3>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover DataTable">
          <thead>
            <tr>
              <th>Date</th>
              <th>Id</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Amount</th>
              <th>Author by</th>
              <th>View</th>
          </thead>
          <tbody>
            <tr>
              <td>12-07-1993</td>
              <td>425</td>
              <td>Ahmmed Imtiaj Shahriar</td>
              <td>50000</td>
              <td>Hr</td>
              <td>Habib</td>
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
    <!-- /.content -->
@endsection
