<div class="form1">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Request for Resources</h1>

      <form class="main-form" action="request_resources" method="POST">

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
            <label style="font-weight: bold;" >Camp Required:</label><br>
            <select name="camp" style="color: black; width: 300px;" >
              <option selected>Choose Camp</option>
              <option value="{{ Auth::user()->camp }}">{{ Auth::user()->camp }}</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label style="font-weight: bold;">Enter Date Required:</label><br>
          <input type="date" name="duedate" style="color: black; width: 300px;" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <label style="font-weight: bold;" >Choose the resource category:</label><br>
            <select style="color: black; width: 300px;" name="resourcecategory">
              <option>Choose Category</option>
              <option value="Food Packge">Food Package</option>
              <option value="Medical Package">Medical Package</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label style="font-weight: bold;" >Description:</label><br>
            <input type="text" name="description" style="color: black; width: 300px;" placeholder="Enter Resource Description" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label style="font-weight: bold;" >Quantity:</label><br>
            <input type="number" name="quantity" min = "0" max="" step="1" value="0" style="color: black; width: 300px;"><br />
          </div>
         
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: #4CAF50; position: absolute;">Submit Request</button>
      </form>
    </div>
  </div>