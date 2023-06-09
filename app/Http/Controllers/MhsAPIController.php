<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MhsAPIController extends Controller
{
    public function all(){
        $mhs = Mahasiswa::all();

        return response()->json(
            [
                'success'=>true,
                'message' => 'Data Berhasil Ditambilkan',
                'data' => $mhs
            ], 200
        );
    }
    public function create(Request $request){
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);
        if($mhs){
            return response()->json([
                'success'=>true,
                'message' => 'Data Berhasil Ditambahkan',
                'data' => $mhs
            ], 200);
        }else{
            return response()->json([
                'success'=>false,
                'message' => 'Data Gagal Berhasil Ditambahkan',
                'data' => $mhs
            ], 401);
        }
    }
    public function edit($id, Request $request){
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);
        if($mhs){
            return response()->json([
                'success'=>true,
                'message' => 'Data Berhasil Di Edit',
                'data' => $mhs
            ], 200);
        }else{
            return response()->json([
                'success'=>false,
                'message' => 'Data Gagal Berhasil Di Edit',
                'data' => $mhs
            ], 401);
        }
    }
    public function delete($id){
        $mhs = Mahasiswa::find($id)->delete();
        if($mhs){
            return response()->json([
                'success'=>true,
                'message'=> 'Data Berhasil Di hapus',
                'data' => $mhs
            ],200);
        }else{
            return response()->json([
                'succes'=>false,
                'message'=> 'Data gagal Di hapus',
                'data' => $mhs
            ],401);
        }
    }
}
