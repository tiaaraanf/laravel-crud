@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show kelas</div>

                <div class="card-body">
                 <div class="form-group">
                 <lable>Kelas</label>
                 <input type="text" name="nama" value="{{$kelas->nama}}" class="form-control"readonly>
                 </div>
                 <div class="form-group">
                 <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
