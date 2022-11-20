<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">REPORTS REQUESTS</h1>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Date Required</th>
                            <th> Report Category </th>
                          </tr>
                        </thead>
                        @foreach($report as $reports)
                          <tbody>
                            <tr>
                              <td>{{$reports->id}}</td>
                              <td> {{$reports->name}} </td>
                              <td> {{$reports->email}} </td>
                              <td> {{$reports->duedate}} </td>
                              <td> {{$reports->rcategory}} </td>
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