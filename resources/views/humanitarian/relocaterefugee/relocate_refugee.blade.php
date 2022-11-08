<!DOCTYPE html>
<html lang="en">

<head>
  @include('humanitarian.cssjs.css')
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-200">

  @include('humanitarian.main.sidenav')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     <!-- Navbar -->
    @include('humanitarian.main.navbar')
    <!-- End Navbar -->
    @include('humanitarian.relocaterefugee.bodyrelocate')
    @include('humanitarian.main.topbar')
  </main>

   
  <!--   Core JS Files   -->
  @include('humanitarian.cssjs.js')
  @include('worker.script')
</body>

</html>