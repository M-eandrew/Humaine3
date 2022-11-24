<div class="container-fluid py-4">
<br><h1>Register Refugee</h1><br>
<div class="form1">
     
      <form class="main-form" action="{{ url('updateRefugee') }}" method="POST" enctype="multipart/form-data" style="position: center;">
      <input type="hidden" name="id" value="{{ $refugee['id'] }}">

      @csrf
      
      <div style="float:left">
            <div style="padding: 5px;">
              <label for="name" style="font-weight: bold;">Name</label><br>
              <input type="text" name="name" style="color: black; width: 300px;" placeholder="Input Refugee Name" value="{{ $refugee['name']}}"> 
            </div>
            <div style="padding: 5px;">
              <label for="name" style="font-weight: bold;">Gender</label><br>
              <input type="text" name="gender" style="color: black; width: 300px;" placeholder="Input Refugee Name" value="{{ $refugee['gender']}}"> 
            </div>

            <div style="padding: 5px;">
                <label for="country" style="font-weight: bold;">Country of Origin:</label><br>
                <input type="text" name="country" style="color: black; width: 300px; " placeholder="country" value="{{ $refugee['country']}}">
            </div>

            <div style="padding: 5px;">
          <label for="bdate" style="font-weight: bold;">Date of Birth:</label><br>
          <input type="text" name="bdate" style="color: black; width: 300px;" value="{{ $refugee['bdate']}}">
            </div>

            <div style="padding: 5px;">
          <label for="idnum" style="font-weight: bold;">ID Number:</label><br>
          <input type="text" name="idnum" style="color: black; width: 300px;" placeholder="Enter ID Number" value="{{ $refugee['idnum']}}">
            </div>
            <div style="padding-left: 105px; padding-top: 25px; ">
                <input type="submit" class="btn btn-success" style="background-color: #4CAF50;" >
            </div>
      </div>

      <div style="float:right">
            <div style="padding: 5px;">
          <label for="phonenum" style="font-weight: bold;">Phone Number:</label><br>
          <input type="text" name="phonenum" style="color: black; width: 300px;" placeholder="Enter Phone Number" value="{{ $refugee['phonenum']}}">
            </div>

            <div style="padding: 5px;">
          <label for="campcountry" style="font-weight: bold;">Camp Country:</label><br>
          <input type="text" name="campcountry" style="color: black; width: 300px;" placeholder="Camp Country" value="{{ $refugee['campcountry']}}">
            </div>

            <div style="padding: 5px;">
          <label for="camp" style="font-weight: bold;">Camp:</label><br>
          <input type="text" name="camp" style="color: black; width: 300px;" placeholder="Enter Phone Number" value="{{ $refugee['camp']}}">
            </div>
       
            <div style="padding: 5px;">
          <label for="rphoto" style="font-weight: bold;">Photo:</label><br>
          <input type="text" name="rphoto" style="color:black; width: 300px;" value="{{ $refugee['rphoto']}}">
            </div>
      </div>

        




      </form>
        </div>
    </div>