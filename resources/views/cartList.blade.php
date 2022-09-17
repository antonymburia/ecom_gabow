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
                <a href="/removecart/{{$item->cart_id}}"><button>remove from Cart</button>
                </a>
            </td>
        </tr>
        @endforeach

    </table>
    <a href="/ordernow">
        <button>Order Now</button>
    </a>
</div>
@endsection