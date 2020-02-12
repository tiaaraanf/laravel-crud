@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show mapel</div>

                <div class="card-body">
                 <div class="form-group">
                 <lable>mata pelajaran</label>
                 <input type="text" name="nama" value="{{$mapel->nama}}" class="form-control"readonly>
                 </div>
                 <div class="form-group">
                 <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection