<div class="container-fluid py-4">
<br><h1>Relocate Refugee</h1><br>
<div class="form1">
      <form action="{{ url('upload_relocated') }}" method="POST" enctype="multipart/form-data" style="position: center;">

      @csrf
        <div style="padding: 5px;">
          <label for="name" >Name</label><br>
          {!! F::select('name',$data2,null) !!}
        </div>


        <div style="padding: 5px; color: black; width: 300px;">
          <label for="country">Country of Origin:</label><br><br>
          {!! F::select('country',$data,null) !!}
        </div>

        <div style="padding: 5px;">
          <label for="bdate">Date of Birth:</label><br><br>
          {!! F::select('bdate',$data1,null) !!}
          
        </div>

        <div style="padding: 5px;">
          <label for="idnum">ID Number:</label><br><br>
          {!! F::select('idnum',$dataid ,null) !!}
        </div>

        <div style="padding: 5px;">
          <label>Phone Number:</label><br><br>
          <input type="text" name="phonenum" style="color: black; width: 300px;" placeholder="Enter Phone Number" required>
          <!--{!! F::select('country',$data,null) !!}-->
        </div>

        <div style="padding: 5px;">
          <label for="camp" style="font-weight: bold;">Camp:</label><br>
          <select id="camp" name="camp" style="color:black; width: 300px;" required >
              <option value="none">Choose current Camp</option>
              <option value="bentiu">Bentiu</option>
              <option value="malakal">Malakal</option>
              <option value="bor">Bor</option>
              <option value="nimule">Nimule</option>
          </select>
        </div>

        <div style="padding: 5px;">
          <label>Country:</label><br><br>
          <input type="text" name="rcountry" style="color: black; width: 300px;" placeholder="Enter Phone Number" required>
          <!--{!! F::select('country',$data,null) !!}-->
        </div>

        <div style="padding: 5px;">
          <label>Photo:</label><br><br>
          <input type="file" name="rphoto" required>
        </div>

        <div style="padding-left: 105px; padding-top: 25px; ">
          <input type="submit" class="btn btn-success" >
        </div>




      </form>
        </div>
    </div>