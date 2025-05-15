<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    //
    public function index()
    {
        // Data produk contoh
        $products = [
            ['id' => 1, 'name' => 'Produk A', 'price' => 10000],
            ['id' => 2, 'name' => 'Produk B', 'price' => 20000],
            ['id' => 3, 'name' => 'Produk C', 'price' => 15000],
        ];

        return view('sales.index', compact('products'));
    }

    public function store(Request $request)
    {
        // Simulasi menyimpan transaksi
        $validated = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        // Bisa tambahkan logika simpan ke database di sini
        // Sekarang hanya menampilkan pesan sukses

        return redirect()->back()->with('success', 'Transaksi berhasil disimpan!');
    }
}
