<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Kelas;
use Illuminate\Http\Request;
use DB;
use App\Mapel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
     { 
     return $this->middleware('auth');
     }
    public function index()
    {
       // $siswa = DB::table('siswas')
       // ->join('kelas','kelas.id','=','siswas.id_kelas')
       // ->select('siswas.id','siswas.nis','siswas.nama','siswas.alamat','kelas.kelas')
        //->get();
        //$siswa = Siswa::all();
        $siswa = Siswa::with('kelas','mapel')->get();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     $kelas = Kelas::all();   
     $mapel = Mapel::all();      
     return view('siswa.create',compact('kelas','mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa ->nis = $request->nis;
        $siswa ->nama = $request->nama;
        $siswa ->alamat = $request->alamat;
        $siswa ->id_kelas = $request->id_kelas;
        $siswa ->save();
        $siswa->mapel()->attach($request->mapel);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::all();
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswa','kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::all();
        $siswa = Siswa::findOrFail($id);
        $mapel = Mapel ::all();
        $selected = $siswa->mapel->pluck('id')->toArray();
        return view('siswa.edit',compact('siswa','kelas','selected','mapel'));

    }
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa ->nis = $request->nis;
        $siswa ->nama = $request->nama;
        $siswa ->alamat = $request->alamat;
        $siswa ->id_kelas = $request->id_kelas;
        $siswa ->save();
        $siswa->mapel()->sync($request->mapel);
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id)->delete();
        $siswa->mapel()->detch ;
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
