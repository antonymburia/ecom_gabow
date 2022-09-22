@extends('master')
@section('content')

<div class="container">
    <table>
        <tr>
            <th>
                cart Item
            </th>
            <th>
                Item
            </th>
            <th>
                price
            </th>
            <th>
                Remove from Cart
            </th>


        </tr>
        @foreach ($products as $item)
        <tr>
            <td>
                <img class="trending-product" src="{{ $item->gallery }}" style="width: 80px; height:auto;">
            </td>
            <td>
                <b>{{ $item->name }}</b>

            </td>
            <td>
                {{ $item->price }}
            </td>
            <td>
                <a href="/removecart/{{ $item->cart_id }}">
                    <button>Remove From Cart</button>
                </a>
            </td>
        </tr>
        <tr>


            @endforeach
            <a href="/ordernow">
                <button>Order Now</button>
            </a>





    </table>


</div>
@endsection