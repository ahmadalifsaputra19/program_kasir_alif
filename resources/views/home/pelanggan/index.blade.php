@extends('layouts.master');
@section('title', 'pelanggan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table_bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pelanggan as $pelanggan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pelanggan->nama_pelanggan }}</td>
                                        <td>{{ $pelanggan->alamat }}</td>
                                        <td>{{ $pelanggan->nomor_telepon }}</td>
                                        <td><a class="btn btn-warning" href="/pelanggan/{{ $pelanggan->id }}/show">Edit</a>
                                            <a class="btn btn-danger" href="/pelanggan/{{ $pelanggan->id }}/delete"
                                            onclick="return confirm('Yakin Mau Di Hapus?')">Hapus</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection