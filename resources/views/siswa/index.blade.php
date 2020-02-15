@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar siswa
                    <a href="{{route('siswa.create')}}" class="btn btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                    <table class="table">
                    <thead>
                    <tr>
                    <th>Nomor</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>id Kelas</th>
                    <th>mata pelajaran</th>
                    <th colspan="3"><center>aksi</center></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $no=1; @endphp
                    @foreach ($siswa as $data)
                    <tr>
                    <form action="{{route('siswa.destroy',$data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    </tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->alamat}}</td>
                    <td>{{$data->kelas->kelas}}</td>
                    <td>
                    @foreach($data->mapel as $value)
                    <li>{{$value->nama}}</li>
                    @endforeach
                    <td>
                    <a href="{{route('siswa.show',$data->id)}}" class="btn btn-info">Show</a>
                    </td>
                    <td>
                    <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                    <button type="submit" onclick="return confirm('apakah anda yakin ?');" class="btn btn-danger">
                    Delete
                    </td>
                   </tr>
                   @endforeach
                   </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection