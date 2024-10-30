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
                            <h3>Halaman Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table_bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope='col'>No</th>
                                    <th scope='col'>Tanggal Penjualan</th>
                                    <th scope='col'>Total Harga</th>
                                    <th scope='col'>ID Pelanggan</th>
                                    <th scope='col'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penjualan as $penjualan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penjualan->created_at }}</td>
                                        <td>Rp.{{ number_format ($penjualan->total_harga) }}</td>
                                        <td>{{ $penjualan->id_pelanggan }}</td>
                                        <td><a class="btn btn-warning" href="/detail_penjualan">Detail</a>
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