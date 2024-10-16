<!doctype html>
<html lang="en">

<head>
  @include('Backend.includes.meta')
  <title>@yield('title')</title>
  @include('Backend.includes.favIcon')
  @include('Backend.includes.css')
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('Backend.includes.sideMenubar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('Backend.includes.topbar')
      <!--  Header End -->
      <div class="container-fluid">
        @yield('body')
        @include('Backend.includes.footerCopyright')
      </div>
    </div>
  </div>
@include('Backend.includes.script')
</body>

</html>