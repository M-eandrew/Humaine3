<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Number of refugees</p>
                <h4 class="mb-0">{{ $noofrefugees }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Relocated Refugees</p>
                <h4 class="mb-0">{{ $noofrrefugees }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              
            </div>
          </div>
        </div>
        
        
      </div>
      <div class="row mt-4">
        
        
        
      </div>
      <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Refugees</h4>
                    
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
                              <td><a href="{{ route('profile') }}" target="_blank">{{$refugees->name}}</a></td>
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
      
    </div>