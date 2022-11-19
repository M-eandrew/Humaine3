<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">REFUGEES</h1>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
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
                              <td>{{$refugees->id}}</td>
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
                    </div>
                    
                  </div>
                </div>
              </div>
</div>