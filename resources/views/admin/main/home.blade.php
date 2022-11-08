
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.cssjs.css')
</head>

<body class="g-sidenav-show  bg-gray-200">
  @include('admin.main.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.main.navbar')
    <!-- End Navbar -->
    @include('admin.main.body')
    @include('admin.main.topbar')
  </main>
 
  <!--   Core JS Files   -->
  @include('admin.cssjs.js')
</body>

</html>