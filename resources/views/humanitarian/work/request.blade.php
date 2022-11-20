<div class="form1">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Request for Reports</h1>

      <form class="main-form" action="{{ url('request_reports')}}" method="POST">

        @csrf 

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label style="font-weight: bold;" >Name:</label><br>
            <select name="name" style="color: black; width: 300px;" >
              <option selected>Choose Name</option>
              <option value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label style="font-weight: bold;" >Email:</label><br>
            <select name="email" style="color: black; width: 300px;" >
              <option selected>Choose Email</option>
              <option value="{{ Auth::user()->email }}">{{ Auth::user()->email }}</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label style="font-weight: bold;">Enter Date Required:</label><br>
          <input type="date" name="duedate" style="color: black; width: 300px;" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <label style="font-weight: bold;" >Choose the report category:</label><br>
            <select style="color: black; width: 300px;" name="rcategory">
              <option>Choose Reports</option>
                <optgroup label="Refugee Reports:">
                  <option>Choose Camp Reports</option>
                  <option value="{{ Auth::user()->camp }}">{{ Auth::user()->camp }} Refugee Reports</option>
                </optgroup>
                <optgroup label="Resources Reports:">
                  <option value="{{ Auth::user()->camp }} Food Packages">{{ Auth::user()->camp }} Food Packages Reports</option>
                  <option value="{{ Auth::user()->camp }} Medical Packages">{{ Auth::user()->camp }} Medical Packages Reports</option>
                </optgroup>
                
            </select>
          </div>
         
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: #4CAF50; position: absolute;">Submit Request</button>
      </form>
    </div>
  </div>