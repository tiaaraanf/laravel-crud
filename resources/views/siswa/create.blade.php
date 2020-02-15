@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Daftar Siswa</div>

                <div class="card-body">
                 <form action="{{route('siswa.store')}}" method="post">
                 @csrf
                 <div class="form-group">
                 <lable>nis</label>
                 <input type="text" name="nis" class="form-control"required>
                 </div>

                 <div class="form-group">
                 <lable>nama</label>
                 <input type="text" name="nama" class="form-control"required>
                 </div>

                 <div class="form-group">
                 <lable>alamat</label>
                 <textarea name="alamat" class="form-control"></textarea>
                 </div>

                 <div class="form-group">
                 <lable>kelas</label>
                 <select name="id_kelas" class="form-control"required>
                 @foreach($kelas as $data)
                 <option value="{{$data->id}}">{{$data->kelas}}</option>
                 @endforeach
                 </select>
                 </div>

                 <div class="form-group">
                 <label >mata pelajaran</label>
                 <select name="mapel[]" class="form-control"required>
                 @foreach ($mapel as $data)
                 <option value="{{$data->id}}">{{$data->nama}}</option>
                 @endforeach
                  </select>
                 <div class="form-group">
                 <button type="submit" class="btn btn-primary">simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection