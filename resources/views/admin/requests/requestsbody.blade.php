<!DOCTYPE html>
<html lang="en">

<head>
  
<style>
  .dropdownreports {
  display: inline-block;
  position: relative;
}
.dropdownreports-content {
  display: none;
  position: absolute;
  width: 100%;
  overflow: auto;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}
.dropdownreports:hover .dropdownreports-content {
  display: block;
}
.dropdownreports-content a {
  display: block;
  color: #000000;
  padding: 5px;
  text-decoration: none;
}
.dropdownreports-content a:hover {
  color: #FFFFFF;
  background-color: #00A4BD;
}
</style>


</head>

<body class="g-sidenav-show  bg-gray-200">
  <h1>Select Requests</h1>
<div class="dropdownreports">
  <button style="width: 200px;">Requests</button>
  <div class="dropdownreports-content">
  <a href="{{ url('return_reportsrequests_view') }}">Reports Requests</a>
  <a href="{{ url('return_resourcesrequests_view') }}">Resources Requests</a>
  </div>
</div>

</body>

</html>