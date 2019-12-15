@extends('master.apps')
@section('content')
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="card-header py-3 d-flex flex-row align-items-right justify-content-between">
            <a href="{{route('slideshow.create')}}" class="float-right btn btn-primary">Tambah</a>
        </div>
        @foreach($data as $d)
            <div class="slideshow-container"><img src="{{asset("uploads/$d->foto")}}" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><form method="POST" enctype="multipart/form-data" action="{{route('slideshow.update',$d->id)}}">
                            @csrf
                            @method('PUT')

                            <input type="file" id="gambar" name="gambar" />
                            <input type="submit" class="btn btn-primary" value="Ubah" name="submit">

                        </form></div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
@endsection