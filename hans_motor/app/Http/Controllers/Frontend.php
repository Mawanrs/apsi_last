<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Datapelanggan;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function getDb(Request $request)
    {
        $category = $request->input('category');

        // Fetch categories
        $categories = Product::select('category')->distinct()->get();

        // Fetch products based on selected category
        $query = Product::query();
        if ($category) {
            $query->where('category', $category);
        }
        $products = $query->get();

        // Fetch all datapelanggan records
        $datapelanggans = DataPelanggan::all();

        return view('index', compact('products', 'categories', 'category', 'datapelanggans'));
    }
}
