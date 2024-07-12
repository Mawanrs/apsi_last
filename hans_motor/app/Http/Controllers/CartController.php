<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Dummy data for the cart items
        $cartItems = [
            (object)[
                'name' => 'Item Name',
                'description' => 'Description of the item.',
                'price' => 10.00,
            ],
            (object)[
                'name' => 'Another Item Name',
                'description' => 'Description of another item.',
                'price' => 15.00,
            ],
        ];

        $total = collect($cartItems)->sum('price');

        return view('cart.cart', compact('cartItems', 'total'));
    }

    public function addToCart(Request $request)
    {
    $cart = session()->get('cart', []);

    $cart[] = [
        'name' => $request->input('name'),
        'quantity' => $request->input('quantity'),
        'price' => $request->input('price')
    ];

    session()->put('cart', $cart);

    return redirect()->route('checkout');
    }

}
