<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('petugas.index') }}" class="nav-link">
            <i class="nav-icon fas fa-user-lock"></i>
            <p>Data Petugas</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.index') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('buku.index') }}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Data Buku</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('peminjaman.index') }}" class="nav-link">
            <i class="nav-icon fas fa-handshake"></i>
            <p>Peminjaman</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('riwayat.index') }}" class="nav-link">
            <i class="nav-icon fas fa-clock"></i>
            <p>Riwayat</p>
          </a>
        </li>
        
      </ul>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->
