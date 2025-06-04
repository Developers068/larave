@extends('layout.app')

@section('title', 'Product')

@section('contents')
<div style="padding: 20px;">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 10px;">
            <label for="name">Product Name:</label><br>
            <input type="text" name="name" id="name" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="price">Price:</label><br>
            <input type="text" name="price" id="price" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="quantity">Quantity:</label><br>
            <input type="text" name="quantity" id="quantity" required>
        </div>

        <button type="submit">Save Product</button>
    </form>
</div>
@endsection
