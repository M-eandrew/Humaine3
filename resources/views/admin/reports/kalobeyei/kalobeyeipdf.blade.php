<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.cssjs.css')
</head>

<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.reports.kalobeyei.bpdfnav')
    <!-- End Navbar -->
    @include('admin.reports.kalobeyei.kalobeyeirpdf')
 
  </main>
 
  <!--   Core JS Files   -->
  @include('admin.cssjs.js')
</body>

</html>