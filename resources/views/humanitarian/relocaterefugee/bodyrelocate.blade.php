<div class="container-fluid py-4">
<br><h1>Relocate Refugee</h1><br>
<div class="form1">
      <form action="{{ url('upload_relocated') }}" method="POST" enctype="multipart/form-data" style="position: center;">

      @csrf

      <div style="float:left">
        <div style="padding: 5px;color: black; width: 300px;">
          <label for="name" style="font-weight: bold;">Name</label><br>
          {!! F::select('name',$data2,null) !!}
        </div>


        <div style="padding: 5px; color: black; width: 300px;">
          <label for="country" style="font-weight: bold;">Country of Origin:</label><br>
          {!! F::select('country',$data,null) !!}
        </div>

        <div style="padding: 5px; color: black; width: 300px;">
          <label for="bdate" style="font-weight: bold;">Date of Birth:</label><br>
          {!! F::select('bdate',$data1,null) !!}
          
        </div>

        <div style="padding: 5px; color: black; width: 300px;">
          <label for="idnum" style="font-weight: bold;">ID Number:</label><br>
          {!! F::select('idnum',$dataid ,null) !!}
        </div>
        <div style="padding: 5px; color: black; width: 300px;">
          <label for="idnum" style="font-weight: bold;">Gender:</label><br>
          {!! F::select('gender',$datagender ,null) !!}
        </div>

      </div>

      <div style="float:right">
        <div style="padding: 5px; color: black; width: 300px;">
          <label for="phonenum" style="font-weight: bold;">Phone Number:</label><br>
          {!! F::select('phonenum',$dataphone,null) !!}
        </div>

        <div style="padding: 5px; color: black; width: 300px;">
          <label for="camp" style="font-weight: bold;">Camp Country:</label><br>
          {!! F::select('campcountry',$datacampcountry,null) !!}
        </div>
        <div style="padding: 5px; color: black; width: 300px;">
          <label for="camp" style="font-weight: bold;">Camp:</label><br>
          {!! F::select('camp',$datacamp,null) !!}
        </div>

        <div style="padding: 5px; color: black; width: 300px;">
          <label for="rcountry" style="font-weight: bold;">Country Relocated to:</label><br>
          <select id="rcountry" name="rcountry" style="color: black; width: 300px;" required>
              <option value="none" default>Choose Country of Relocation</option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Algeria">Algeria</option>
              <option value="Angola">Angola</option>
              <option value="Benin">Benin</option>
              <option value="Botswana">Botswana</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Cameroon">Cameroon</option>
              <option value="Cape Verde">Cape Verde</option>
              <option value="Central African Republic">Central African Republic</option>
              <option value="Chad">Chad</option>
              <option value="Congo">Congo</option>
              <option value="DR Congo">Congo, the Democratic Republic of the</option>
              <option value="Cota D'Ivoire">Cote d'Ivoire</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Egypt">Egypt</option>
              <option value="Equatorial Guinea">Equatorial Guinea</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Ethiopia">Ethiopia</option>
              <option value="Gabon">Gabon</option>
              <option value="Gambia">Gambia</option>
              <option value="Ghana">Ghana</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Greece">Greece</option>
              <option value="Greenland">Greenland</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea-Bissau">Guinea-Bissau</option>
              <option value="Kenya">Kenya</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Liberia">Liberia</option>
              <option value="Libya">Libya</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malawi">Malawi</option>
              <option value="Mali">Mali</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mauritius">Mauritius</option>
              <option value="Mayotte">Mayotte</option>
              <option value="Morocco">Morocco</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Namibia">Namibia</option>
              <option value="Niger">Niger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Reunion">Reunion</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
              <option value="Senegal">Senegal</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra">Sierra Leone</option>
              <option value="Somalia">Somalia</option>
              <option value="South Africa">South Africa</option>
              <option value="South Sudan">South Sudan</option>
              <option value="Sudan">Sudan</option>
              <option value="Swaziland">Swaziland</option>
              <option value="Sweden">Sweden</option>
              <option value="Tanzania">Tanzania, United Republic of</option>
              <option value="Togo">Togo</option>
              <option value="Tunisia">Tunisia</option>
              <option value="Uganda">Uganda</option>
              <option value="Western Sahara">Western Sahara</option>
              <option value="Yemen">Yemen</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabwe">Zimbabwe</option>
          </select>
        </div>
        <div style="padding: 5px; color: black; width:300px;">
          <label for="rdate" style="font-weight: bold;">Date Relocated</label>
          <input type="date" name="rdate" style="color: black; width: 300px;" required>
        </div>

        <div style="padding-left: 105px; padding-top: 25px; ">
          <input type="submit" class="btn btn-success" style="background-color: #4CAF50;" >
        </div>

      </div>
      

        




      </form>
        </div>
    </div>