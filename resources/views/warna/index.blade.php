@extends('master.apps')
@section('content')

<div class="col-lg-12">
              <div class="card mb-4">
              @include('notifikasi')
                <div class="card-header py-3 d-flex flex-row align-items-right justify-content-between">
                <a href="{{route('warna.create')}}" class="float-right btn btn-primary">Tambah</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Nama Warna</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($warna as $w)
                      <tr>
                        <td>{{$w->id}}</td>
                        <td>{{$w->nama}}</td>
                        <td>
                                    
                            <div class= "form-horizontal">
                                    <div class="btn-group" >          
                                   
                                   <a href="{{route('warna.edit',$w->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                   </div>
                                   </td>
                        <td>
                                <div class="btn-group">
                                   <form action="{{ route('warna.destroy', $w->id)}}" method="post">
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