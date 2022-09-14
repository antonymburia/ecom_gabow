@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="product-detail">
                <img src="{{ $product['gallery'] }}" alt="">
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
@endsection