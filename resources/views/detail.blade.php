@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="product-detail">
                <img src="{{ $product['gallery'] }}" alt="">
I
            </div>
        </div>
        <div class="col-md-6">
            <a href="/">Go back</a>
            <div class="price">
                <h3>Price &nbsp;{{$product['price']}}</h3>
            </div>
            <div class="category">{{ $product['category'] }}</div>
            <div class="description">{{ $product['description'] }}</div>

            <button>Add to Cart</button>
            <button>buy Now</button>

        </div>
    </div>
</div>
@endsection