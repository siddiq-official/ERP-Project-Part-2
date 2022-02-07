@extends("allpage")
 
@section("content")
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="card-header">
        <h3 class="card-title">Stock Sheet</h3>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover DataTable">
          <thead>
            <tr>
              <th>Sl</th>
              <th>Id</th>
              <th>Product Name</th>
              <th>Type</th>
              <th>Amount</th>
              <th>View</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>425</td>
              <td>Rose</td>
              <td>Flower</td>
              <td>25</td>
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
              <td>2</td>
              <td>425</td>
              <td>Tulip</td>
              <td>Flower</td>
              <td>25</td>
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
              <td>3</td>
              <td>426</td>
              <td>Lily</td>
              <td>Flower</td>
              <td>25</td>
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
              <td>4</td>
              <td>427</td>
              <td>Genda</td>
              <td>Flower</td>
              <td>25</td>
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
              <td>428</td>
              <td>Mango</td>
              <td>Fruit</td>
              <td>25</td>
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
              <td>429</td>
              <td>Banana</td>
              <td>Fruit</td>
              <td>25</td>
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
              <td>7</td>
              <td>430</td>
              <td>Rose</td>
              <td>Plastic Flower</td>
              <td>25</td>
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
              <td>8</td>
              <td>431</td>
              <td>Lily</td>
              <td>Plastic Flower</td>
              <td>25</td>
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
