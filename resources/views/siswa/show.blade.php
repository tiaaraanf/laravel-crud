@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ubah daftar siswa </div>

                <div class="card-body">
                 <div class="form-group">
                 <lable>nis</label>
                 <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}"readonly>
                 </div>

                 <div class="form-group">
                 <lable>nama</label>
                 <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}"readonly>
                 </div>

                 <div class="form-group">
                 <lable>alamat</label>
                 <input type="text" name="alamat" class="form-control" value="{{$siswa->alamat}}"cols="30" rows="10"readonly>
                 </div>

                 <div class="form-group">
                 <lable>kelas</label>
                 <input type="text" value="{{$siswa->id_kelas}}" name="id_kelas" class="form-control"readonly>
                 </div>

                 <div class="form-group">

                 <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection