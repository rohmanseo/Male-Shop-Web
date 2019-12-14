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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>

                    </tr>
                    </thead>

                    @foreach($produk as $p)
                        <tbody>

                        <td>{{$p->id}}</td>
                        <td><img class="img-produk" src="{{asset("produk_image/$p->foto")}}"</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->harga}}</td>
                        <td>{{$p->category->nama}}</td>
                        <td>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                        </tbody>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection