<!DOCTYPE html>
<html lang="en">

<head>
  @include('humanitarian.css')
  
</head>

<body class="g-sidenav-show  bg-gray-200">

  @include('humanitarian.sidenav')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     <!-- Navbar -->
    @include('humanitarian.navbar')
    <!-- End Navbar -->
    @include('humanitarian.mainbody')
    @include('humanitarian.topbar')
  </main>

   
  <!--   Core JS Files   -->
  @include('humanitarian.js')
  @include('worker.script')
</body>

</html>