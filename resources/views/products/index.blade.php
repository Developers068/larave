@extends('layout.app')

@section('title', 'Product')

@section('contents')

<div style="background-color:lightgray; padding:10px;">

    @if($products->isEmpty())
        <h1>No products available</h1>
    @else
        @foreach($products as $product)
            <div style="margin:5px; padding:5px;">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->price }}</p>
            </div>
        @endforeach
    @endif

</div>
<div>
    <button><a href="{{route('products.create')}}">Add new product</a></button>
</div>

@endsection
