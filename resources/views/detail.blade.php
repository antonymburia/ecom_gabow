@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="product-detail">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">

            </div>
        </div>
        <div class="col-md-6">
            <a href="/">Go back</a>
            <div class="price">
                <h3>Price &nbsp;{{$product['price']}}</h3>
            </div>
            <div class="category">{{ $product['category'] }}</div>
            <div class="description">{{ $product['description'] }}</div>

            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button>Add to Cart</button>
            </form>
            <button>buy Now</button>

        </div>
    </div>
</div>
@endsection