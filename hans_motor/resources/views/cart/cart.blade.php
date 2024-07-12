@extends('layouts.app')

@section('content')
<div class="cart-container">
    <h2>Your Shopping Cart</h2>

    @if(isset($cartItems) && count($cartItems) > 0)
        @foreach ($cartItems as $item)
            <div class="cart-item">
                <h4>{{ $item->name }}</h4>
                <p>{{ $item->description }}</p>
                <p>Price: ${{ $item->price }}</p>
            </div>
        @endforeach

        <div class="cart-total">
            Total: ${{ $total }}
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="payment_method">Payment Method:</label>
            <a href="https://wa.me/+6289652622425?text=I%20would%20like%20to%20complete%20my%20purchase" class="btn btn-success">
                Pay with WhatsApp
            </a>
        </div>
    </form>
    
</div>
@endsection
