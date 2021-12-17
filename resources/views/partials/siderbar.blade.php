<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        {{-- <a href="#" class="d-block">{{ auth()->user()->name }}</a> --}}
        <a href="#" class="d-block"></a>
      </div>
      <div class="user-action">
        <a href="{{ route('admin.logout') }}" class="">
          <ion-icon name="log-out-outline"></ion-icon>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Danh muc san pham
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('menus.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Menus
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('product.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Sản phẩm
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('slider.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Slider
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('settings.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Settings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Danh sách nhân viên
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('roles.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Danh sách vai trò (Roles)
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('permissions.create') }}" class="nav-link">
            <p>
              Tạo Dữ liệu bảng Permissions
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
