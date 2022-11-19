<div class="container-fluid py-4">
<br><h1>Resource Distribution</h1><br>
<div class="form1">
      <form action="{{ url('resources_distributions') }}" method="POST" enctype="multipart/form-data" style="position: center;">

      @csrf
        <div style="padding: 5px;color: black; width: 300px;">
          <label for="name" >Name</label><br>
         {!! F::select('name',$data,null) !!} 
        </div>


        <div style="padding: 5px; color: black; width: 300px;">
          <label for="camp">Current Camp:</label><br>
         {!! F::select('camp',$data2,null) !!} 
        </div>

        <div style="padding: 5px; color: black; width: 300px;">
          <label for="type">Disbursed Item:</label><br>
          <select id="type" name="type" style="color: black; width: 300px;" required>
              <option value="choose type" default>Choose type</option>
              <option value="Food Package">Food Package</option>
              <option value="Medicine">Medicine</option>
          </select>
        </div>

        <div style="padding: 5px; color: black; width: 300px;">
          <label for="idnum">Date Disbursed:</label><br>
          <input type="date" name="ddate" style="font-weight: bold;" required>
        </div>

        <div style="padding: 5px; color: black; width: 300px;">
          <label>Quantity Disbursed:</label><br>
          <input type="number" name="quantity" min = "0" max="" step="1" value="0" style="color: black; width: 300px;"><br />
        </div>
        <div style="padding-left: 105px; padding-top: 25px; ">
          <input type="submit" class="btn btn-success" style="background-color: #4CAF50;">
        </div>




      </form>
        </div>
    </div>