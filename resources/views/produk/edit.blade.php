@extends('master.apps')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Produk</div>
                    <div class="card-body">
                        @include('validasi')

                        <div class="form-group">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label for="nama">Nama Produk</label>
                                <input name="nama" value="{{$produk->nama}}" type="text" class="form-control" id="nama"
                                       aria-describedby="nama">
                                <label for="harga">Harga Produk</label>
                                <input value="{{$produk->harga}}" name="harga" type="number" class="form-control" id="harga"
                                       aria-describedby="harga">
                                <label for="diskripsi">Diskripsi</label>
                                <textarea name="diskripsi" class="form-control" id="diskripsi" rows="3">{{$produk->diskripsi}}</textarea>
                                <label for="gambar">Foto</label>
                                <img class="img-produk" src="{{asset("produk_image/$produk->foto")}}">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-danger">Ubah data</button>
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