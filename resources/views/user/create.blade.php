@extends('master.apps')
@section('content')


<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Tambah User</div>
                      <div class="card-body">
                              
                          {!! Form::open(['route'=>'user.store','method'=>'POST']) !!}

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"> Nama  </label>

                                 <div class="col-md-6">
                                 {!! Form::text('name',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"> Email </label>
                            <div class="col-md-6">
                                 {!! Form::text('email',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>
                           <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"> Password </label>
                            <div class="col-md-6">
                                 {!! Form::text('password',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                           <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"> No Hp </label>
                            <div class="col-md-6">
                                 {!! Form::text('no_hp',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                           <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"> Alamat </label>
                            <div class="col-md-6">
                                 {!! Form::text('alamat',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                        
                           <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"> Foto Profil </label>
                            <div class="col-md-6">
                                 {!! Form::file('foto_profil',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                               <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Tambah data</button>
                                       <a href="{{ route('user.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection