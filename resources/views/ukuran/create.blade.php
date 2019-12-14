@extends('master.apps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Tambah Ukuran</div>
                      <div class="card-body">
                            @include('validasi')

                                {!! Form::open(['route'=>'ukuran.store','method'=>'POST']) !!}
                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Nama Ukuran</label>
                                    <div class="col-md-6">
                                            {!! Form::text('nama',null,['class'=>'form-control']) !!}
                                      
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Tambah data</button>
                                    </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection