<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{URL::to('/admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{{URL::to('/admin')}}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Trang Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Utilities Collapse Menu -->


      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Tables -->
      <li class="nav-item">
      <a class="nav-link" href="{{ route('users.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Người dùng</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href={{ route('category.index') }}>
          <i class="fas fa-fw fa-table"></i>
          <span>Danh mục</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href={{ route('brands.index') }}>
          <i class="fas fa-fw fa-table"></i>
          <span>Thương Hiệu</span></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="{{route('product.index')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Sản phẩm</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('images.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Hình ảnh</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('sliders.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Slider</span></a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('slides.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Slide</span></a>
            </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('carts')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Cart</span></a>
            </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
