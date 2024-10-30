<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail_penjualan = DetailPenjualan::all();
        $penjualan = Penjualan::all();
        $produk = Produk::all();
        return view('home.detail_penjualan.index', compact('detail_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $detail_penjualan = DetailPenjualan::all();
        $penjualan = Penjualan::all();
        $produk = Produk::all();
        return view('home.detail_penjualan.tambah', compact('detail_penjualan', 'penjualan', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DetailPenjualan::create([
            'id_detail' => $request->id_detail,
            'id_pelanggan' => $request->id_pelanggan,
            'id_penjualan' => $request->id_penjualan,
            'id_produk' => $request->id_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'subtotal' => $request->subtotal,
        ]);
        return redirect('/detail_penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
