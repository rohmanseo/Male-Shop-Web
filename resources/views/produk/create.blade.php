@extends('master.apps')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Produk</div>
                    <div class="card-body">
                        @include('validasi')

                        <div class="form-group">
                            <form method="POST" enctype="multipart/form-data" action="{{route('produk.store')}}">
                                @csrf
                                @method('POST')
                                <label for="nama">Nama Produk</label>
                                <input name="nama" type="text" class="form-control" id="nama"
                                       aria-describedby="nama">
                                <label for="harga">Harga Produk</label>
                                <input name="harga" type="number" class="form-control" id="harga"
                                       aria-describedby="harga">
                                <label for="diskripsi">Diskripsi</label>
                                <textarea name="diskripsi" class="form-control" id="diskripsi" rows="3"></textarea>
                                <label for="gambar">Foto</label>
                                <input name="gambar" type="file" class="form-control-file" id="gambar">

                                <select name="kategori" class="form-control form-control-lg">
                                    @foreach($kategori as $k)
                                        <option value="{{$k->id}}">{{$k->nama}}</option>
                                    @endforeach
                                </select>


                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-danger">Tambah data</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="form-group row mb-0">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection