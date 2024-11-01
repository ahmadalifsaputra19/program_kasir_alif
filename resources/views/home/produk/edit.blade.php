@extends('layouts.master');
@section('title', 'produk');
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Produk</h3>
                            <a class="btn btn-primary" href="/produk">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/produk/{{ $produk->id }}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id="gambar"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                    <label for="" class="form-label">Nama Produk</label>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label"></label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="nama_produk"
                                                id=""
                                                value="{{ $produk->nama_produk }}"
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            @error('nama_produk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                        </div>
                                        <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label"></label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="harga"
                                                id=""
                                                value="{{ $produk->harga }}"
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                        </div>
                                        <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label"></label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="stok"
                                                id=""
                                                value="{{ $produk->stok }}"
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                        </div>
                                        <button class="btn btn-primary" type="submit">Update</button>
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