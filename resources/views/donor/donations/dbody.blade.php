<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">DISTRIBUTIONS</h1>
                    
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                            </th>
                            <th> No </th>
                            <th> Refugee Name </th>
                            <th> Distribution Type </th>
                            <th> Quantity </th>
                            <th> Distribution Date </th>
                            <th> Camp </th> 
                          </tr>
                        </thead>
                        @foreach($distribution as $distributions)
                          <tbody>
                            <tr>
                              <td>
                              </td>
                              <td>{{$distributions->id}}</td>
                              <td> {{$distributions->name}} </td>
                              <td> {{$distributions->type}} </td>
                              <td> {{$distributions->quantity}} </td>
                              <td> {{$distributions->ddate}} </td>
                              <td> {{$distributions->camp}} </td>
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