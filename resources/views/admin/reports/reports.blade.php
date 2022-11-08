<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.cssjs.css')
  <!-- CSS Files -->



</head>

<body class="g-sidenav-show  bg-gray-200">
  @include('admin.main.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.main.navbar')
    <!-- End Navbar -->
    @include('admin.reports.reportsbody')
    @include('admin.main.topbar')
  </main>
 
  <!--   Core JS Files   -->
  @include('admin.cssjs.js')
  <!--   Core JS Files   -->
<script src="{{ asset('black') }}/js/core/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset('black') }}/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('black') }}/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('black') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('black') }}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('black') }}/js/black-dashboard.js?v=2.1.1" type="text/javascript"></script>
</body>

</html>