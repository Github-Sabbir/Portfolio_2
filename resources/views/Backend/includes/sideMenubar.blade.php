<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="{{ route('admin_dashbord') }}" class="text-nowrap logo-img">
        <img src="{{ asset('/') }}assets/Backend/images/logos/dark-logo.svg" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <!-- /// -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
        </li>
        <!-- small cap end -->

        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->is('/admin_dashbord') ? 'active' : ''}}" href="{{ route('admin_dashbord') }}">
            <i class="ti ti-layout-dashboard"></i><span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <!-- /// -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Testimunial</span>
        </li>
        <!-- small cap end -->
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->is('/admin_testimunial') ? 'active' : ''}}" href="{{ route('admin_testimunial') }}">
          <i class="ti ti-list-check"></i><span class="hide-menu">Testimunial List</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->is('/admin_testimunial_edit') ? 'active' : ''}}" href="{{ route('admin_testimunial_edit') }}">
          <i class="ti ti-tool"></i><span class="hide-menu">Edit</span>
          </a>
        </li>
        <!-- /// -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Services</span>
        </li>
        <!-- small cap end -->
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->is('/admin_service') ? 'active' : ''}}" href="{{ route('admin_service') }}"><i class="ti ti-list-check"></i>
            <span class="hide-menu">Services List</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->is('/admin_service_edit') ? 'active' : ''}}" href="{{ route('admin_service_edit') }}">
          <i class="ti ti-tool"></i><span class="hide-menu">Edit</span>
          </a>
        </li>
        <!-- /// -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Contact</span>
        </li>
        <!-- small cap end -->
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->is('/admin_contactForm_edit') ? 'active' : ''}}" href="{{ route('admin_contactForm_edit') }}"><i class="ti ti-mail"></i>
            <span class="hide-menu">Form</span>
          </a>
        </li>
      </ul>
      <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
        <div class="d-flex">
          <div class="unlimited-access-title me-3">
            <h6 class="fw-semibold fs-4 mb-6 text-dark w-85"></h6>
            <a href="{{ route('homePage')}}" class="btn btn-primary fs-2 fw-semibold lh-sm">Let's Back</a>
          </div>
          <div class="unlimited-access-img">
            <img src="{{ asset('/') }}assets/Backend/images/backgrounds/rocket.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>