<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show()
    {
        // Ambil item keranjang dari sesi
        $cartItems = session('cart', []);

        dd($cartItems);

        return view('checkout', compact('cartItems'));
    }

    public function process(Request $request)
    {
        // Proses checkout
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'payment_method' => 'required|string',
        ]);

        // Simpan data order ke database, kirim email, dll.
        $order = [
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'payment_method' => $validatedData['payment_method'],
            'total' => session('cart_total'), // Asumsi total keranjang disimpan dalam sesi
        ];

        // Redirect ke halaman sukses
        return redirect()->route('checkout.success');
    }

    public function success()
    {
        return view('checkout_success');
    }
}
