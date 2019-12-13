@extends('master.apps')
@section('content')


<div class="col-lg-12">
              <div class="card mb-4">
              @include('notifikasi')
                <div class="card-header py-3 d-flex flex-row align-items-right justify-content-between">
                <a href="{{route('produk.create')}}" class="float-right btn btn-primary">Tambah</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Warna</th>
                        <th>Ukuran</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($produk as $p)
                      <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->harga}}</td>
                        <td>{{$p->deskripsi}}</td>
                        <td>{{$p->kategori->nama}}</td>
                        <td>{{$p->warna->nama}}</td>
                        <td>{{$p->ukuran->nama}}</td>
                        <td>{{$p->foto}}</td>
                        <td>
                                    
                            <div class= "form-horizontal">
                                    <div class="btn-group" >          
                                   
                                   <a href="{{route('produk.edit',$k->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                   </div>
                                   </td>
                        <td>
                                <div class="btn-group">
                                   <form action="{{ route('produk.destroy', $k->id)}}" method="post">
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