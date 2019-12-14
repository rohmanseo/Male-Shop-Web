@extends('master.apps')
@section('content')


<div class="col-lg-12">
              <div class="card mb-4">
                
                <div class="card-header py-3 d-flex flex-row align-items-right justify-content-between">
                <a href="{{route('user.create')}}" class="float-right btn btn-primary">Tambah</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Nama </th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Foto Profil</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($user as $u)
                      <tr>
                        <td>{{$u->id}}</td>
                        <td><a href="#">{{$u->nama}}</a></td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->no_hp}}</td>
                        <td>{{$u->alamat}}</td>
                         <td><img src = "{{asset('assets/images/users/1.jpg')}} " style="width:50px"  > </td>
                        <td>
                                    
                            <div class= "form-horizontal">
                                    <div class="btn-group" >          
                                   
                                   <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                   </div>
                                   </td>
                        <td>
                                <div class="btn-group">
                                   <form action="" method="post">
                                   @csrf
                                   @method('DELETE')

                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                                    </form>
                                 
                                </form> 
                                </div>
                                 </td>
                        @endforeach
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection
