<!DOCTYPE html>
<html lang="en">

<head>
  @include('donor.cssjs.css')
</head>

<body class="g-sidenav-show  bg-gray-200">
  @include('donor.main.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('donor.main.navbar')
    <!-- End Navbar -->
    @include('donor.main.body')
    @include('donor.main.topbar')
  </main>
 
  <!--   Core JS Files   -->
  @include('donor.cssjs.js')
</body>

</html>