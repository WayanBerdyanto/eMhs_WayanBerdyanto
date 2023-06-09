@extends('layouts/main')
@section('title', 'mahasiswa')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="text-center">Form Edit Mahasiswa</h4>
        </div>
        <div class="card-body">
            @php
                $minat = explode(',' , $mhs->minat);
            @endphp
            <form action="/mahasiswa/updatemhs/{{ $mhs->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukan Nim" name="nim" value="{{ $mhs->nim }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $mhs->nama }}">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                        <input type="radio" name="gender" id="pria" class="form-check-input" value="Pria" {{ $mhs->gender == 'Pria'?'checked':''}}>
                        <label for="pria" class="mr-4">Pria</label>

                        <input type="radio" name="gender" id="wanita" class="form-check-input" value="Wanita" {{ $mhs->gender == 'Wanita    '?'checked':''}}>
                        <label for="wanita">Wanita</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <select class="form-control" id="prodi" name="prodi">
                        <option value="Teknik Informatika" {{ $mhs->prodi == 'Teknik Informatika'?'selected':''}}>Teknik Informatika</option>
                        <option value="Sistem Informasi" {{ $mhs->prodi == 'Sistem Informasi'?'selected':''}}>Sistem Informasi</option>
                        <option value="Teologi" {{ $mhs->prodi == 'Teologi'?'selected':''}}>Teologi</option>
                        <option value="Kedokteran" {{ $mhs->prodi == 'Kedokteran'?'selected':''}}>Kedokteran</option>
                        <option value="Pendidikan Bahasa Inggris" {{ $mhs->prodi == 'Pendidikan Bahasa Inggris'?'selected':''}}>Pendidikan Bahasa Inggris</option>
                        <option value="Manajemen" {{ $mhs->prodi == 'Manajemen'?'selected':''}}>Manajemen</option>
                        <option value="Desain Produk" {{ $mhs->prodi == 'Desain Produk'?'selected':''}}>Desain Produk</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Minat</label>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" id="Artifical Intelegent" class="form-check-input"
                            value="Artifical Intelegent"{{ in_array('Artifical Intelegent',$minat)?'checked':'' }}>
                        <label for="Artifical Intelegent" class="mr-4">Artifical Intelegent</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" id="Web Engineering" class="form-check-input"
                            value="Web Engineering" {{ in_array('Web Engineering',$minat)?'checked':'' }}>
                        <label for="Web Engineering" class="mr-4">Web Engineering</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" id="Data Engineering" class="form-check-input"
                            value="Data Engineering" {{ in_array('Data Engineering',$minat)?'checked':'' }}>
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
