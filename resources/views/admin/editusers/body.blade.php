<div class="container-fluid py-4">
<br><h1>Register Refugee</h1><br>
<div class="form1">
     
      <form class="main-form" action="{{ url('updateUser') }}" method="POST" enctype="multipart/form-data" style="position: center;">
      <input type="hidden" name="id" value="{{ $user['id'] }}">

      @csrf
      
      <div style="float:left">
            <div style="padding: 5px;">
              <label for="name" style="font-weight: bold;">Name</label><br>
              <input type="text" name="name" style="color: black; width: 300px;" placeholder="Input Refugee Name" value="{{ $user['name'] }}"> 
            </div>
            <div style="padding: 5px;">
              <label for="name" style="font-weight: bold;">Staff ID</label><br>
              <input type="text" name="staff_id" style="color: black; width: 300px;"  value="{{ $user['staff_id'] }}"> 
            </div>

            <div style="padding: 5px;">
                <label for="country" style="font-weight: bold;">Email:</label><br>
                <input type="text" name="email" style="color: black; width: 300px; " placeholder="country" value="{{ $user['email'] }}">
            </div>

            <div style="padding: 5px;">
          <label for="bdate" style="font-weight: bold;">Nationality</label><br>
          <input type="text" name="nationality" style="color: black; width: 300px;" value="{{ $user['Nationality'] }}">
            </div>

            <div style="padding: 5px;">
          <label for="idnum" style="font-weight: bold;">Camp</label><br>
          <input type="text" name="camp" style="color: black; width: 300px;" placeholder="Enter ID Number" value="{{ $user['camp'] }}">
            </div>
            <div style="padding-left: 105px; padding-top: 25px; ">
                <input type="submit" class="btn btn-success" style="background-color: #4CAF50;" >
            </div>
      </div>

      <div style="float:right">
            <div style="padding: 5px;">
          <label for="phonenum" style="font-weight: bold;">Phone Number:</label><br>
          <input type="text" name="phone" style="color: black; width: 300px;" placeholder="Enter Phone Number" value="{{ $user['phone'] }}">
            </div>

            <div style="padding: 5px;">
          <label for="campcountry" style="font-weight: bold;">Usertype:</label><br>
          <input type="text" name="usertype" style="color: black; width: 300px;" placeholder="Camp Country" value="{{ $user['usertype'] }}">
            </div>
      </div>

        




      </form>
        </div>
    </div>