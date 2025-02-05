@extends('admin.partials.layout')

@section('content')

<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with Genre Feature</h3>
            <div class="float-right">
              <a href="#" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Add New Genre
              </a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Genre Name</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nostalgia</td>
                  <td>Buku-buku klasik, sastra lama, dan sejarah yang membawa kenangan masa lalu.</td>
                  <td>
                    <a href="#" class="btn btn-info btn-sm">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <!-- Add more genres here -->
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
