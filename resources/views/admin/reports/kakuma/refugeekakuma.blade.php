<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">REFUGEES</h1>
                    
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                            </th>
                            <th>No</th>
                            <th>Image</th>
                            <th> Name </th>
                            <th> Country </th>
                            <th> Date of Birth </th>
                            <th> ID Number </th>
                            <th> Phone Number </th>
                            <th> Camp </th>
                          </tr>
                        </thead>
                        @foreach($refugee as $refugees)
                          <tbody>
                            <tr>
                              <td>
                              </td>
                              <td>{{$refugees->id}}</td>
                              <td style="width:10px;height:10px;">
                                <img src="refugeeimage/{{$refugees->rphoto}}"/>
                              </td>
                              <td> {{$refugees->name}} </td>
                              <td> {{$refugees->country}} </td>
                              <td> {{$refugees->bdate}} </td>
                              <td> {{$refugees->idnum}} </td>
                              <td> {{$refugees->phonenum}} </td>
                              <td> {{$refugees->camp}} </td>
                            </tr>
                            <tr>
                              
                            </tr>
                          </tbody>
                        @endforeach
                      </table>
                      <div class="d-flex justify-content-end mb-4">
                         <a class="btn btn-primary" href="{{ url('export_kakumarefugees') }}">Export to PDF</a>
                    </div>
                    
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>