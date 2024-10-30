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
                            <h3>Halaman Data Detail Penjualan</h3>
                            <a class="btn btn-primary" href="/detail_penjualan/tambah">Tambah</a>
                            <a class="btn btn-warning" href="/penjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table_bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope='col'>No</th>
                                    <th scope='col'>ID Detail</th>
                                    <th scope='col'>ID Penjualan</th>
                                    <th scope='col'>ID Produk</th>
                                    <th scope='col'>Jumlah Produk</th>
                                    <th scope='col'>Subtotal</th>
                                    <th scope='col'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($detail_penjualan as $detail_penjualan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $detail_penjualan->id_detail }}</td>
                                        <td>{{ $detail_penjualan->id_penjualan }}</td>
                                        <td>{{ $detail_penjualan->id_produk }}</td>
                                        <td>{{ $detail_penjualan->jumlah_produk }}</td>
                                        <td>{{ $detail_penjualan->subtotal }}</td>
                                        <td><a class="btn btn-warning" href="">Struk</a>
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