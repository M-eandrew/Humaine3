<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">USERS</h1>
                    
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                            </th>
                            <th>No</th>
                            <th>Staff ID</th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Camp </th>
                            <th> Nationality </th>
                            <th> Phone Number </th>
                            <th> User Role</th>
                            <th> Action </th>
                            <th> QR Code </th>
                          </tr>
                        </thead>
                        @foreach($user as $users)
                          <tbody>
                            <tr>
                              <td>
                              </td>
                              <td> {{$users->id}} </td>
                              <td> {{$users->staff_id}} </td>
                              <td> {{$users->name}} </td>
                              <td> {{$users->email}} </td>
                              <td> {{$users->camp}} </td>
                              <td> {{$users->nationality}} </td>
                              <td> {{$users->phone}} </td>
                              <td> {{$users->usertype}} </td>
                              <td>
                                  <form action="" method="POST">
                                 
                                      <a href="{{ "editUser/".$users['id'] }}"><i class="material-icons opacity-10">edit</i></a>
                                         @csrf
                                     
                                    </form>
                                </td>
                              <td>
                                <a href="{{ route('generateuser', $users->id) }}" class="btn btn-primary">Generate</a>
                              </td>
                              
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