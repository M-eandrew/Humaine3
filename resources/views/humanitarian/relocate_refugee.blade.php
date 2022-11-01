<!DOCTYPE html>
<html lang="en">

<head>
  @include('humanitarian.css')
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "process-request.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});
</script>
</head>

<body class="g-sidenav-show  bg-gray-200">

  @include('humanitarian.sidenav')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     <!-- Navbar -->
    @include('humanitarian.navbar')
    <!-- End Navbar -->
    @include('humanitarian.bodyrelocate')
    @include('humanitarian.topbar')
  </main>

   
  <!--   Core JS Files   -->
  @include('humanitarian.js')
  @include('worker.script')
</body>

</html>