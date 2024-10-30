@extends('layouts.master');
@section('title', 'detail_penjualan');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Detail Penjualan</h3>
                            <a class="btn btn-primary" href="/detail_penjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/detail_penjualan/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">ID Detail</label>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label"></label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="id_detail"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                        </div>
                                        <div class="card-body">
                                            <form action="'/detail_penjualan/simpan" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="id_pelanggan" class="form-label">ID Produk</label>
                                                    <select name="id_pelanggan" id="">
                                                        <option value="">Pilih Produk</option>
                                                        @foreach($produk as $produk)
                                                        <option value="{{$produk->id}}">{{$produk->nama_produk}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mb-3">
                                    <label for="" class="form-label">Jumlah Produk</label>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label"></label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="jumlah_produk"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            @error('jumlah_produk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                    <label for="" class="form-label">Subtotal</label>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label"></label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="subtotal"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            @error('subtotal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
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