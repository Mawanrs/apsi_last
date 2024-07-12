<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataPelanggan;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPelangganController extends Controller
{
    public function index()
    {
        $datapelanggans = DataPelanggan::with('product')->get();

        return view('admin.datapelanggans.index', compact('datapelanggans'));
    }

    public function create()
    {
        $products = Product::all()->pluck('nama_product', 'id');

        return view('admin.datapelanggans.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
            'product_id' => 'required|exists:products,id',
        ]);

        DataPelanggan::create($request->all());

        return redirect()->route('admin.datapelanggans.index');
    }

    public function edit(DataPelanggan $datapelanggan)
    {
        $products = Product::all()->pluck('nama_product', 'id');

        return view('admin.datapelanggans.edit', compact('datapelanggan', 'products'));
    }

    public function update(Request $request, DataPelanggan $datapelanggan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
            'product_id' => 'required|exists:products,id',
        ]);

        $datapelanggan->update($request->all());

        return redirect()->route('admin.datapelanggans.index');
    }

    public function show(DataPelanggan $datapelanggan)
    {
        return view('admin.datapelanggans.show', compact('datapelanggan'));
    }

    public function destroy(DataPelanggan $datapelanggan)
    {
        $datapelanggan->delete();

        return back();
    }
}
