@extends('master')
@section('content')
<div class="container">
    @foreach ($products as $item)
    <a href="detail/{{$item->id}}">
        <div class="trending-img">
            <img class="trending-product" src="{{ $item->gallery }}">
            <div class="">
                <h5>{{ $item->name }}</h5>
                <h5>{{ $item->price }}</h5>
                <button>remove from Cart</button>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection