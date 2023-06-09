@extends('layouts/main')
@section('title', 'mahasiswa')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="text-center">Form Tambah Mahasiswa</h4>
        </div>
        <div class="card-body">
            <form action="/mahasiswa/simpan" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukan Nim" name="nim">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                        <input type="radio" name="gender" id="pria" class="form-check-input" value="Pria">
                        <label for="pria" class="mr-4">Pria</label>

                        <input type="radio" name="gender" id="wanita" class="form-check-input" value="Wanita">
                        <label for="wanita">Wanita</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <select class="form-control" id="prodi" name="prodi">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teologi">Teologi</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Desain Produk">Desain Produk</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Minat</label>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" id="Artifical Intelegent" class="form-check-input"
                            value="Artifical Intelegent">
                        <label for="Artifical Intelegent" class="mr-4">Artifical Intelegent</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" id="Web Engineering" class="form-check-input"
                            value="Web Engineering">
                        <label for="Web Engineering" class="mr-4">Web Engineering</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" id="Data Engineering" class="form-check-input"
                            value="Data Engineering">
                        <label for="Data Engineering" class="mr-4">Data Engineering</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success mt-2 mb-3 float-right">
                    <i class="bi bi-save-fill"></i>
                    Simpan
                </button>
            </form>
        </div>
    @endsection
