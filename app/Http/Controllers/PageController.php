<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }
    public function mahasiswa()
    {
        $mhs = Mahasiswa::paginate(10);
        return view('mahasiswa', ['key' => 'mahasiswa'], ['mhs' => $mhs]);
    }
    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }
    public function find(Request $request)
    {
        $cari = $request->key;
        $mhs = Mahasiswa::where('nama', 'like', '%' . $cari . '%')->paginate(10);
        $mhs->appends($request->all());
        return view('mahasiswa', ['key' => 'mahasiswa', 'mhs' => $mhs]);
    }
    public function tambah()
    {
        return view('formtambah', ['key' => 'mahasiswa']);
        // return redirect("/mahasiswa");
    }
    public function simpan(Request $request)
    {
        $nim = $request->nim;
        $nama = $request->nama;
        $gender = $request->gender;
        $prodi = $request->prodi;
        $minat = implode(',', $request->get('minat'));

        Mahasiswa::create([
            'nim' => $nim,
            'nama' => $nama,
            'gender' => $gender,
            'prodi' => $prodi,
            'minat' => $minat
        ]);
        return redirect('mahasiswa')->with('alert', 'Nim ' . $nim . ' Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('formedit', ['key' => 'mahasiswa', 'mhs' => $mhs]);
    }
    public function updatemhs($id, Request $request)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = implode(',', $request->get('minat'));
        $mhs->save();

        return redirect('/mahasiswa')->with('alert', 'Nim ' . $mhs->nim . ' Berhasil DiUpdate');
    }
    // $id = $request->id;
    // Mahasiswa::where('id', $id)->delete();
    public function deletemhs($id, Request $request)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('/mahasiswa')->with('alert_hapus', 'Nim ' . $mhs->nim . ' Berhasil Dihapus');
    }
    public function desc()
    {
        $mhs = Mahasiswa::orderby('id', 'desc')->paginate(10);
        return view('mahasiswa', ['key' => 'mahasiswa'], ['mhs' => $mhs]);
    }
}