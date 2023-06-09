@extends('layouts/main')
@section('title', 'mahasiswa')
@section('content')
    @if (session('flash_login'))
        <div class="alert alert-success fade show" role="alert">
            <strong>
                {{ session('flash_login') }}
            </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card mt-4">
        <div class="card-header">
            <a class="btn btn-outline-primary my-2 my-lg-0"href="/mahasiswa/formtambah">
                <i class="bi bi-file-earmark-plus"></i> Tambah Data
            </a>
            <span>
                <form action="/mahasiswa/find" class="form-inline my-2 my-lg-0 float-right" method="GET">
                    <input name="key" class="form-control mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </span>
        </div>
        <div class="card-body">
            @if (session('alert'))
                <div class="alert alert-success fade show" role="alert">
                    <strong>
                        {{ session('alert') }}
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('alert_hapus'))
                <div class="alert alert-danger fade show" role="alert">
                    <strong>
                        {{ session('alert_hapus') }}
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{-- <a class="btn btn-outline-primary mb-2 float-right"href="/mahasiswa/desc">
                <i class="bi bi-file-earmark-plus"></i> Descending
            </a> --}}
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Minat</th>
                        <th scope="col" class="text-center" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mhs as $idx => $data)
                        <tr>
                            <th>{{ $mhs->firstItem() + $idx }}</th>
                            <td>{{ $data->nim }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->prodi }}</td>
                            <td>{{ $data->minat }}</td>
                            <td>
                                <a href="/mahasiswa/formedit/{{ $data->id }}" class="btn btn-primary mr-2">
                                    <i class="bi bi-pencil-square"></i> Update</a>

                            </td>
                            <td>
                                <a href="/mahasiswa/deletemhs/{{ $data->id }}" class="btn btn-danger"
                                    data-toggle="modal" data-target="#modalset_hapus">
                                    <i class="bi bi-trash3"></i> Delete</a>
                            </td>
                            <div class="modal" tabindex="-1" role="dialog" id="modalset_hapus">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Anda Yakin Ingin Mengahapus Data ini?</p>
                                        </div>
                                        <div class="modal-footer" class="text-light">
                                            <a href="/mahasiswa/deletemhs/{{ $data->id }}"
                                                class="btn btn-primary">Ok</a>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right mr-2">{{ $mhs->links() }}</span>
        </div>
        <div class="alert alert-success" role="alert">
            Total Data Yang Suskses Ditampilkan : {{ $mhs->count() }}
        </div>
    </div>
@endsection
