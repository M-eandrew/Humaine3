<!DOCTYPE html>
<html lang="en">

<head>
  @include('humanitarian.cssjs.css')
  
</head>

<body class="g-sidenav-show  bg-gray-200">

  @include('humanitarian.main.sidenav')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     <!-- Navbar -->
    @include('humanitarian.main.navbar')
    <!-- End Navbar -->
    @include('humanitarian.work.resources')
    @include('humanitarian.main.topbar')
  </main>

   
  <!--   Core JS Files   -->
  @include('humanitarian.cssjs.js')
  @include('worker.script')
</body>
