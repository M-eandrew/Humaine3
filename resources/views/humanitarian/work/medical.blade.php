<div class="container-fluid py-4">
<br><h1>Refugee Medical Information</h1><br>
<div class="form1">
      <form action="{{ url('upload_medical') }}" method="POST" enctype="multipart/form-data" style="position: center;">

      @csrf

      
        <div style="padding: 5px;color: black; width: 300px;">
          <label for="name" style="font-weight: bold;" >Name</label><br>
          {!! F::select('name',$data,null) !!}
        </div>
        <div style="padding: 5px; color: black; width: 300px;">
          <label for="camp" style="font-weight: bold;" >Current Camp:</label><br>
          {!! F::select('camp',$data2,null) !!}
        </div>
        <div style="padding: 5px;color: black; width: 300px;">
            <label for="dateassessed" style="font-weight: bold;" >Date Assessed</label><br>
            <input type="date" name="dateassessed" style="color: black; width: 300px;" required>
        </div>
        <div style="padding: 5px; color: black; width: 300px;">
          <label for="illness" style="font-weight: bold;">Illness Diagnosis:</label><br>
          <input type="text" name="illness" style="color: black; width: 300px;" placeholder="Enter Diagnosis"Required>
        </div>
        <div style="padding: 5px; color: black; width: 300px;">
           <label for="medicine" style="font-weight: bold;">Medicine Prescribed</label><br>
           <input type="text" name="medicine" style="color: black; width: 300px;" placeholder="Enter Prescription" Required>
        </div>
        <div>
            <label for="appointment" style="font-weight: bold;">Enter Next Appointment</label><br>
            <input type="date" name="appointment" style="color: black; width: 300px;" required>
        </div>
        <div style="padding-left: 105px; padding-top: 25px; ">
          <input type="submit" class="btn btn-success" style="background-color: #4CAF50;" >
        </div>
      </form>
        </div>
    </div>