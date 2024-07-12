@extends('layouts.app')

@section('content')
<div class="checkout-container">
    <h2>Checkout</h2>

    @if(count($cartItems) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['price'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No items in cart.</p>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="payment_method">Payment Method</label>
            <div>
                @php
                    $waMessage = "I would like to complete my purchase with the following items:\n";
                    foreach ($cartItems as $item) {
                        $waMessage .= "Item: " . $item['name'] . "\n";
                        $waMessage .= "Quantity: " . $item['quantity'] . "\n";
                        $waMessage .= "Price: $" . $item['price'] . "\n\n";
                    }
                    $waMessage = urlencode($waMessage); // URL encode the message
                @endphp

                <a href="https://wa.me/089652622425?text={{ $waMessage }}" class="btn btn-success">
                    Pay with WhatsApp
                </a>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Complete Purchase</button>
    </form>
</div>
@endsection
