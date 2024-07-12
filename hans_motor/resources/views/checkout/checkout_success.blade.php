@extends('layouts.app')

@section('content')
<div class="checkout-success-container">
    <h2>Checkout Successful</h2>
    <p>Thank you for your purchase! Your order has been successfully processed.</p>
    <a href="{{ route('cart.index') }}" class="btn btn-primary">Back to Shopping</a>
</div>
@endsection
