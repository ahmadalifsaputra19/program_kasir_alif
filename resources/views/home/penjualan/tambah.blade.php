@extends('layouts.master');
@section('title', 'penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Penjualan</label>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label"></label>
                                            <input
                                                type="date"
                                                class="form-control"
                                                name="tanggal_penjualan"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            @error('tanggal_penjualan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                        <div class="card-body">
                                            <form action="'/penjualan/simpan" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                                                    <select name="id_pelanggan" id="" class="form-control">
                                                        <option value="">Pilih Pelanggan</option>
                                                        @foreach($pelanggan as $pelanggan)
                                                        <option value="{{$pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection