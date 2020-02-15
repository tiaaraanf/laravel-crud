@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Daftar Siswa</div>

                <div class="card-body">
                 <form action="{{route('siswa.update',$siswa->id)}}" method="post">
                 @csrf
                 @method('PATCH')
                 <div class="form-group">
                 <lable>nis</label>
                 <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}"required>
                 </div>

                 <div class="form-group">
                 <lable>nama</label>
                 <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}"required>
                 </div>

                 <div class="form-group">
                 <lable>alamat</label>
                 <textarea name="alamat" class="form-control" cols="30" rows="10">"{{$siswa->alamat}}"</textarea>
                 </div>


                 <div class="form-group">
                 <lable>kelas</label>
                 <select name="id_kelas" class="form-control"required>

                 @foreach($kelas as $data)
                 <option value="{{$data->id}}"
                 {{ $data->id == $siswa->id_kelas ? 'selected' : ''}}>
                 {{ $data->kelas}}
                 </option>
                 @endforeach
                 </select>
                 </div>
                 <div class="form-group">
                 <lable>Mata Pelajaran</label>
                 <select name="mapel[]" class="form-control" multiple>
                 @foreach($mapel as $data)
                 <option value="{{$data->id}}"
                 {{(in_array($data->id,$selected)) ? 'selected = "selected"' : ''}}>
                 {{ $data->nama}}
                 </option>
                 @endforeach
                 </select>
                 </div>

                 <div class="form-group">
                 <button type="submit" class="btn btn-primary">simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection