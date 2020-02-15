<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable =['id','kelas'];
    public $timestamp = true;
    

public function siswa(){
    return $this->belongsTo('App\Siswa','id_kelas');
}
}


