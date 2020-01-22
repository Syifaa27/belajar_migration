<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota_model;
use Validator;


class AnggotaController extends Controller
{
    public function store(Request $req)
    {
        $validator=Validator::make($req->all(),
            [
                'nama_anggota'=>'required',
                'alamat'=>'required',
                'tlp'=>'required'
            ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $simpan=Anggota_model::create([
                'nama_anggota'=>$req->nama_anggota,
                'alamat'=>$req->alamat,
                'tlp'=>$req->tlp
        ]);
        if($simpan){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

    public function update($id,Request $req)
    {
        $validator=Validator::make($req->all(),
        [
                'nama_anggota'=>'required',
                'alamat'=>'required',
                'tlp'=>'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah=Anggota_model::where('id',$id)->update ([
            'nama_anggota'=>$req->nama_anggota,
            'alamat'=>$req->alamat,
            'tlp'=>$req->tlp
        ]);
        if($ubah){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id)
    {
        $hapus=Anggota_model::where('id',$id)->delete();
        if($hapus){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

    // public function tampil_anggota()
    // {
    //     $data_siswa=Anggota_model::join('kelas','kelas.id','siswa.id_kelas')->get();
    //     return Response()->json($data_siswa);
    // }
}
