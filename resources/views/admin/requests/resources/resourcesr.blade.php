<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">RESOURCES REQUESTS</h1>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th> Name </th>
                            <th> Camp </th>
                            <th> Date Required</th>
                            <th> Resource Category </th>
                            <th> Description </th>
                            <th> Quantity </th>
                          </tr>
                        </thead>
                        @foreach($resource as $resources)
                          <tbody>
                            <tr>
                              <td> {{$resources->id}} </td>
                              <td> {{$resources->name}} </td>
                              <td> {{$resources->camp}} </td>
                              <td> {{$resources->duedate}} </td>
                              <td> {{$resources->resourcecategory}} </td>
                              <td> {{$resources->description}} </td>
                              <td> {{$resources->quantity}} </td>
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