<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">RELOCATIONS</h1>
                    
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                            </th>
                            <th>No</th>
                            <th>Name</th>
                            <th> Country Of Origin </th>
                            <th> D.O.B </th>
                            <th> ID Number </th>
                            <th> Camp Country </th>
                            <th> Camp </th>
                            <th> Gender </th>
                            <th> Phone Number </th>
                            <th> Country Relocated </th>
                            <th> Date Relocated </th>

                          </tr>
                        </thead>
                        @foreach($relocation as $relocations)
                          <tbody>
                            <tr>
                              <td>
                              </td>
                              <td> {{$relocations->id}} </td>
                              <td> {{$relocations->name}} </td>
                              <td> {{$relocations->country}} </td>
                              <td> {{$relocations->bdate}} </td>
                              <td> {{$relocations->idnum}} </td>
                              <td> {{$relocations->campcountry}} </td>
                              <td> {{$relocations->camp}} </td>
                              <td> {{$relocations->gender}} </td>
                              <td> {{$relocations->phonenum}} </td>
                              <td> {{$relocations->rcountry}} </td>
                              <td> {{$relocations->rdate}} </td>
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